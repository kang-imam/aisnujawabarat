<section id="informasi" aria-labelledby="informasi-title" class="section-space bg-surface text-ink">
    <div class="container-site">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div class="section-heading mb-0">
                <span class="section-eyebrow">Pusat Informasi</span>
                <h2 id="informasi-title" class="section-title">Informasi yang Tepat untuk Langkah yang Lebih Baik.</h2>
                <p class="section-description">Jelajahi informasi organisasi, kabar kegiatan, publikasi, dan edukasi perlindungan santri melalui kanal informasi AISNU Jawa Barat.</p>
            </div>
            <a href="{{ route('berita.index') }}" class="btn btn-outline w-full shrink-0 sm:w-auto">
                Jelajahi Berita
                <x-heroicon-o-arrow-up-right class="size-4" aria-hidden="true" />
            </a>
        </div>
        <div class="mt-10 grid gap-5 lg:grid-cols-12 lg:gap-6">
            <article class="relative isolate flex min-h-[24rem] flex-col justify-between overflow-hidden rounded-card bg-brand-800 p-6 text-white shadow-card sm:p-8 lg:col-span-5 dark:bg-[#203b35]">
                <div class="pointer-events-none absolute -right-16 -top-16 size-64 rounded-full border border-white/10" aria-hidden="true"></div>
                <div class="pointer-events-none absolute -right-5 -top-5 size-40 rounded-full border border-white/10" aria-hidden="true"></div>
                <div class="pointer-events-none absolute bottom-0 left-0 h-1 w-28 bg-accent" aria-hidden="true"></div>
                <div class="relative flex items-center justify-between gap-4">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-bold tracking-wide text-white">
                        <x-heroicon-o-information-circle class="size-4" aria-hidden="true" />
                        Informasi Utama
                    </span>
                    <x-heroicon-o-book-open class="size-8 text-white/75" aria-hidden="true" />
                </div>
                <div class="relative mt-12">
                    <p class="text-xs font-bold uppercase tracking-[0.16em] text-white/70">Edukasi dan Kesadaran</p>
                    <h3 class="mt-3 text-2xl font-bold leading-tight text-white sm:text-3xl">Kenali Hak Santri, Pahami Langkah Perlindungan.</h3>
                    <p class="mt-4 text-sm leading-7 text-white/80">Temukan informasi untuk memahami pentingnya keselamatan, penghormatan terhadap martabat santri, serta peran bersama dalam menciptakan lingkungan pesantren yang aman.</p>
                    <a href="{{ route('informasi') }}" class="mt-6 inline-flex min-h-11 items-center gap-2 rounded-control bg-accent px-4 py-3 text-sm font-bold text-[#1a1a1a] transition-colors hover:bg-[#ddb04f]">
                        Baca Informasi
                        <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
                    </a>
                </div>
            </article>
            <div class="grid gap-5 sm:grid-cols-2 lg:col-span-7">
                <a href="{{ route('berita.index') }}" class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex size-12 items-center justify-center rounded-control bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-newspaper class="size-6" aria-hidden="true" />
                        </span>
                        <x-heroicon-o-arrow-up-right class="size-5 text-muted transition-transform group-hover:-translate-y-1 group-hover:translate-x-1" aria-hidden="true" />
                    </div>
                    <p class="mt-6 text-xs font-bold uppercase tracking-[0.14em] text-brand-600 dark:text-brand-500">Kabar Terkini</p>
                    <h3 class="mt-2 text-xl font-bold text-brand-800 dark:text-brand-900">Berita dan Kegiatan</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Ikuti kabar organisasi, aktivitas, dan perkembangan kegiatan AISNU Jawa Barat.</p>
                    <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                        Baca berita
                        <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                    </span>
                </a>
                <a href="{{ route('publikasi.index') }}" class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex size-12 items-center justify-center rounded-control bg-accent-light text-warning">
                            <x-heroicon-o-document-text class="size-6" aria-hidden="true" />
                        </span>
                        <x-heroicon-o-arrow-up-right class="size-5 text-muted transition-transform group-hover:-translate-y-1 group-hover:translate-x-1" aria-hidden="true" />
                    </div>
                    <p class="mt-6 text-xs font-bold uppercase tracking-[0.14em] text-warning">Dokumen dan Referensi</p>
                    <h3 class="mt-2 text-xl font-bold text-brand-800 dark:text-brand-900">Publikasi</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Akses materi dan dokumen publikasi yang tersedia untuk menambah wawasan dan referensi.</p>
                    <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                        Lihat publikasi
                        <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                    </span>
                </a>
                <a href="{{ route('profil') }}" class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex size-12 items-center justify-center rounded-control bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-building-library class="size-6" aria-hidden="true" />
                        </span>
                        <x-heroicon-o-arrow-up-right class="size-5 text-muted transition-transform group-hover:-translate-y-1 group-hover:translate-x-1" aria-hidden="true" />
                    </div>
                    <p class="mt-6 text-xs font-bold uppercase tracking-[0.14em] text-brand-600 dark:text-brand-500">Tentang Organisasi</p>
                    <h3 class="mt-2 text-xl font-bold text-brand-800 dark:text-brand-900">Profil AISNU</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Kenali identitas, arah gerak, dan informasi kelembagaan AISNU Jawa Barat.</p>
                    <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                        Kenali organisasi
                        <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                    </span>
                </a>
                <a href="{{ route('program') }}" class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex size-12 items-center justify-center rounded-control bg-accent-light text-warning">
                            <x-heroicon-o-light-bulb class="size-6" aria-hidden="true" />
                        </span>
                        <x-heroicon-o-arrow-up-right class="size-5 text-muted transition-transform group-hover:-translate-y-1 group-hover:translate-x-1" aria-hidden="true" />
                    </div>
                    <p class="mt-6 text-xs font-bold uppercase tracking-[0.14em] text-warning">Inisiatif dan Aksi</p>
                    <h3 class="mt-2 text-xl font-bold text-brand-800 dark:text-brand-900">Program Organisasi</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Jelajahi program dan inisiatif untuk mendukung penguatan kapasitas serta kepedulian terhadap santri.</p>
                    <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                        Lihat program
                        <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                    </span>
                </a>
            </div>
        </div>
        <div class="mt-8 flex flex-col gap-4 rounded-card border border-line bg-canvas p-5 sm:flex-row sm:items-center sm:justify-between sm:p-6">
            <div class="flex items-start gap-3">
                <span class="flex size-10 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-magnifying-glass class="size-5" aria-hidden="true" />
                </span>
                <div>
                    <h3 class="text-base font-bold text-brand-800 dark:text-brand-900">Mencari informasi tertentu?</h3>
                    <p class="mt-1 text-sm leading-6 text-muted">Gunakan pencarian untuk menemukan konten yang relevan di situs AISNU Jawa Barat.</p>
                </div>
            </div>
            <a href="{{ route('pencarian') }}" class="btn btn-primary w-full shrink-0 sm:w-auto">
                Cari Informasi
                <x-heroicon-o-magnifying-glass class="size-4" aria-hidden="true" />
            </a>
        </div>
    </div>
</section>