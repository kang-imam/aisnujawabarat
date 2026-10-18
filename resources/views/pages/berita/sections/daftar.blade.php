<section id="daftar-berita" class="section-space bg-canvas">
    <div class="container-site">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <span class="section-eyebrow">Arsip Informasi</span>
                <h2 class="section-title mt-3">Jelajahi Berita dan Perkembangan AISNU</h2>
                <p class="section-description mt-4">Temukan informasi seputar organisasi, kehidupan pesantren, perlindungan santri, pengembangan kapasitas, dan peluang kolaborasi.</p>
            </div>
            <a href="{{ route('informasi') }}" class="btn btn-outline inline-flex items-center justify-center gap-2">
                Pusat Informasi
                <x-heroicon-o-arrow-up-right class="h-5 w-5" />
            </a>
        </div>
        <div class="mt-10 rounded-3xl border border-line bg-surface p-5 sm:p-7">
            <form action="{{ route('pencarian') }}" method="GET" class="flex flex-col gap-3 sm:flex-row">
                <label for="cari-berita" class="sr-only">Cari berita dan informasi</label>
                <div class="relative flex-1">
                    <x-heroicon-o-magnifying-glass class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-muted" />
                    <input id="cari-berita" type="search" name="q" value="{{ request('q') }}" placeholder="Cari berita atau topik informasi..." class="form-control w-full pl-12" />
                </div>
                <button type="submit" class="btn btn-primary inline-flex items-center justify-center gap-2">
                    Cari Informasi
                    <x-heroicon-o-arrow-right class="h-5 w-5" />
                </button>
            </form>
            <div class="mt-5 flex flex-wrap items-center gap-2">
                <span class="mr-1 text-sm font-semibold text-ink">Topik pilihan:</span>
                <a href="{{ route('informasi') }}" class="rounded-full border border-line px-4 py-2 text-sm font-medium text-muted transition hover:border-brand-700 hover:text-brand-800">Organisasi</a>
                <a href="{{ route('pesantren') }}" class="rounded-full border border-line px-4 py-2 text-sm font-medium text-muted transition hover:border-brand-700 hover:text-brand-800">Pesantren</a>
                <a href="{{ route('program') }}" class="rounded-full border border-line px-4 py-2 text-sm font-medium text-muted transition hover:border-brand-700 hover:text-brand-800">Program</a>
                <a href="{{ route('santripreneur') }}" class="rounded-full border border-line px-4 py-2 text-sm font-medium text-muted transition hover:border-brand-700 hover:text-brand-800">Santripreneur</a>
                <a href="{{ route('kemitraan') }}" class="rounded-full border border-line px-4 py-2 text-sm font-medium text-muted transition hover:border-brand-700 hover:text-brand-800">Kemitraan</a>
            </div>
        </div>
        <div class="mt-10 grid gap-6 lg:grid-cols-3">
            <article class="card flex h-full flex-col overflow-hidden">
                <div class="relative flex min-h-52 items-end overflow-hidden bg-[#063b35] p-6">
                    <div class="absolute -right-8 -top-10 h-40 w-40 rounded-full border border-white/10"></div>
                    <div class="absolute -right-2 -top-4 h-28 w-28 rounded-full border border-white/10"></div>
                    <div class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-white">
                        <x-heroicon-o-newspaper class="h-7 w-7" />
                    </div>
                    <span class="absolute right-5 top-5 rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-xs font-semibold text-white">Organisasi</span>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">Profil dan Kegiatan</span>
                    <h3 class="mt-3 text-xl font-bold text-ink">Mengenal AISNU Jawa Barat dan Perannya</h3>
                    <p class="mt-3 flex-1 leading-7 text-muted">Kenali latar belakang organisasi, arah pengembangan, serta informasi yang membantu masyarakat memahami AISNU Jawa Barat.</p>
                    <a href="{{ route('profil') }}" class="mt-6 inline-flex items-center gap-2 font-semibold text-brand-800 transition hover:gap-3">
                        Baca informasi organisasi
                        <x-heroicon-o-arrow-right class="h-5 w-5" />
                    </a>
                </div>
            </article>
            <article class="card flex h-full flex-col overflow-hidden">
                <div class="relative flex min-h-52 items-end overflow-hidden bg-[#164e63] p-6">
                    <div class="absolute -right-8 -top-10 h-40 w-40 rounded-full border border-white/10"></div>
                    <div class="absolute -right-2 -top-4 h-28 w-28 rounded-full border border-white/10"></div>
                    <div class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-white">
                        <x-heroicon-o-shield-check class="h-7 w-7" />
                    </div>
                    <span class="absolute right-5 top-5 rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-xs font-semibold text-white">Pesantren</span>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">Perlindungan Santri</span>
                    <h3 class="mt-3 text-xl font-bold text-ink">Mendorong Lingkungan Pesantren yang Aman</h3>
                    <p class="mt-3 flex-1 leading-7 text-muted">Jelajahi informasi mengenai kepedulian terhadap santri, lingkungan belajar yang aman, dan pentingnya peran bersama dalam perlindungan.</p>
                    <a href="{{ route('pesantren') }}" class="mt-6 inline-flex items-center gap-2 font-semibold text-brand-800 transition hover:gap-3">
                        Jelajahi topik pesantren
                        <x-heroicon-o-arrow-right class="h-5 w-5" />
                    </a>
                </div>
            </article>
            <article class="card flex h-full flex-col overflow-hidden">
                <div class="relative flex min-h-52 items-end overflow-hidden bg-[#4b3b73] p-6">
                    <div class="absolute -right-8 -top-10 h-40 w-40 rounded-full border border-white/10"></div>
                    <div class="absolute -right-2 -top-4 h-28 w-28 rounded-full border border-white/10"></div>
                    <div class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-white">
                        <x-heroicon-o-light-bulb class="h-7 w-7" />
                    </div>
                    <span class="absolute right-5 top-5 rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-xs font-semibold text-white">Pengembangan</span>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <span class="text-xs font-bold uppercase tracking-[0.16em] text-brand-700">Potensi Santri</span>
                    <h3 class="mt-3 text-xl font-bold text-ink">Mengembangkan Kapasitas dan Kemandirian Santri</h3>
                    <p class="mt-3 flex-1 leading-7 text-muted">Temukan gagasan seputar kreativitas, kewirausahaan, literasi digital, dan pengembangan potensi santri untuk masa depan.</p>
                    <a href="{{ route('santripreneur') }}" class="mt-6 inline-flex items-center gap-2 font-semibold text-brand-800 transition hover:gap-3">
                        Jelajahi Santripreneur
                        <x-heroicon-o-arrow-right class="h-5 w-5" />
                    </a>
                </div>
            </article>
        </div>
        <div class="mt-10 rounded-3xl border border-dashed border-line bg-surface px-6 py-10 text-center sm:px-10 sm:py-14">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-brand-50 text-brand-800">
                <x-heroicon-o-document-text class="h-8 w-8" />
            </div>
            <h3 class="mt-5 text-xl font-bold text-ink">Arsip berita akan ditampilkan di sini</h3>
            <p class="mx-auto mt-3 max-w-xl leading-7 text-muted">Daftar artikel terbaru dapat dihubungkan dengan data berita setelah model, sumber data, dan halaman detail artikel tersedia. Sementara itu, jelajahi informasi dan topik terkait melalui halaman yang telah disediakan.</p>
            <div class="mt-6 flex flex-col justify-center gap-3 sm:flex-row">
                <a href="{{ route('publikasi.index') }}" class="btn btn-primary inline-flex items-center justify-center gap-2">
                    Lihat Publikasi
                    <x-heroicon-o-arrow-right class="h-5 w-5" />
                </a>
                <a href="{{ route('media') }}" class="btn btn-outline inline-flex items-center justify-center gap-2">
                    Jelajahi Media
                    <x-heroicon-o-arrow-up-right class="h-5 w-5" />
                </a>
            </div>
        </div>
    </div>
</section>