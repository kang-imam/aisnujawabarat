<section id="topik-informasi" class="section-space scroll-mt-24 bg-surface">
    <div class="container-site">

        {{-- Judul section --}}
        <div class="section-heading">
            <span class="section-eyebrow">
                <x-heroicon-o-rectangle-stack class="h-4 w-4" />
                Jelajahi Informasi
            </span>

            <h2 class="section-title mt-3">
                Temukan Topik yang Anda Butuhkan.
            </h2>

            <p class="section-description">
                Jelajahi beragam informasi seputar perlindungan santri,
                kehidupan pesantren, kegiatan organisasi, dan pengembangan
                potensi santri melalui kategori yang tersedia.
            </p>
        </div>

        {{-- Daftar topik --}}
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Perlindungan santri --}}
            <a href="{{ route('layanan') }}"
                class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors group-hover:bg-brand-100 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-shield-check class="h-6 w-6" />
                    </span>

                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </div>

                <h3 class="mt-6 text-lg font-bold text-ink">
                    Perlindungan Santri
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                    Pelajari pentingnya pencegahan kekerasan, penghormatan
                    terhadap hak dan martabat santri, serta upaya menciptakan
                    lingkungan belajar yang aman.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                    Jelajahi layanan
                    <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                </span>
            </a>

            {{-- Kehidupan pesantren --}}
            <a href="{{ route('pesantren') }}"
                class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors group-hover:bg-brand-100 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-building-library class="h-6 w-6" />
                    </span>

                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </div>

                <h3 class="mt-6 text-lg font-bold text-ink">
                    Pesantren Aman
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                    Temukan wawasan tentang lingkungan pesantren yang
                    mendukung pembelajaran, kepedulian, penghormatan,
                    dan kehidupan bersama yang bermartabat.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                    Kenali dunia pesantren
                    <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                </span>
            </a>

            {{-- Edukasi dan publikasi --}}
            <a href="{{ route('publikasi.index') }}"
                class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors group-hover:bg-brand-100 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-book-open class="h-6 w-6" />
                    </span>

                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </div>

                <h3 class="mt-6 text-lg font-bold text-ink">
                    Edukasi dan Publikasi
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                    Akses ruang publikasi untuk bahan bacaan, panduan,
                    dokumen, dan materi edukasi yang tersedia bagi santri,
                    keluarga, pendidik, serta masyarakat.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                    Jelajahi publikasi
                    <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                </span>
            </a>

            {{-- Program organisasi --}}
            <a href="{{ route('program') }}"
                class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors group-hover:bg-brand-100 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-light-bulb class="h-6 w-6" />
                    </span>

                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </div>

                <h3 class="mt-6 text-lg font-bold text-ink">
                    Program Organisasi
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                    Kenali bidang kegiatan dan arah program AISNU Jawa Barat
                    dalam mendukung perlindungan santri, penguatan pesantren,
                    edukasi, dan kolaborasi.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                    Lihat program
                    <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                </span>
            </a>

            {{-- Kewirausahaan santri --}}
            <a href="{{ route('santripreneur') }}"
                class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors group-hover:bg-brand-100 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-academic-cap class="h-6 w-6" />
                    </span>

                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </div>

                <h3 class="mt-6 text-lg font-bold text-ink">
                    Santripreneur
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                    Jelajahi informasi tentang kreativitas, keterampilan,
                    kewirausahaan, kemandirian ekonomi, dan pengembangan
                    potensi santri.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                    Kenali Santripreneur
                    <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                </span>
            </a>

            {{-- Berita dan kegiatan --}}
            <a href="{{ route('berita.index') }}"
                class="card card-interactive group flex h-full flex-col p-6 sm:p-7">
                <div class="flex items-start justify-between gap-4">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors group-hover:bg-brand-100 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-newspaper class="h-6 w-6" />
                    </span>

                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </div>

                <h3 class="mt-6 text-lg font-bold text-ink">
                    Berita dan Kegiatan
                </h3>

                <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                    Ikuti berita, kegiatan, dan informasi organisasi yang
                    dipublikasikan melalui kanal berita AISNU Jawa Barat.
                </p>

                <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                    Baca berita
                    <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                </span>
            </a>

        </div>

        {{-- Pengarah ke pencarian --}}
        <div class="mt-10 flex flex-col gap-5 rounded-2xl border border-line bg-canvas p-6 sm:flex-row sm:items-center sm:justify-between sm:p-8">
            <div class="flex items-start gap-4">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                </span>

                <div>
                    <h3 class="text-base font-bold text-ink">
                        Sedang mencari informasi tertentu?
                    </h3>

                    <p class="mt-1 text-sm leading-7 text-muted">
                        Kunjungi halaman pencarian untuk menemukan jalur
                        informasi yang sesuai dengan kebutuhan Anda.
                    </p>
                </div>
            </div>

            <a href="{{ route('pencarian') }}" class="btn btn-primary shrink-0">
                <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                Buka Pencarian
                <x-heroicon-o-arrow-right class="h-4 w-4" />
            </a>
        </div>

    </div>
</section>