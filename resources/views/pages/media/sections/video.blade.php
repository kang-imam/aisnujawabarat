<section id="galeri-video" class="section-space bg-surface">
    <div class="container-site">
        <div class="grid gap-8 lg:grid-cols-[1fr_0.72fr] lg:items-end">
            <div class="max-w-2xl">
                <span class="section-eyebrow">Galeri Video</span>
                <h2 class="section-title mt-3">Cerita yang Bergerak, Pesan yang Menginspirasi</h2>
                <p class="section-description">Ruang untuk menyaksikan dokumentasi kegiatan, mengenal kehidupan pesantren, dan mengikuti gagasan serta kolaborasi yang berkaitan dengan pengembangan santri.</p>
            </div>
            <div class="rounded-2xl border border-line bg-canvas p-5 sm:p-6">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700">
                        <x-heroicon-o-play-circle class="h-6 w-6" />
                    </div>
                    <div>
                        <h3 class="font-bold text-ink">Satu ruang untuk banyak cerita</h3>
                        <p class="mt-2 text-sm leading-7 text-muted">Video dapat membantu menyampaikan suasana, pengalaman, dan informasi secara lebih dekat kepada masyarakat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 overflow-hidden rounded-3xl bg-[#032823]">
            <div class="grid lg:grid-cols-[1.1fr_0.9fr]">
                <div class="relative flex min-h-72 items-center justify-center overflow-hidden p-8 sm:min-h-96 sm:p-12">
                    <div class="absolute -left-20 -top-20 h-72 w-72 rounded-full border border-white/10"></div>
                    <div class="absolute -right-12 bottom-0 h-64 w-64 rounded-full border border-white/10"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-[#075e54]/50 via-transparent to-[#032823]"></div>
                    <div class="relative flex flex-col items-center text-center">
                        <div class="flex h-20 w-20 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white shadow-2xl backdrop-blur-sm">
                            <x-heroicon-s-play class="ml-1 h-8 w-8" />
                        </div>
                        <span class="mt-5 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-xs font-semibold tracking-[0.16em] text-[#d9ece8]">DOKUMENTASI AUDIOVISUAL</span>
                    </div>
                    <div class="absolute bottom-5 left-5 flex items-center gap-2 text-xs font-medium text-[#d9ece8] sm:bottom-7 sm:left-7">
                        <x-heroicon-o-video-camera class="h-4 w-4" />
                        Galeri video AISNU Jawa Barat
                    </div>
                </div>
                <div class="flex flex-col justify-center p-6 sm:p-10 lg:p-12">
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-[#e0b34e]">Dari Dokumentasi Menjadi Inspirasi</span>
                    <h3 class="mt-4 text-2xl font-bold !text-white sm:text-3xl">Merekam Kegiatan, Membagikan Pembelajaran</h3>
                    <p class="mt-4 leading-8 text-[#d9ece8]">Video dokumentasi dapat menjadi sarana untuk berbagi cerita, memperluas wawasan, dan memperkenalkan berbagai inisiatif yang berkaitan dengan santri serta pesantren.</p>
                    <div class="mt-7 flex flex-wrap gap-2">
                        <span class="rounded-full border border-white/15 bg-white/5 px-3 py-2 text-sm text-[#d9ece8]">Kegiatan</span>
                        <span class="rounded-full border border-white/15 bg-white/5 px-3 py-2 text-sm text-[#d9ece8]">Edukasi</span>
                        <span class="rounded-full border border-white/15 bg-white/5 px-3 py-2 text-sm text-[#d9ece8]">Kolaborasi</span>
                    </div>
                    <a href="{{ route('kontak') }}" class="mt-8 inline-flex w-fit items-center gap-2 rounded-xl bg-white px-5 py-3 font-bold text-[#032823] transition hover:bg-[#d9ece8]">
                        Informasi Dokumentasi
                        <x-heroicon-o-arrow-right class="h-5 w-5" />
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="section-eyebrow">Koleksi Audiovisual</span>
                    <h3 class="text-2xl font-bold text-ink">Video Pilihan</h3>
                    <p class="mt-3 max-w-2xl leading-7 text-muted">Koleksi video dapat ditambahkan di sini setelah tautan atau berkas dokumentasi siap dipublikasikan.</p>
                </div>
                <a href="{{ route('informasi') }}" class="inline-flex w-fit items-center gap-2 font-semibold text-brand-800 transition hover:gap-3">
                    Jelajahi informasi
                    <x-heroicon-o-arrow-up-right class="h-5 w-5" />
                </a>
            </div>
            <div class="mt-6 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                <article class="card card-interactive">
                    <div class="relative flex aspect-video items-center justify-center overflow-hidden bg-[#063b35]">
                        <div class="absolute -right-8 -top-10 h-40 w-40 rounded-full border border-white/10"></div>
                        <div class="absolute -left-8 bottom-0 h-32 w-32 rounded-full border border-white/10"></div>
                        <div class="relative flex h-14 w-14 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white">
                            <x-heroicon-s-play class="ml-0.5 h-6 w-6" />
                        </div>
                        <span class="absolute bottom-4 left-4 rounded-full bg-black/20 px-3 py-1 text-xs font-semibold text-white">Dokumentasi</span>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-700">Kegiatan</span>
                        <h4 class="mt-2 text-lg font-bold text-ink">Dokumentasi Kegiatan</h4>
                        <p class="mt-2 text-sm leading-7 text-muted">Ruang untuk video kegiatan dan aktivitas organisasi yang telah dipublikasikan.</p>
                        <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium text-muted">
                            <x-heroicon-o-clock class="h-4 w-4" />
                            Menunggu koleksi video
                        </span>
                    </div>
                </article>
                <article class="card card-interactive">
                    <div class="relative flex aspect-video items-center justify-center overflow-hidden bg-[#164e63]">
                        <div class="absolute -right-8 -top-10 h-40 w-40 rounded-full border border-white/10"></div>
                        <div class="absolute -left-8 bottom-0 h-32 w-32 rounded-full border border-white/10"></div>
                        <div class="relative flex h-14 w-14 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white">
                            <x-heroicon-s-play class="ml-0.5 h-6 w-6" />
                        </div>
                        <span class="absolute bottom-4 left-4 rounded-full bg-black/20 px-3 py-1 text-xs font-semibold text-white">Edukasi</span>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-700">Santri dan Pesantren</span>
                        <h4 class="mt-2 text-lg font-bold text-ink">Wawasan dan Edukasi</h4>
                        <p class="mt-2 text-sm leading-7 text-muted">Ruang untuk konten edukasi seputar santri, pesantren, dan lingkungan belajar yang aman.</p>
                        <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium text-muted">
                            <x-heroicon-o-clock class="h-4 w-4" />
                            Menunggu koleksi video
                        </span>
                    </div>
                </article>
                <article class="card card-interactive md:col-span-2 lg:col-span-1">
                    <div class="relative flex aspect-video items-center justify-center overflow-hidden bg-[#4b3b73]">
                        <div class="absolute -right-8 -top-10 h-40 w-40 rounded-full border border-white/10"></div>
                        <div class="absolute -left-8 bottom-0 h-32 w-32 rounded-full border border-white/10"></div>
                        <div class="relative flex h-14 w-14 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white">
                            <x-heroicon-s-play class="ml-0.5 h-6 w-6" />
                        </div>
                        <span class="absolute bottom-4 left-4 rounded-full bg-black/20 px-3 py-1 text-xs font-semibold text-white">Kolaborasi</span>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-700">Kemitraan</span>
                        <h4 class="mt-2 text-lg font-bold text-ink">Cerita Kolaborasi</h4>
                        <p class="mt-2 text-sm leading-7 text-muted">Ruang untuk berbagi cerita tentang kemitraan, pertukaran gagasan, dan upaya bersama.</p>
                        <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium text-muted">
                            <x-heroicon-o-clock class="h-4 w-4" />
                            Menunggu koleksi video
                        </span>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>