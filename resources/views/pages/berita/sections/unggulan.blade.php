<section id="berita-unggulan" class="section-space">
    <div class="container-site">
        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div class="section-heading mb-0">
                <span class="section-eyebrow">Sorotan Redaksi</span>
                <h2 class="section-title mt-2">Berita Unggulan</h2>
                <p class="section-description">Sorotan informasi, kegiatan, dan perkembangan seputar santri, pesantren, serta kolaborasi AISNU Jawa Barat.</p>
            </div>
            <a href="{{ route('berita.index') }}#daftar-berita" class="btn btn-outline self-start sm:self-auto">
                Semua Berita
                <x-heroicon-o-arrow-right class="h-4 w-4" />
            </a>
        </div>
        <div class="grid items-stretch gap-6 lg:grid-cols-12">
            <article class="card group flex flex-col lg:col-span-7">
                <div class="relative flex min-h-64 flex-1 items-center justify-center overflow-hidden bg-[#032823] p-8 sm:min-h-80 sm:p-12">
                    <div class="pointer-events-none absolute -right-12 -top-16 h-64 w-64 rounded-full border border-white/10"></div>
                    <div class="pointer-events-none absolute -right-2 -top-6 h-44 w-44 rounded-full border border-white/10"></div>
                    <div class="pointer-events-none absolute -bottom-24 -left-12 h-64 w-64 rounded-full bg-[#075e54]/50 blur-3xl"></div>
                    <div class="relative max-w-lg text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl border border-white/15 bg-white/[0.07] text-[#e0b34e]">
                            <x-heroicon-o-newspaper class="h-8 w-8" />
                        </div>
                        <p class="mt-6 text-xs font-bold uppercase tracking-[0.2em] text-[#e0b34e]">Berita AISNU Jawa Barat</p>
                        <h3 class="mt-3 !text-2xl !font-bold !leading-tight !text-white sm:!text-3xl">Informasi Penting dan Cerita Bermakna dari Dunia Santri</h3>
                        <p class="mt-4 text-sm leading-7 text-[#d9ece8]">Temukan ruang untuk mengenal informasi organisasi, kehidupan pesantren, perlindungan santri, dan berbagai peluang kolaborasi.</p>
                    </div>
                    <div class="absolute bottom-4 left-5 flex items-center gap-2 text-xs font-medium text-[#c6dcd5] sm:bottom-6 sm:left-7">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#e0b34e]"></span>
                        Pusat Informasi dan Berita
                    </div>
                </div>
                <div class="flex flex-1 flex-col p-6 sm:p-8">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="rounded-full bg-brand-50 px-3 py-1 text-xs font-bold text-brand-700 dark:bg-brand-100/10 dark:text-brand-300">Informasi Organisasi</span>
                        <span class="text-xs text-muted">Berita Unggulan</span>
                    </div>
                    <h3 class="mt-4 text-2xl font-bold leading-snug text-ink sm:text-3xl">Mengenal Peran AISNU Jawa Barat dalam Mendukung Santri dan Pesantren</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Kenali fokus informasi AISNU Jawa Barat, mulai dari perlindungan santri dan penguatan lingkungan pesantren hingga pengembangan potensi serta kemitraan yang bermanfaat.</p>
                    <div class="mt-auto flex flex-wrap items-center justify-between gap-4 pt-6">
                        <span class="inline-flex items-center gap-2 text-sm text-muted">
                            <x-heroicon-o-book-open class="h-4 w-4" />
                            Pengantar organisasi
                        </span>
                        <a href="{{ route('profil') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-700 transition-colors hover:text-brand-500 dark:text-brand-300 dark:hover:text-brand-200">
                            Baca profil
                            <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                        </a>
                    </div>
                </div>
            </article>
            <div class="flex flex-col gap-6 lg:col-span-5">
                <article class="card card-interactive flex-1 p-6 sm:p-7">
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-brand-50 text-brand-700 dark:bg-brand-100/10 dark:text-brand-300">
                            <x-heroicon-o-shield-check class="h-6 w-6" />
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.12em] text-brand-600 dark:text-brand-400">Perlindungan Santri</span>
                            <h3 class="mt-2 text-lg font-bold text-ink">Membangun Lingkungan Pesantren yang Aman dan Bermartabat</h3>
                            <p class="mt-3 text-sm leading-7 text-muted">Jelajahi informasi tentang kepedulian, penghormatan terhadap martabat santri, dan pentingnya lingkungan belajar yang aman.</p>
                            <a href="{{ route('pesantren') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-500 dark:text-brand-300 dark:hover:text-brand-200">
                                Jelajahi informasi
                                <x-heroicon-o-arrow-right class="h-4 w-4" />
                            </a>
                        </div>
                    </div>
                </article>
                <article class="card card-interactive flex-1 p-6 sm:p-7">
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-accent-light text-[#966515] dark:text-[#f0c56a]">
                            <x-heroicon-o-user-group class="h-6 w-6" />
                        </div>
                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.12em] text-[#966515] dark:text-[#f0c56a]">Kolaborasi dan Pengembangan</span>
                            <h3 class="mt-2 text-lg font-bold text-ink">Membuka Peluang untuk Bertumbuh Bersama</h3>
                            <p class="mt-3 text-sm leading-7 text-muted">Kenali peluang membangun sinergi untuk mendukung kapasitas santri, pesantren, dan masyarakat.</p>
                            <a href="{{ route('kemitraan') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-500 dark:text-brand-300 dark:hover:text-brand-200">
                                Jelajahi kemitraan
                                <x-heroicon-o-arrow-right class="h-4 w-4" />
                            </a>
                        </div>
                    </div>
                </article>
                <div class="rounded-2xl border border-brand-200 bg-brand-50 p-6 dark:border-brand-200/20 dark:bg-brand-50">
                    <div class="flex items-start gap-3">
                        <x-heroicon-o-information-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700 dark:text-brand-300" />
                        <div>
                            <h3 class="text-base font-bold text-ink">Cari Informasi Lainnya</h3>
                            <p class="mt-1 text-sm leading-7 text-muted">Telusuri pusat informasi untuk menemukan topik, publikasi, dan referensi lain yang tersedia.</p>
                            <a href="{{ route('informasi') }}" class="mt-3 inline-flex items-center gap-2 text-sm font-bold text-brand-700 hover:text-brand-500 dark:text-brand-300 dark:hover:text-brand-200">
                                Buka pusat informasi
                                <x-heroicon-o-arrow-right class="h-4 w-4" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>