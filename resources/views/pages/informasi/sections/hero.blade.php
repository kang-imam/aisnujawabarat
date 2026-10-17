<section class="relative isolate overflow-hidden border-b border-line bg-canvas">
    {{-- Dekorasi latar --}}
    <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 -z-10 hidden w-1/2 overflow-hidden lg:block">
        <div class="absolute -right-24 -top-28 h-96 w-96 rounded-full border border-brand-200/60"></div>
        <div class="absolute -right-10 -top-14 h-72 w-72 rounded-full border border-accent/40"></div>
        <div class="absolute right-20 top-24 h-40 w-40 rounded-full bg-brand-100/60 blur-3xl dark:bg-brand-200/10"></div>
        <div class="absolute bottom-0 right-0 h-64 w-64 rounded-full bg-accent-light/60 blur-3xl"></div>
    </div>

    <div class="container-site relative py-16 sm:py-20 lg:py-24">
        <div class="grid items-center gap-10 lg:grid-cols-[minmax(0,1.15fr)_minmax(18rem,0.85fr)] lg:gap-16">

            {{-- Konten utama --}}
            <div class="max-w-3xl">
                <span class="section-eyebrow">
                    <x-heroicon-o-information-circle class="h-4 w-4" />
                    Pusat Informasi AISNU
                </span>

                <h1 class="mt-3 text-4xl font-bold leading-tight tracking-tight text-ink sm:text-5xl lg:text-6xl">
                    Informasi untuk
                    <span class="text-brand-700 dark:text-brand-500">
                        Pesantren yang Lebih Aman.
                    </span>
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-muted sm:text-lg">
                    Temukan informasi, edukasi, dan wawasan seputar perlindungan
                    santri, kehidupan pesantren, program organisasi, serta
                    pengembangan kapasitas untuk membangun lingkungan yang
                    aman, peduli, dan bermartabat.
                </p>

                {{-- Tombol navigasi --}}
                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                    <a href="#topik-informasi" class="btn btn-primary">
                        <x-heroicon-o-book-open class="h-5 w-5" />
                        Jelajahi Topik
                        <x-heroicon-o-arrow-down class="h-4 w-4" />
                    </a>

                    <a href="{{ route('berita.index') }}" class="btn btn-outline">
                        <x-heroicon-o-newspaper class="h-5 w-5" />
                        Baca Berita
                        <x-heroicon-o-arrow-right class="h-4 w-4" />
                    </a>
                </div>

                {{-- Penegasan fokus informasi --}}
                <div class="mt-8 flex flex-wrap items-center gap-x-5 gap-y-3 border-t border-line pt-6 text-sm text-muted">
                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-shield-check class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Perlindungan Santri
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-book-open class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Edukasi Pesantren
                    </span>
                </div>
            </div>

            {{-- Panel informasi pendukung --}}
            <div class="relative">
                <div class="relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-card sm:p-8">
                    <div aria-hidden="true" class="absolute -right-12 -top-12 h-36 w-36 rounded-full bg-brand-50 dark:bg-brand-100/20"></div>

                    <div class="relative">
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-document-text class="h-6 w-6" />
                        </span>

                        <p class="mt-6 text-xs font-bold uppercase tracking-[0.16em] text-brand-600 dark:text-brand-500">
                            Ruang Pengetahuan
                        </p>

                        <h2 class="mt-3 text-2xl font-bold leading-snug tracking-tight text-ink sm:text-3xl">
                            Kenali Informasi.
                            <span class="text-brand-700 dark:text-brand-500">
                                Pahami Langkah.
                            </span>
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-muted">
                            Informasi yang tepat membantu santri, keluarga,
                            pengelola pesantren, dan masyarakat memahami
                            isu perlindungan serta menemukan wawasan yang relevan.
                        </p>

                        <div class="mt-6 space-y-3">
                            <a href="{{ route('profil') }}"
                                class="group flex items-center justify-between gap-4 rounded-xl border border-line p-4 transition-colors hover:border-brand-300 hover:bg-canvas">
                                <span class="flex items-center gap-3">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-canvas text-brand-700 dark:text-brand-500">
                                        <x-heroicon-o-building-office-2 class="h-5 w-5" />
                                    </span>

                                    <span>
                                        <span class="block text-sm font-bold text-ink">
                                            Profil AISNU
                                        </span>
                                        <span class="mt-1 block text-xs leading-5 text-muted">
                                            Kenali organisasi dan komitmennya
                                        </span>
                                    </span>
                                </span>

                                <x-heroicon-o-arrow-up-right class="h-5 w-5 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                            </a>

                            <a href="{{ route('program') }}"
                                class="group flex items-center justify-between gap-4 rounded-xl border border-line p-4 transition-colors hover:border-brand-300 hover:bg-canvas">
                                <span class="flex items-center gap-3">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-canvas text-brand-700 dark:text-brand-500">
                                        <x-heroicon-o-light-bulb class="h-5 w-5" />
                                    </span>

                                    <span>
                                        <span class="block text-sm font-bold text-ink">
                                            Program Organisasi
                                        </span>
                                        <span class="mt-1 block text-xs leading-5 text-muted">
                                            Jelajahi bidang dan kegiatan
                                        </span>
                                    </span>
                                </span>

                                <x-heroicon-o-arrow-up-right class="h-5 w-5 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Aksen dekoratif --}}
                <div aria-hidden="true" class="absolute -bottom-3 -left-3 -z-10 h-24 w-24 rounded-2xl border border-accent/50"></div>
            </div>

        </div>
    </div>
</section>