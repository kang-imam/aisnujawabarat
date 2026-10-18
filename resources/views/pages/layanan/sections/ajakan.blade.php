<section class="section-space overflow-hidden">
    <div class="container-site">
        <div class="relative isolate overflow-hidden rounded-[2rem] bg-[#032823] px-6 py-12 shadow-xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">
            <div class="absolute -right-20 -top-24 -z-10 h-72 w-72 rounded-full bg-[#1b7565]/25 blur-3xl"></div>
            <div class="absolute -bottom-28 -left-16 -z-10 h-72 w-72 rounded-full bg-[#a8d8a0]/10 blur-3xl"></div>
            <div class="grid items-center gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:gap-14">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-semibold text-[#d9ece8]">
                        <x-heroicon-o-chat-bubble-left-right class="size-4" />
                        Kami Siap Mendengar
                    </span>
                    <h2 class="mt-6 text-3xl font-bold leading-tight tracking-tight !text-[#ffffff] sm:text-4xl lg:text-5xl">
                        Membutuhkan Informasi Lebih Lanjut? Mari Mulai Percakapan.
                    </h2>
                    <p class="mt-5 max-w-xl text-base leading-8 text-[#d9ece8] sm:text-lg">
                        Setiap pertanyaan dapat menjadi langkah awal untuk memahami kebutuhan dengan lebih baik. Temukan informasi yang relevan atau hubungi AISNU Jawa Barat melalui saluran komunikasi yang tersedia.
                    </p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                        <a href="{{ route('kontak') }}" class="btn btn-accent inline-flex items-center justify-center gap-2">
                            Hubungi AISNU
                            <x-heroicon-o-arrow-up-right class="size-5" />
                        </a>
                        <a href="{{ route('informasi') }}" class="inline-flex items-center justify-center gap-2 rounded-full border border-white/25 px-6 py-3 text-sm font-semibold text-white transition hover:border-white/50 hover:bg-white/10">
                            Jelajahi Informasi
                            <x-heroicon-o-arrow-right class="size-4" />
                        </a>
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <a href="{{ route('pesantren') }}" class="group rounded-2xl border border-white/10 bg-white/[0.06] p-5 transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.1] sm:p-6">
                        <div class="flex items-start gap-4">
                            <span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-[#a8d8a0]/15 text-[#c6edbd]">
                                <x-heroicon-o-shield-check class="size-6" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-lg font-semibold !text-[#ffffff]">Perlindungan Santri</h3>
                                <p class="mt-2 text-sm leading-6 text-[#d9ece8]">Telusuri informasi tentang keselamatan, kepedulian, dan lingkungan pesantren yang aman.</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#c6edbd]">
                                    Pelajari lebih lanjut
                                    <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" />
                                </span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('kemitraan') }}" class="group rounded-2xl border border-white/10 bg-white/[0.06] p-5 transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.1] sm:p-6">
                        <div class="flex items-start gap-4">
                            <span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-[#a8d8a0]/15 text-[#c6edbd]">
                                <x-heroicon-o-user-group class="size-6" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-lg font-semibold !text-[#ffffff]">Kolaborasi dan Kemitraan</h3>
                                <p class="mt-2 text-sm leading-6 text-[#d9ece8]">Jelajahi peluang bertukar gagasan dan menjajaki kerja sama untuk mendukung kehidupan pesantren.</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#c6edbd]">
                                    Lihat peluang kolaborasi
                                    <x-heroicon-o-arrow-right class="size-4 transition-transform group-hover:translate-x-1" />
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-10 border-t border-white/15 pt-6 sm:mt-12 sm:flex sm:items-center sm:justify-between sm:gap-6">
                <p class="text-sm leading-6 text-[#c5ddd7]">Sampaikan kebutuhan Anda dengan jelas dan tetap jaga kerahasiaan informasi pribadi.</p>
                <a href="{{ route('program') }}" class="mt-4 inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-white transition hover:text-[#c6edbd] sm:mt-0">
                    Kenali program AISNU
                    <x-heroicon-o-arrow-right class="size-4" />
                </a>
            </div>
        </div>
    </div>
</section>