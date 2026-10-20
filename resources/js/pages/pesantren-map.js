import L from 'leaflet';
const mapElement = document.getElementById('pesantren-map');
if (mapElement && !mapElement.dataset.mapModuleLoaded) {
    mapElement.dataset.mapModuleLoaded = 'true';
    const DATA_SOURCES = [
        'https://gist.githubusercontent.com/itnirwana/475e123fe5e4ad9aa5287070b6760124/raw/jawa_barat.json',
        'https://raw.githubusercontent.com/mahendrayudha/indonesia-geojson/main/Jawa%20Barat/Kabupaten-Kota%20%28Provinsi%20Jawa%20Barat%29/Kabupaten-Kota%20%28Provinsi%20Jawa%20Barat%29.geojson'
    ];
    let map = null;
    let tileLayer = null;
    let boundaryLayer = null;
    let selectedLabel = null;
    let locationMarker = null;
    let locationAccuracy = null;
    let themeObserver = null;
    let resizeObserver = null;
    let requestController = null;
    let loading = false;
    let darkMode = document.documentElement.classList.contains('dark');
    const getTheme = () => document.documentElement.classList.contains('dark');
    const getName = feature => {
        const properties = feature?.properties || {};
        return properties.alt_name || properties.WADMKK || properties.NAMOBJ || properties.name || properties.NAME_2 || 'Wilayah Jawa Barat';
    };
    const getProvinceCode = feature => {
        const properties = feature?.properties || {};
        return String(properties.prov_id ?? properties.prov_code ?? properties.kode_prov ?? properties.KODE_PROV ?? properties.PROVNO ?? '').trim().replace(/^0+/, '');
    };
    const getProvinceName = feature => {
        const properties = feature?.properties || {};
        return String(properties.prov_name ?? properties.province ?? properties.provinsi ?? properties.PROVINSI ?? properties.WADMPR ?? properties.NAME_1 ?? '').trim().toUpperCase();
    };
    const getCollection = data => {
        let features = data?.type === 'FeatureCollection' && Array.isArray(data.features) ? data.features : data?.type === 'Feature' ? [data] : [];
        features = features.filter(feature => feature?.geometry && ['Polygon', 'MultiPolygon'].includes(feature.geometry.type));
        if (!features.length) throw new Error('GeoJSON tidak berisi geometri wilayah yang valid.');
        const hasCodes = features.some(feature => getProvinceCode(feature) !== '');
        const hasProvinceNames = features.some(feature => getProvinceName(feature) !== '');
        if (hasCodes) {
            features = features.filter(feature => getProvinceCode(feature) === '32');
        } else if (hasProvinceNames) {
            features = features.filter(feature => ['JAWA BARAT', 'WEST JAVA'].includes(getProvinceName(feature)));
        }
        if (!features.length) throw new Error('Tidak ditemukan data batas wilayah Jawa Barat.');
        return { type: 'FeatureCollection', features };
    };
    const getTileUrl = dark => dark
        ? 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png'
        : 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const getAttribution = dark => dark
        ? '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener noreferrer">OpenStreetMap</a> &copy; <a href="https://carto.com/attributions" target="_blank" rel="noopener noreferrer">CARTO</a>'
        : '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener noreferrer">OpenStreetMap contributors</a>';
    const getBoundaryStyle = dark => ({
        color: dark ? '#5eead4' : '#0f766e',
        weight: 1,
        opacity: 0.8,
        fillColor: dark ? '#14b8a6' : '#10b981',
        fillOpacity: 0.04,
        lineCap: 'round',
        lineJoin: 'round'
    });
    const stopObservers = () => {
        themeObserver?.disconnect();
        resizeObserver?.disconnect();
        themeObserver = null;
        resizeObserver = null;
    };
    const destroyMap = () => {
        stopObservers();
        if (requestController) {
            requestController.abort();
            requestController = null;
        }
        if (map) {
            map.scrollWheelZoom.disable();
            map.remove();
            map = null;
        }
        boundaryLayer = null;
        tileLayer = null;
        selectedLabel = null;
    };
    const showError = message => {
        destroyMap();
        loading = false;
        mapElement.replaceChildren();
        const wrapper = document.createElement('div');
        wrapper.className = 'pesantren-map__error';
        wrapper.setAttribute('role', 'alert');
        const text = document.createElement('p');
        text.textContent = message;
        const retry = document.createElement('button');
        retry.type = 'button';
        retry.className = 'pesantren-map__retry';
        retry.textContent = 'Coba lagi';
        retry.addEventListener('click', initMap, { once: true });
        wrapper.append(text, retry);
        mapElement.appendChild(wrapper);
    };
    const fetchBoundaries = async () => {
        let lastError;
        for (const url of DATA_SOURCES) {
            const controller = new AbortController();
            requestController = controller;
            const timeout = window.setTimeout(() => controller.abort(), 15000);
            try {
                const response = await fetch(url, {
                    signal: controller.signal,
                    headers: { Accept: 'application/geo+json, application/json' },
                    cache: 'no-cache'
                });
                if (!response.ok) throw new Error(`HTTP ${response.status}`);
                const data = await response.json();
                const collection = getCollection(data);
                if (collection.features.length < 20) {
                    throw new Error(`Jumlah wilayah terlalu sedikit: ${collection.features.length}`);
                }
                return collection;
            } catch (error) {
                lastError = error;
                console.warn('Sumber batas wilayah gagal:', url, error);
            } finally {
                window.clearTimeout(timeout);
                if (requestController === controller) requestController = null;
            }
        }
        throw lastError || new Error('Sumber data batas wilayah tidak tersedia.');
    };
    const setTheme = dark => {
        if (!map || darkMode === dark) return;
        darkMode = dark;
        if (tileLayer) map.removeLayer(tileLayer);
        tileLayer = L.tileLayer(getTileUrl(dark), {
            attribution: getAttribution(dark),
            maxZoom: 19,
            subdomains: 'abc'
        }).addTo(map);
        boundaryLayer?.setStyle(getBoundaryStyle(dark));
    };
    const showAreaLabel = (feature, layer) => {
        if (!map) return;
        const bounds = layer.getBounds();
        if (!bounds.isValid()) return;
        if (selectedLabel) map.removeLayer(selectedLabel);
        const name = getName(feature);
        const topCenter = L.latLng(bounds.getNorth(), bounds.getCenter().lng);
        selectedLabel = L.tooltip({
            permanent: true,
            direction: 'top',
            offset: [0, -6],
            className: 'pesantren-map__area-label',
            opacity: 1,
            interactive: false
        }).setLatLng(topCenter).setContent(name).addTo(map);
    };
    const enableCtrlZoom = event => {
        if (map && event.key === 'Control') map.scrollWheelZoom.enable();
    };
    const disableCtrlZoom = event => {
        if (map && event.key === 'Control' && !event.ctrlKey) map.scrollWheelZoom.disable();
    };
    const disableZoomOnBlur = () => {
        map?.scrollWheelZoom.disable();
    };
    window.addEventListener('keydown', enableCtrlZoom);
    window.addEventListener('keyup', disableCtrlZoom);
    window.addEventListener('blur', disableZoomOnBlur);
    const locateUser = () => {
        if (!map) return;
        if (!navigator.geolocation) {
            window.alert('Browser ini tidak mendukung fitur lokasi.');
            return;
        }
        navigator.geolocation.getCurrentPosition(
            position => {
                if (!map) return;
                const latlng = L.latLng(position.coords.latitude, position.coords.longitude);
                const accuracy = position.coords.accuracy;
                if (locationMarker) map.removeLayer(locationMarker);
                if (locationAccuracy) map.removeLayer(locationAccuracy);
                locationMarker = L.marker(latlng, {
                    icon: L.divIcon({
                        className: 'pesantren-map__location-icon',
                        html: '<span class="pesantren-map__location-pin"></span>',
                        iconSize: [30, 38],
                        iconAnchor: [15, 38]
                    }),
                    title: 'Lokasi Saya',
                    alt: 'Penanda lokasi saya',
                    keyboard: true,
                    zIndexOffset: 1000
                }).addTo(map);
                locationMarker.bindTooltip('Lokasi Saya', {
                    direction: 'top',
                    offset: [0, -34],
                    className: 'pesantren-map__area-label'
                });
                locationAccuracy = L.circle(latlng, {
                    radius: accuracy,
                    color: darkMode ? '#5eead4' : '#0f766e',
                    weight: 1,
                    fillColor: darkMode ? '#2dd4bf' : '#14b8a6',
                    fillOpacity: 0.1,
                    interactive: false
                }).addTo(map);
                map.flyTo(latlng, Math.max(map.getZoom(), 12), {
                    duration: 0.8
                });
            },
            error => {
                const messages = {
                    1: 'Izin lokasi ditolak. Aktifkan izin lokasi untuk situs ini di pengaturan browser.',
                    2: 'Lokasi belum dapat ditentukan. Periksa GPS atau koneksi perangkat.',
                    3: 'Permintaan lokasi terlalu lama. Silakan coba lagi.'
                };
                window.alert(messages[error.code] || 'Lokasi tidak dapat ditemukan.');
            },
            {
                enableHighAccuracy: true,
                timeout: 15000,
                maximumAge: 30000
            }
        );
    };
    const addLocationControl = () => {
        const control = L.control({ position: 'topright' });
        control.onAdd = () => {
            const container = L.DomUtil.create('div', 'pesantren-map__location-control');
            const button = L.DomUtil.create('button', 'pesantren-map__location-button', container);
            button.type = 'button';
            button.title = 'Tampilkan lokasi saya';
            button.setAttribute('aria-label', 'Tampilkan lokasi saya');
            button.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="7"></circle><circle cx="12" cy="12" r="2"></circle><path d="M12 2v3M12 19v3M2 12h3M19 12h3"></path></svg><span>Lokasi Saya</span>';
            L.DomEvent.disableClickPropagation(container);
            L.DomEvent.disableScrollPropagation(container);
            L.DomEvent.on(button, 'click', locateUser);
            return container;
        };
        control.addTo(map);
    };
    async function initMap() {
        if (loading || !mapElement.isConnected) return;
        loading = true;
        destroyMap();
        darkMode = getTheme();
        mapElement.replaceChildren();
        const loadingElement = document.createElement('div');
        loadingElement.className = 'pesantren-map__loading';
        const spinner = document.createElement('span');
        spinner.className = 'pesantren-map__spinner';
        const label = document.createElement('span');
        label.textContent = 'Memuat batas kabupaten/kota Jawa Barat...';
        loadingElement.append(spinner, label);
        mapElement.appendChild(loadingElement);
        try {
            const collection = await fetchBoundaries();
            if (!mapElement.isConnected) {
                loading = false;
                return;
            }
            mapElement.replaceChildren();
            map = L.map(mapElement, {
                zoomControl: true,
                scrollWheelZoom: false,
                zoomSnap: 0.25,
                minZoom: 6,
                maxZoom: 18
            });
            tileLayer = L.tileLayer(getTileUrl(darkMode), {
                attribution: getAttribution(darkMode),
                maxZoom: 19,
                subdomains: 'abc'
            }).addTo(map);
            addLocationControl();
            boundaryLayer = L.geoJSON(collection, {
                style: () => getBoundaryStyle(darkMode),
                onEachFeature: (feature, layer) => {
                    layer.on('click', () => showAreaLabel(feature, layer));
                }
            }).addTo(map);
            const bounds = boundaryLayer.getBounds();
            if (!bounds.isValid()) throw new Error('Data batas wilayah tidak memiliki koordinat valid.');
            map.fitBounds(bounds, {
                padding: [24, 24],
                maxZoom: 8,
                animate: false
            });
            map.scrollWheelZoom.disable();
            map.invalidateSize(true);
            themeObserver = new MutationObserver(() => setTheme(getTheme()));
            themeObserver.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class']
            });
            resizeObserver = new ResizeObserver(() => map?.invalidateSize());
            resizeObserver.observe(mapElement);
            loading = false;
            console.info(`Batas wilayah Jawa Barat berhasil dimuat: ${collection.features.length} fitur.`);
        } catch (error) {
            console.error('Peta Pesantren AISNU Jawa Barat:', error);
            showError('Batas wilayah belum berhasil dimuat. Coba lagi atau periksa koneksi dan sumber data GeoJSON.');
        }
    }
    window.addEventListener('pagehide', destroyMap, { once: true });
    initMap();
}