<section class="relative isolate overflow-hidden bg-brand-950 text-white">
    <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden" aria-hidden="true">
        <div class="absolute -right-32 -top-28 size-[30rem] rounded-full border border-white/10"></div>
        <div class="absolute -right-12 top-8 size-[22rem] rounded-full border border-white/10"></div>
        <div class="absolute -bottom-48 -left-24 size-[28rem] rounded-full bg-brand-600/20 blur-3xl"></div>
        <div class="absolute right-1/4 top-1/3 size-64 rounded-full bg-amber-400/10 blur-3xl"></div>
    </div>

    <div class="container-site relative grid min-h-[580px] items-center gap-12 py-16 sm:py-20 lg:min-h-[680px] lg:grid-cols-[minmax(0,1.1fr)_minmax(300px,0.9fr)] lg:gap-16 lg:py-24">
        <div class="max-w-2xl">
            <div class="inline-flex items-center gap-2 rounded-full border border-amber-300/30 bg-amber-300/10 px-4 py-2 text-xs font-semibold tracking-wide text-amber-200 sm:text-sm">
                <span class="size-2 rounded-full bg-amber-300"></span>
                AISNU Jawa Barat · Perlindungan Santri
            </div>

            <h1 class="mt-7 text-4xl font-bold leading-[1.12] tracking-tight text-white sm:text-5xl lg:text-6xl">
                Pesantren Aman,
                <span class="text-amber-300">Santri Terlindungi.</span>
            </h1>

            <p class="mt-6 max-w-xl text-base leading-8 text-white/80 sm:text-lg">
                Tidak ada ruang bagi kekerasan di dunia pendidikan. AISNU Jawa Barat mendorong pencegahan, edukasi, dan penguatan perlindungan santri, termasuk terhadap kekerasan seksual, agar pesantren menjadi ruang belajar yang aman, bermartabat, dan penuh kemaslahatan.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('kontak') }}" class="btn btn-accent min-h-12 px-5">
                    Informasi dan Kontak Pengaduan
                    <x-heroicon-o-shield-check class="size-5" aria-hidden="true" />
                </a>

                <a href="{{ route('profil') }}" class="btn min-h-12 border border-white/25 bg-white/5 px-5 text-white transition hover:border-white/50 hover:bg-white/10">
                    Kenali Gerakan AISNU
                    <x-heroicon-o-arrow-up-right class="size-4" aria-hidden="true" />
                </a>
            </div>

            <div class="mt-10 flex flex-wrap items-center gap-x-5 gap-y-3 border-t border-white/15 pt-6 text-sm text-white/70">
                <span class="inline-flex items-center gap-2">
                    <x-heroicon-o-shield-check class="size-4 text-amber-300" aria-hidden="true" />
                    Perlindungan santri
                </span>

                <span class="hidden size-1 rounded-full bg-white/30 sm:block"></span>

                <span class="inline-flex items-center gap-2">
                    <x-heroicon-o-hand-raised class="size-4 text-amber-300" aria-hidden="true" />
                    Pencegahan kekerasan
                </span>

                <span class="hidden size-1 rounded-full bg-white/30 sm:block"></span>

                <span class="inline-flex items-center gap-2">
                    <x-heroicon-o-user-group class="size-4 text-amber-300" aria-hidden="true" />
                    Solidaritas santri
                </span>
            </div>
        </div>

        {{-- Panel pesan utama --}}
        <div class="relative mx-auto w-full max-w-lg lg:ml-auto">
            <div class="absolute -inset-5 rounded-[2rem] border border-white/10 sm:-inset-7" aria-hidden="true"></div>

            <div class="relative overflow-hidden rounded-[1.5rem] border border-white/15 bg-white/[0.06] p-6 shadow-2xl backdrop-blur-sm sm:p-8">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-amber-300">
                            Fokus Gerakan
                        </span>

                        <p class="mt-2 text-sm text-white/60">
                            Mewujudkan lingkungan pesantren yang aman
                        </p>
                    </div>

                    <span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-amber-400/10 text-amber-300">
                        <x-heroicon-o-shield-check class="size-7" aria-hidden="true" />
                    </span>
                </div>

                <h2 class="mt-7 text-2xl font-bold leading-snug text-white sm:text-3xl">
                    Setiap santri berhak merasa aman, didengar, dan dilindungi.
                </h2>

                <p class="mt-4 text-sm leading-7 text-white/70">
                    Kekerasan fisik, psikis, perundungan, maupun kekerasan seksual tidak boleh dinormalisasi. Perlindungan santri membutuhkan kepedulian, keberanian, pendampingan, dan tanggung jawab bersama.
                </p>

                <div class="mt-7 space-y-3">
                    <a href="{{ route('informasi') }}" class="group flex items-center gap-4 rounded-xl border border-white/10 bg-white/[0.04] p-4 transition hover:border-amber-300/40 hover:bg-white/[0.08]">
                        <span class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-white/10 text-amber-300">
                            <x-heroicon-o-book-open class="size-5" aria-hidden="true" />
                        </span>

                        <span class="min-w-0 flex-1">
                            <span class="block text-sm font-bold text-white">Edukasi dan informasi</span>
                            <span class="mt-1 block text-xs leading-5 text-white/60">Kenali kekerasan dan pentingnya pencegahan</span>
                        </span>

                        <x-heroicon-o-arrow-up-right class="size-4 shrink-0 text-white/50 transition group-hover:text-amber-300" aria-hidden="true" />
                    </a>

                    <a href="{{ route('berita.index') }}" class="group flex items-center gap-4 rounded-xl border border-white/10 bg-white/[0.04] p-4 transition hover:border-amber-300/40 hover:bg-white/[0.08]">
                        <span class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-white/10 text-amber-300">
                            <x-heroicon-o-megaphone class="size-5" aria-hidden="true" />
                        </span>

                        <span class="min-w-0 flex-1">
                            <span class="block text-sm font-bold text-white">Gerakan dan advokasi</span>
                            <span class="mt-1 block text-xs leading-5 text-white/60">Ikuti informasi dan kegiatan AISNU Jawa Barat</span>
                        </span>

                        <x-heroicon-o-arrow-up-right class="size-4 shrink-0 text-white/50 transition group-hover:text-amber-300" aria-hidden="true" />
                    </a>

                    <a href="{{ route('kontak') }}" class="group flex items-center gap-4 rounded-xl border border-amber-300/25 bg-amber-300/[0.06] p-4 transition hover:border-amber-300/50 hover:bg-amber-300/[0.10]">
                        <span class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-amber-300/10 text-amber-300">
                            <x-heroicon-o-chat-bubble-left-right class="size-5" aria-hidden="true" />
                        </span>

                        <span class="min-w-0 flex-1">
                            <span class="block text-sm font-bold text-white">Informasi layanan pengaduan</span>
                            <span class="mt-1 block text-xs leading-5 text-white/60">Hubungi AISNU Jawa Barat untuk informasi layanan</span>
                        </span>

                        <x-heroicon-o-arrow-up-right class="size-4 shrink-0 text-white/50 transition group-hover:text-amber-300" aria-hidden="true" />
                    </a>
                </div>

                <div class="mt-7 flex items-start gap-3 border-t border-white/10 pt-5">
                    <x-heroicon-o-heart class="mt-1 size-5 shrink-0 text-amber-300" aria-hidden="true" />

                    <p class="text-xs leading-6 text-white/65">
                        Mendengar tanpa menghakimi. Mendampingi dengan empati. Mengupayakan perlindungan dengan bertanggung jawab.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 h-1 w-full bg-gradient-to-r from-brand-700 via-amber-400 to-brand-700" aria-hidden="true"></div>
</section>