<section class="section-space bg-surface">
    <div class="container-site grid gap-8 lg:grid-cols-2 lg:items-center">
        <div>
            <p class="section-eyebrow">Informasi terbaru</p>

            <h2 class="section-title">
                Ikuti kabar dan publikasi AISNU Jawa Barat
            </h2>

            <p class="section-description">
                Kunjungi halaman berita dan publikasi untuk membaca materi
                yang tersedia di website.
            </p>
        </div>

        <div class="flex flex-wrap gap-3 lg:justify-end">
            <a href="{{ route('berita.index') }}" class="btn btn-primary">
                Jelajahi berita
                <x-heroicon-o-arrow-right class="size-4" />
            </a>

            <a href="{{ route('publikasi.index') }}" class="btn btn-outline">
                Jelajahi publikasi
                <x-heroicon-o-arrow-right class="size-4" />
            </a>
        </div>
    </div>
</section>