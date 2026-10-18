<section class="bg-canvas pb-20 pt-6 sm:pb-24">
    <div class="container-site">
        <div class="relative isolate overflow-hidden rounded-[2rem] bg-[#032823] px-6 py-12 sm:px-10 sm:py-16 lg:px-16 lg:py-20">
            <div class="absolute -right-20 -top-24 -z-10 h-72 w-72 rounded-full border border-white/10"></div>
            <div class="absolute -right-8 -top-12 -z-10 h-48 w-48 rounded-full border border-white/10"></div>
            <div class="absolute -bottom-24 left-1/4 -z-10 h-64 w-64 rounded-full bg-[#0b6655]/30 blur-3xl"></div>
            <div class="grid gap-10 lg:grid-cols-[1.15fr_0.85fr] lg:items-center lg:gap-16">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-semibold text-[#d9ece8]">
                        <span class="h-2 w-2 rounded-full bg-[#e0b34e]"></span>
                        Dokumentasi yang Bermakna
                    </span>
                    <h2 class="mt-6 max-w-2xl text-3xl font-bold leading-tight !text-white sm:text-4xl lg:text-5xl">Setiap Cerita Layak Dibagikan dengan Tujuan yang Baik</h2>
                    <p class="mt-5 max-w-2xl text-base leading-8 text-[#d9ece8] sm:text-lg">Foto dan video dapat menjadi jembatan untuk berbagi pengalaman, memperluas wawasan, dan memperkenalkan kepedulian terhadap santri serta pesantren. Mari hadirkan dokumentasi yang informatif, bertanggung jawab, dan bermanfaat.</p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ route('kontak') }}" class="btn inline-flex items-center justify-center gap-2 border border-white bg-white px-6 py-3 font-semibold text-[#032823] transition hover:bg-[#d9ece8]">
                            Hubungi Kami
                            <x-heroicon-o-arrow-right class="h-5 w-5" />
                        </a>
                        <a href="{{ route('informasi') }}" class="btn inline-flex items-center justify-center gap-2 border border-white/25 bg-white/5 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                            Jelajahi Informasi
                            <x-heroicon-o-arrow-up-right class="h-5 w-5" />
                        </a>
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <a href="{{ route('kontak') }}" class="group rounded-2xl border border-white/10 bg-white/[0.06] p-5 transition hover:border-white/25 hover:bg-white/[0.1] sm:p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/10 text-[#d9ece8]">
                                <x-heroicon-o-camera class="h-6 w-6" />
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold !text-white">Berbagi Dokumentasi</h3>
                                <p class="mt-2 text-sm leading-6 text-[#c0d9d2]">Sampaikan pertanyaan atau informasi mengenai dokumentasi foto dan video melalui halaman kontak.</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-white">Buka halaman kontak <x-heroicon-o-arrow-right class="h-4 w-4 transition group-hover:translate-x-1" /></span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('kemitraan') }}" class="group rounded-2xl border border-white/10 bg-white/[0.06] p-5 transition hover:border-white/25 hover:bg-white/[0.1] sm:p-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/10 text-[#d9ece8]">
                                <x-heroicon-o-user-group class="h-6 w-6" />
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold !text-white">Bangun Kolaborasi</h3>
                                <p class="mt-2 text-sm leading-6 text-[#c0d9d2]">Jelajahi peluang kerja sama untuk berbagi pengetahuan dan menghadirkan dampak positif.</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-white">Jelajahi kemitraan <x-heroicon-o-arrow-right class="h-4 w-4 transition group-hover:translate-x-1" /></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-10 border-t border-white/15 pt-6 sm:mt-14 sm:pt-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <p class="max-w-2xl text-sm leading-6 text-[#c0d9d2]">Dokumentasi yang baik bukan sekadar merekam momen, tetapi juga menjaga konteks, menghormati privasi, dan memastikan izin publikasi yang diperlukan.</p>
                    <a href="{{ route('profil') }}" class="inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-white transition hover:text-[#b7e6d2]">
                        Kenali AISNU Jawa Barat
                        <x-heroicon-o-arrow-up-right class="h-5 w-5" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>