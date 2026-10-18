<section class="section-space overflow-hidden">
    <div class="container-site">
        <div class="relative overflow-hidden rounded-3xl bg-[#032823] px-6 py-12 text-white sm:px-10 sm:py-16 lg:px-16 lg:py-20">
            <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-8 -top-12 h-48 w-48 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-24 left-1/3 h-64 w-64 rounded-full bg-[#075e54]/40 blur-3xl"></div>
            <div class="relative grid items-center gap-10 lg:grid-cols-[1.2fr_0.8fr] lg:gap-14">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/[0.06] px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-[#d9ece8]">
                        <span class="h-2 w-2 rounded-full bg-[#e0b34e]"></span>
                        Mari Bertumbuh Bersama
                    </span>
                    <h2 class="mt-6 max-w-2xl !text-3xl !font-bold !leading-tight !text-white sm:!text-4xl lg:!text-5xl">Potensi Santri Hari Ini, Peluang Kebaikan untuk Masa Depan.</h2>
                    <p class="mt-5 max-w-2xl text-base leading-8 text-[#d9ece8]">Kreativitas, keterampilan, dan semangat kewirausahaan dapat menjadi bekal santri untuk tumbuh lebih mandiri dan memberi manfaat bagi lingkungan. Mari membuka ruang belajar, bertukar gagasan, dan membangun kolaborasi yang bermakna.</p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ route('kontak') }}" class="btn btn-accent">
                            Mulai Percakapan
                            <x-heroicon-o-arrow-right class="h-4 w-4" />
                        </a>
                        <a href="{{ route('kemitraan') }}" class="inline-flex min-h-12 items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/[0.06] px-5 py-3 text-sm font-bold text-white transition-colors hover:bg-white/10">
                            Jelajahi Kemitraan
                            <x-heroicon-o-arrow-up-right class="h-4 w-4" />
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-3xl border border-white/10 bg-white/[0.05] p-5 backdrop-blur-sm sm:p-7">
                        <div class="flex items-center gap-4 border-b border-white/10 pb-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#e0b34e]/15 text-[#e0b34e]">
                                <x-heroicon-o-light-bulb class="h-6 w-6" />
                            </div>
                            <div>
                                <h3 class="!text-lg !font-bold !text-white">Mulai dari Sebuah Gagasan</h3>
                                <p class="mt-1 text-sm text-[#c6dcd5]">Setiap potensi layak mendapat ruang untuk tumbuh.</p>
                            </div>
                        </div>
                        <div class="space-y-5 pt-6">
                            <div class="flex items-start gap-3">
                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#e0b34e]/15 text-sm font-bold text-[#e0b34e]">01</div>
                                <div>
                                    <h4 class="!text-base !font-bold !text-white">Kenali Potensi</h4>
                                    <p class="mt-1 text-sm leading-6 text-[#c6dcd5]">Temukan minat, keterampilan, dan kebutuhan yang dapat dikembangkan.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#e0b34e]/15 text-sm font-bold text-[#e0b34e]">02</div>
                                <div>
                                    <h4 class="!text-base !font-bold !text-white">Bangun Pengetahuan</h4>
                                    <p class="mt-1 text-sm leading-6 text-[#c6dcd5]">Perkuat gagasan dengan pembelajaran, praktik, dan pengalaman.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#e0b34e]/15 text-sm font-bold text-[#e0b34e]">03</div>
                                <div>
                                    <h4 class="!text-base !font-bold !text-white">Jalin Kolaborasi</h4>
                                    <p class="mt-1 text-sm leading-6 text-[#c6dcd5]">Buka kesempatan untuk saling belajar dan menciptakan manfaat bersama.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-4 -left-3 hidden rounded-2xl border border-white/10 bg-[#075e54] px-4 py-3 shadow-xl sm:block">
                        <div class="flex items-center gap-2">
                            <x-heroicon-o-hand-raised class="h-5 w-5 text-[#e0b34e]" />
                            <span class="text-sm font-semibold text-white">Berdaya dan bermanfaat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 grid gap-4 md:grid-cols-3">
            <a href="{{ route('program') }}" class="card card-interactive group flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100/10 dark:text-brand-300">
                    <x-heroicon-o-rectangle-stack class="h-5 w-5" />
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-base font-bold text-ink">Jelajahi Program</h3>
                    <p class="mt-1 text-sm text-muted">Kenali bidang pengembangan AISNU.</p>
                </div>
                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-brand-600 transition-transform group-hover:translate-x-1 dark:text-brand-400" />
            </a>
            <a href="{{ route('pesantren') }}" class="card card-interactive group flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100/10 dark:text-brand-300">
                    <x-heroicon-o-building-office-2 class="h-5 w-5" />
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-base font-bold text-ink">Ruang Pesantren</h3>
                    <p class="mt-1 text-sm text-muted">Kenali lingkungan tumbuh santri.</p>
                </div>
                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-brand-600 transition-transform group-hover:translate-x-1 dark:text-brand-400" />
            </a>
            <a href="{{ route('informasi') }}" class="card card-interactive group flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100/10 dark:text-brand-300">
                    <x-heroicon-o-document-text class="h-5 w-5" />
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="text-base font-bold text-ink">Pusat Informasi</h3>
                    <p class="mt-1 text-sm text-muted">Temukan informasi dan referensi.</p>
                </div>
                <x-heroicon-o-arrow-right class="h-5 w-5 shrink-0 text-brand-600 transition-transform group-hover:translate-x-1 dark:text-brand-400" />
            </a>
        </div>
    </div>
</section>