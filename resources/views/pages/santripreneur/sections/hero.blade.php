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
                    <x-heroicon-o-light-bulb class="h-4 w-4" />
                    Santripreneur AISNU Jawa Barat
                </span>

                <h1 class="mt-3 text-4xl font-bold leading-tight tracking-tight text-ink sm:text-5xl lg:text-6xl">
                    Menggali Potensi,
                    <span class="text-brand-700 dark:text-brand-500">
                        Menumbuhkan Kemandirian.
                    </span>
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-muted sm:text-lg">
                    Santripreneur membuka ruang untuk mengenali potensi,
                    mengembangkan kreativitas, dan menumbuhkan jiwa
                    kewirausahaan santri. Dengan semangat belajar, inovasi,
                    dan kolaborasi, santri dapat mempersiapkan diri untuk
                    menciptakan peluang yang bermanfaat bagi masyarakat.
                </p>

                {{-- Tombol navigasi --}}
                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                    <a href="#program-santripreneur" class="btn btn-primary">
                        <x-heroicon-o-rocket-launch class="h-5 w-5" />
                        Jelajahi Pengembangan
                        <x-heroicon-o-arrow-down class="h-4 w-4" />
                    </a>

                    <a href="{{ route('kemitraan') }}" class="btn btn-outline">
                        <x-heroicon-o-user-group class="h-5 w-5" />
                        Jajaki Kolaborasi
                    </a>
                </div>

                {{-- Fokus pengembangan --}}
                <div class="mt-8 flex flex-wrap gap-x-5 gap-y-3 border-t border-line pt-6 text-sm text-muted">
                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-light-bulb class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Kreativitas dan Inovasi
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-academic-cap class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Pengembangan Kapasitas
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <x-heroicon-o-chart-bar class="h-5 w-5 shrink-0 text-brand-600 dark:text-brand-500" />
                        Kewirausahaan dan Kemandirian
                    </span>
                </div>
            </div>

            {{-- Panel pengembangan potensi --}}
            <div class="relative">
                <div class="relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-card sm:p-8 lg:p-9">
                    {{-- Aksen dekoratif --}}
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -right-12 -top-12 h-40 w-40 rounded-full border border-brand-200/70 dark:border-brand-300/30"></div>
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -right-5 -top-5 h-28 w-28 rounded-full border border-accent/40"></div>

                    <div class="relative">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                            <x-heroicon-o-briefcase class="h-7 w-7" />
                        </div>

                        <p class="mt-6 text-xs font-bold uppercase tracking-[0.16em] text-brand-600 dark:text-brand-500">
                            Potensi Menjadi Karya
                        </p>

                        <h2 class="mt-3 text-2xl font-bold leading-snug tracking-tight text-ink sm:text-3xl">
                            Ide yang Tumbuh, Keterampilan yang Menguat.
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-muted">
                            Perjalanan kewirausahaan dapat dimulai dengan
                            mengenali kebutuhan di sekitar, mengasah
                            keterampilan, dan mengembangkan gagasan menjadi
                            karya yang memiliki nilai serta manfaat.
                        </p>

                        {{-- Tahapan pengembangan --}}
                        <div class="mt-7 space-y-3">
                            <a href="#tentang-santripreneur"
                                class="group flex items-center justify-between gap-4 rounded-xl border border-line p-4 transition-colors hover:border-brand-300 hover:bg-canvas">
                                <span class="flex items-center gap-3">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-canvas text-brand-700 dark:text-brand-500">
                                        <x-heroicon-o-academic-cap class="h-5 w-5" />
                                    </span>

                                    <span>
                                        <span class="block text-sm font-bold text-ink">
                                            Kenali Santripreneur
                                        </span>
                                        <span class="mt-1 block text-xs leading-5 text-muted">
                                            Pahami konsep dan peluang pengembangan
                                        </span>
                                    </span>
                                </span>

                                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-muted transition-transform group-hover:translate-x-1" />
                            </a>

                            <a href="{{ route('kontak') }}"
                                class="group flex items-center justify-between gap-4 rounded-xl border border-line p-4 transition-colors hover:border-brand-300 hover:bg-canvas">
                                <span class="flex items-center gap-3">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-canvas text-brand-700 dark:text-brand-500">
                                        <x-heroicon-o-chat-bubble-left-right class="h-5 w-5" />
                                    </span>

                                    <span>
                                        <span class="block text-sm font-bold text-ink">
                                            Mulai Percakapan
                                        </span>
                                        <span class="mt-1 block text-xs leading-5 text-muted">
                                            Sampaikan ide atau peluang kolaborasi
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