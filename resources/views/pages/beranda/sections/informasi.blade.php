<section class="section-space border-y border-line bg-canvas">
    <div class="container-site">
        <div class="section-heading">
            <span class="section-eyebrow">
                <span class="size-1.5 rounded-full bg-brand-600"></span>
                Pusat Informasi
            </span>

            <h2 class="section-title">
                Kenali isu, ikuti gerakan, temukan informasi.
            </h2>

            <p class="section-description">
                Website AISNU Jawa Barat menjadi ruang untuk mengikuti perkembangan organisasi, memahami isu perlindungan santri, dan menemukan informasi mengenai kegiatan serta kolaborasi.
            </p>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <x-content-card
                title="Berita dan advokasi"
                :url="route('berita.index')"
                category="Gerakan"
                excerpt="Ikuti berita, kegiatan, dan perkembangan upaya AISNU Jawa Barat dalam mendorong perlindungan santri."
                cta-label="Baca berita" />

            <x-content-card
                title="Informasi dan edukasi"
                :url="route('informasi')"
                category="Edukasi"
                excerpt="Jelajahi informasi organisasi dan materi edukasi untuk memperkuat kesadaran tentang pencegahan kekerasan."
                cta-label="Jelajahi informasi" />

            <x-content-card
                title="Publikasi dan referensi"
                :url="route('publikasi.index')"
                category="Pengetahuan"
                excerpt="Temukan publikasi dan referensi untuk mendukung diskusi, pembelajaran, serta penguatan perspektif perlindungan santri."
                cta-label="Lihat publikasi" />

            <x-content-card
                title="Program dan inisiatif"
                :url="route('program')"
                category="Program"
                excerpt="Kenali program, inisiatif, dan ruang kontribusi yang dikembangkan untuk mendukung masyarakat."
                cta-label="Jelajahi program" />

            <x-content-card
                title="Profil AISNU Jawa Barat"
                :url="route('profil')"
                category="Organisasi"
                excerpt="Kenali identitas, arah gerakan, dan peran AISNU Jawa Barat dalam membangun ruang kolaborasi."
                cta-label="Kenali organisasi" />

            <x-content-card
                title="Kolaborasi dan kemitraan"
                :url="route('kemitraan')"
                category="Kolaborasi"
                excerpt="Buka peluang kerja sama untuk memperkuat edukasi, pencegahan kekerasan, dan perlindungan santri."
                cta-label="Jajaki kemitraan" />
        </div>
    </div>
</section>