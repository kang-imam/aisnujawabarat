<section class="relative isolate overflow-hidden border-b border-line bg-canvas">
    {{-- Dekorasi latar --}}
    <div aria-hidden="true"
        class="pointer-events-none absolute inset-y-0 right-0 -z-10 hidden w-1/2 overflow-hidden lg:block">
        <div class="absolute -right-24 -top-24 h-96 w-96 rounded-full border border-brand-200/70 dark:border-brand-300/20"></div>
        <div class="absolute -right-8 -top-8 h-72 w-72 rounded-full border border-accent/40"></div>
        <div class="absolute right-16 top-24 h-48 w-48 rounded-full bg-brand-100/60 blur-3xl dark:bg-brand-200/10"></div>
    </div>

    <div class="container-site relative py-16 sm:py-20 lg:py-24">
        <div class="grid items-center gap-10 lg:grid-cols-[minmax(0,1.1fr)_minmax(18rem,0.9fr)] lg:gap-16">

            {{-- Konten utama --}}
            <div class="max-w-3xl">
                <span class="section-eyebrow">
                    <x-heroicon-o-photo class="h-4 w-4" />
                    Media AISNU Jawa Barat
                </span>

                <h1 class="mt-3 text-4xl font-bold leading-tight tracking-tight text-ink sm:text-5xl lg:text-6xl">
                    Merekam Perjalanan,
                    <span class="text-brand-700 dark:text-brand-500">
                        Mengabadikan Kepedulian.
                    </span>
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-muted sm:text-lg">
                    Halaman media menjadi ruang untuk mengenal dokumentasi
                    kegiatan, cerita, dan berbagai materi visual AISNU Jawa
                    Barat. Melalui foto dan video, pengunjung dapat mengikuti
                    perjalanan organisasi serta memahami pesan tentang
                    kepedulian dan perlindungan santri.
                </p>

                {{-- Tombol navigasi --}}
                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                    <a href="#galeri-foto" class="btn btn-primary">
                        <x-heroicon-o-photo class="h-5 w-5" />
                        Lihat Galeri Foto
                        <x-heroicon-o-arrow-down class="h-4 w-4" />
                    </a>

                    <a href="#galeri-video" class="btn btn-outline">
                        <x-heroicon-o-play-circle class="h-5 w-5" />
                        Jelajahi Video
                    </a>
                </div>

                {{-- Jenis media --}}
                <div class="mt-8 flex flex-wrap gap-x-5 gap-y-3 border-t border-line pt-6 text-sm text-muted">
                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-camera class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Dokumentasi Foto
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-play-circle class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Video dan Cerita
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-document-text class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Materi Informasi
                    </span>
                </div>
            </div>

            {{-- Panel pengantar media --}}
            <div class="relative">
                <div class="relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-card sm:p-8 lg:p-9">
                    {{-- Aksen dekoratif --}}
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -right-12 -top-12 h-40 w-40 rounded-full border border-brand-200/70 dark:border-brand-300/30"></div>
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -right-5 -top-5 h-28 w-28 rounded-full border border-accent/40"></div>

                    <div class="relative">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-film class="h-7 w-7" />
                        </div>

                        <p class="mt-6 text-xs font-bold uppercase tracking-[0.16em] text-brand-600 dark:text-brand-500">
                            Cerita dalam Dokumentasi
                        </p>

                        <h2 class="mt-3 text-2xl font-bold leading-snug tracking-tight text-ink sm:text-3xl">
                            Setiap Dokumentasi Menyimpan Cerita dan Makna.
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-muted">
                            Foto dan video dapat membantu menyampaikan
                            informasi secara lebih dekat, memperkenalkan
                            kegiatan, serta mendokumentasikan upaya membangun
                            lingkungan pesantren yang aman dan peduli.
                        </p>

                        {{-- Navigasi media --}}
                        <div class="mt-7 space-y-3">
                            <a href="#galeri-foto"
                                class="group flex items-center justify-between gap-4 rounded-xl border border-line p-4 transition-colors hover:border-brand-300 hover:bg-canvas">
                                <span class="flex items-center gap-3">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-canvas text-brand-700 dark:text-brand-500">
                                        <x-heroicon-o-camera class="h-5 w-5" />
                                    </span>

                                    <span>
                                        <span class="block text-sm font-bold text-ink">
                                            Galeri Foto
                                        </span>
                                        <span class="mt-1 block text-xs leading-5 text-muted">
                                            Dokumentasi visual dan kegiatan
                                        </span>
                                    </span>
                                </span>

                                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-muted transition-transform group-hover:translate-x-1" />
                            </a>

                            <a href="#galeri-video"
                                class="group flex items-center justify-between gap-4 rounded-xl border border-line p-4 transition-colors hover:border-brand-300 hover:bg-canvas">
                                <span class="flex items-center gap-3">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-canvas text-brand-700 dark:text-brand-500">
                                        <x-heroicon-o-play-circle class="h-5 w-5" />
                                    </span>

                                    <span>
                                        <span class="block text-sm font-bold text-ink">
                                            Galeri Video
                                        </span>
                                        <span class="mt-1 block text-xs leading-5 text-muted">
                                            Materi audiovisual dan cerita kegiatan
                                        </span>
                                    </span>
                                </span>

                                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-muted transition-transform group-hover:translate-x-1" />
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Aksen sudut --}}
                <div aria-hidden="true"
                    class="absolute -bottom-3 -left-3 -z-10 h-20 w-20 rounded-2xl border border-accent/50"></div>
            </div>

        </div>
    </div>
</section>