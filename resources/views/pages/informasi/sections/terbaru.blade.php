<section id="informasi-terbaru" class="section-space scroll-mt-24 bg-canvas">
    <div class="container-site">

        {{-- Heading --}}
        <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
            <div class="section-heading mb-0">
                <span class="section-eyebrow">
                    <x-heroicon-o-newspaper class="h-4 w-4" />
                    Informasi dan Wawasan
                </span>

                <h2 class="section-title mt-3">
                    Pengetahuan untuk Langkah yang Lebih Baik.
                </h2>

                <p class="section-description">
                    Jelajahi berita, publikasi, program, dan dokumentasi
                    untuk mengenal lebih jauh kegiatan AISNU Jawa Barat
                    serta upaya membangun lingkungan pesantren yang aman.
                </p>
            </div>

            <a href="{{ route('berita.index') }}"
                class="btn btn-outline shrink-0 self-start sm:self-auto">
                Lihat Berita
                <x-heroicon-o-arrow-right class="h-4 w-4" />
            </a>
        </div>

        {{-- Sorotan utama --}}
        <div class="mt-10 grid gap-6 lg:grid-cols-5">

            <article class="relative overflow-hidden rounded-3xl border border-brand-200 bg-surface p-6 shadow-card sm:p-8 lg:col-span-3 lg:p-10 dark:border-line">
                <div aria-hidden="true"
                    class="pointer-events-none absolute -right-12 -top-12 h-48 w-48 rounded-full border border-brand-200/70 dark:border-brand-300/20">
                </div>

                <div aria-hidden="true"
                    class="pointer-events-none absolute -right-5 -top-5 h-32 w-32 rounded-full border border-accent/40">
                </div>

                <div class="relative">
                    <span class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-brand-50 px-3 py-1.5 text-xs font-bold tracking-wide text-brand-700 dark:border-brand-300/20 dark:bg-brand-50 dark:text-brand-700">
                        <x-heroicon-o-shield-check class="h-4 w-4" />
                        Fokus Informasi
                    </span>

                    <h3 class="mt-7 max-w-xl text-2xl font-bold leading-tight tracking-tight text-ink sm:text-3xl lg:text-4xl">
                        Membangun Kesadaran akan Perlindungan Santri.
                    </h3>

                    <p class="mt-5 max-w-xl text-sm leading-7 text-muted sm:text-base sm:leading-8">
                        Lingkungan pesantren yang aman tumbuh melalui
                        kepedulian bersama, penghormatan terhadap martabat
                        santri, serta pemahaman tentang pentingnya
                        pencegahan kekerasan dan perlindungan.
                    </p>

                    <div class="mt-8">
                        <a href="{{ route('layanan') }}" class="btn btn-primary">
                            <x-heroicon-o-information-circle class="h-5 w-5" />
                            Pelajari Layanan
                            <x-heroicon-o-arrow-right class="h-4 w-4" />
                        </a>
                    </div>
                </div>

                <div class="relative mt-9 flex flex-wrap gap-2 border-t border-line pt-5">
                    <span class="rounded-full bg-canvas px-3 py-1.5 text-xs font-medium text-muted">
                        Edukasi
                    </span>

                    <span class="rounded-full bg-canvas px-3 py-1.5 text-xs font-medium text-muted">
                        Kepedulian
                    </span>

                    <span class="rounded-full bg-canvas px-3 py-1.5 text-xs font-medium text-muted">
                        Pesantren Aman
                    </span>
                </div>
            </article>

            {{-- Akses berita dan publikasi --}}
            <div class="grid gap-5 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-1">

                <a href="{{ route('berita.index') }}"
                    class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-center justify-between gap-4">
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-newspaper class="h-6 w-6" />
                        </span>

                        <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                    </div>

                    <p class="mt-5 text-xs font-bold uppercase tracking-[0.13em] text-brand-600 dark:text-brand-500">
                        Berita
                    </p>

                    <h3 class="mt-2 text-lg font-bold text-ink">
                        Kabar dan Kegiatan
                    </h3>

                    <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                        Baca informasi organisasi dan kegiatan yang
                        telah dipublikasikan melalui halaman berita.
                    </p>

                    <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                        Buka berita
                        <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                    </span>
                </a>

                <a href="{{ route('publikasi.index') }}"
                    class="card card-interactive group flex flex-col p-6 sm:p-7">
                    <div class="flex items-center justify-between gap-4">
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-accent-light text-brand-800 dark:text-brand-900">
                            <x-heroicon-o-document-text class="h-6 w-6" />
                        </span>

                        <x-heroicon-o-arrow-up-right class="h-5 w-5 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                    </div>

                    <p class="mt-5 text-xs font-bold uppercase tracking-[0.13em] text-brand-600 dark:text-brand-500">
                        Publikasi
                    </p>

                    <h3 class="mt-2 text-lg font-bold text-ink">
                        Panduan dan Bahan Bacaan
                    </h3>

                    <p class="mt-3 flex-1 text-sm leading-7 text-muted">
                        Kunjungi pusat publikasi untuk menemukan dokumen,
                        panduan, dan materi edukasi yang tersedia.
                    </p>

                    <span class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-brand-700 dark:text-brand-500">
                        Jelajahi publikasi
                        <x-heroicon-o-arrow-right class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                    </span>
                </a>

            </div>
        </div>

        {{-- Akses informasi lainnya --}}
        <div class="mt-6 grid gap-5 md:grid-cols-2">

            <a href="{{ route('program') }}"
                class="group flex items-center gap-4 rounded-2xl border border-line bg-surface p-5 transition-colors hover:border-brand-300 sm:p-6">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-light-bulb class="h-6 w-6" />
                </span>

                <span class="min-w-0 flex-1">
                    <span class="block font-bold text-ink">
                        Program Organisasi
                    </span>

                    <span class="mt-1 block text-sm leading-6 text-muted">
                        Kenali bidang program dan arah kegiatan AISNU.
                    </span>
                </span>

                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-muted transition-transform group-hover:translate-x-1" />
            </a>

            <a href="{{ route('media') }}"
                class="group flex items-center gap-4 rounded-2xl border border-line bg-surface p-5 transition-colors hover:border-brand-300 sm:p-6">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-photo class="h-6 w-6" />
                </span>

                <span class="min-w-0 flex-1">
                    <span class="block font-bold text-ink">
                        Galeri Media
                    </span>

                    <span class="mt-1 block text-sm leading-6 text-muted">
                        Lihat dokumentasi foto dan video yang tersedia.
                    </span>
                </span>

                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-muted transition-transform group-hover:translate-x-1" />
            </a>

        </div>

        {{-- Ajakan pencarian --}}
        <div class="mt-10 rounded-2xl border border-line bg-surface p-6 sm:p-8">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                <div class="max-w-2xl">
                    <span class="section-eyebrow">
                        <x-heroicon-o-magnifying-glass class="h-4 w-4" />
                        Temukan Informasi
                    </span>

                    <h3 class="text-xl font-bold text-ink sm:text-2xl">
                        Ada informasi yang ingin Anda cari?
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-muted">
                        Kunjungi halaman pencarian atau hubungi AISNU
                        Jawa Barat untuk pertanyaan mengenai organisasi,
                        program, dan layanan.
                    </p>
                </div>

                <div class="flex shrink-0 flex-col gap-3 sm:flex-row">
                    <a href="{{ route('pencarian') }}" class="btn btn-primary">
                        Cari Informasi
                        <x-heroicon-o-arrow-right class="h-4 w-4" />
                    </a>

                    <a href="{{ route('kontak') }}" class="btn btn-outline">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>