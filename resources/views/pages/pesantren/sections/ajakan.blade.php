<section class="section-space overflow-hidden">
    <div class="container-site">
        <div class="relative isolate overflow-hidden rounded-[2rem] bg-[#032823] px-6 py-12 shadow-xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">
            <div class="absolute -right-20 -top-24 -z-10 size-72 rounded-full bg-[#287f73]/25 blur-3xl"></div>
            <div class="absolute -bottom-28 -left-16 -z-10 size-72 rounded-full bg-[#cc9933]/15 blur-3xl"></div>
            <div class="relative grid items-center gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:gap-14">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-semibold text-[#d9ece8]">
                        <x-heroicon-o-heart class="size-4" />
                        Bersama Menjaga Kehidupan Pesantren
                    </span>
                    <h2 class="mt-6 text-3xl font-bold leading-tight tracking-tight !text-white sm:text-4xl lg:text-5xl">
                        Pesantren yang Aman Tumbuh dari Kepedulian Bersama.
                    </h2>
                    <p class="mt-5 max-w-xl text-base leading-8 text-[#d9ece8] sm:text-lg">
                        Menciptakan lingkungan pesantren yang aman, bermartabat, dan mendukung perkembangan santri membutuhkan perhatian serta kerja sama berbagai pihak. Mari mulai dari kepedulian, berbagi wawasan, dan menjajaki langkah yang bermanfaat.
                    </p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                        <a href="{{ route('kemitraan') }}" class="btn btn-accent inline-flex items-center justify-center gap-2">
                            Jelajahi Kemitraan
                            <x-heroicon-o-arrow-up-right class="size-5" />
                        </a>
                        <a href="{{ route('kontak') }}" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/25 px-6 py-3 text-sm font-semibold text-white transition hover:border-white/50 hover:bg-white/10">
                            Hubungi Kami
                            <x-heroicon-o-arrow-right class="size-4" />
                        </a>
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <a href="{{ route('program') }}" class="group rounded-2xl border border-white/10 bg-white/[0.06] p-5 transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.1] sm:p-6">
                        <div class="flex items-start gap-4">
                            <span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-[#a8d8a0]/15 text-[#c6edbd]">
                                <x-heroicon-o-shield-check class="size-6" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-lg font-semibold !text-white">Perlindungan dan Penguatan</h3>
                                <p class="mt-2 text-sm leading-6 text-[#d9ece8]">Kenali arah pengembangan program yang berkaitan dengan perlindungan, edukasi, dan kapasitas santri.</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#c6edbd]">
                                    Jelajahi program
                                    <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" />
                                </span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('santripreneur') }}" class="group rounded-2xl border border-white/10 bg-white/[0.06] p-5 transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.1] sm:p-6">
                        <div class="flex items-start gap-4">
                            <span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-[#a8d8a0]/15 text-[#c6edbd]">
                                <x-heroicon-o-academic-cap class="size-6" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-lg font-semibold !text-white">Potensi dan Kemandirian Santri</h3>
                                <p class="mt-2 text-sm leading-6 text-[#d9ece8]">Telusuri gagasan pengembangan keterampilan, kreativitas, dan kemandirian untuk masa depan santri.</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#c6edbd]">
                                    Kenali potensi santri
                                    <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" />
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="relative mt-10 border-t border-white/15 pt-6 sm:mt-12 sm:flex sm:items-center sm:justify-between sm:gap-6">
                <p class="text-sm leading-6 text-[#c5ddd7]">Kepedulian hari ini dapat menjadi awal bagi lingkungan pesantren yang lebih baik.</p>
                <a href="{{ route('informasi') }}" class="mt-4 inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-white transition hover:text-[#c6edbd] sm:mt-0">
                    Baca informasi AISNU
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </div>
        </div>
    </div>
</section>