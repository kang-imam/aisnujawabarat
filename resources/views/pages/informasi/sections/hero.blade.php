<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">
            Pusat informasi
        </p>

        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">
            Informasi untuk santri dan masyarakat
        </h1>

        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">
            Temukan informasi seputar AISNU Jawa Barat, perlindungan santri,
            kegiatan pesantren, pengembangan kapasitas, dan kolaborasi.
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('berita.index') }}" class="btn btn-accent">
                Baca berita
                <x-heroicon-o-arrow-right class="size-4" />
            </a>

            <a
                href="{{ route('publikasi.index') }}"
                class="btn border border-white/30 text-white transition hover:bg-white/10">
                Lihat publikasi
            </a>
        </div>
    </div>
</section>