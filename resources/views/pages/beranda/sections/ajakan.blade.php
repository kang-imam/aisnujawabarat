<section class="section-space bg-surface">
    <div class="container-site">
        <div class="relative isolate overflow-hidden rounded-3xl bg-brand-900 px-6 py-10 text-white sm:px-10 sm:py-12 lg:px-14 lg:py-14">
            <div class="pointer-events-none absolute -right-16 -top-28 -z-10 size-72 rounded-full border border-white/10 sm:size-96" aria-hidden="true"></div>

            <div class="pointer-events-none absolute -bottom-24 right-1/4 -z-10 size-56 rounded-full bg-amber-400/10 blur-3xl" aria-hidden="true"></div>

            <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_auto] lg:items-center">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.16em] text-amber-300">
                        <x-heroicon-o-hand-raised class="size-4" aria-hidden="true" />
                        Bergerak Bersama
                    </span>

                    <h2 class="mt-4 text-2xl font-bold leading-tight text-white sm:text-3xl lg:text-4xl">
                        Diam bukan solusi. Perlindungan santri adalah tanggung jawab bersama.
                    </h2>

                    <p class="mt-4 max-w-xl text-sm leading-7 text-white/75 sm:text-base">
                        Pencegahan kekerasan membutuhkan keberanian untuk peduli, kesediaan untuk mendengar, dan komitmen untuk membangun lingkungan pendidikan yang aman. Mari memperkuat solidaritas dan mengambil bagian dalam upaya perlindungan santri di Jawa Barat.
                    </p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                    <a href="{{ route('berita.index') }}" class="btn btn-accent min-h-12 whitespace-nowrap">
                        Ikuti Gerakan AISNU
                        <x-heroicon-o-arrow-up-right class="size-4" aria-hidden="true" />
                    </a>

                    <a href="{{ route('kemitraan') }}" class="btn min-h-12 border border-white/25 bg-white/5 text-white transition hover:bg-white/10">
                        Jajaki Kolaborasi
                        <x-heroicon-o-arrow-right class="size-4" aria-hidden="true" />
                    </a>

                    <a href="{{ route('kontak') }}" class="btn min-h-12 border border-white/25 bg-white/5 text-white transition hover:bg-white/10">
                        Hubungi AISNU Jawa Barat
                        <x-heroicon-o-chat-bubble-left-right class="size-4" aria-hidden="true" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>