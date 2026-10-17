@extends('layouts.app')

@section('title', 'Publikasi AISNU Jawa Barat | Dokumen dan Materi Edukasi')

@section('meta_description', 'Jelajahi publikasi AISNU Jawa Barat berupa dokumen, panduan, materi edukasi, dan bahan bacaan seputar perlindungan santri, pesantren aman, serta pengembangan kapasitas.')

@section('canonical_url', route('publikasi.index'))

@section('content')

{{-- Hero --}}
<section class="relative overflow-hidden border-b border-line bg-canvas">
    <div aria-hidden="true" class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full border border-brand-200/60"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -right-10 -top-10 h-52 w-52 rounded-full border border-accent/30"></div>

    <div class="container-site relative py-16 sm:py-20 lg:py-24">
        <div class="max-w-3xl">
            <span class="section-eyebrow">
                <x-heroicon-o-book-open class="h-4 w-4" />
                Pusat Publikasi
            </span>

            <h1 class="mt-5 text-4xl font-bold leading-tight tracking-tight text-ink sm:text-5xl lg:text-6xl">
                Pengetahuan untuk
                <span class="text-brand-700">Perubahan yang Lebih Baik.</span>
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-muted sm:text-lg">
                Temukan bahan bacaan, panduan, dokumen, dan materi edukasi
                yang mendukung perlindungan santri, penguatan pesantren,
                serta pengembangan kapasitas masyarakat.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="#daftar-publikasi" class="btn btn-primary">
                    <x-heroicon-o-document-text class="h-5 w-5" />
                    Jelajahi Publikasi
                    <x-heroicon-o-arrow-down class="h-4 w-4" />
                </a>

                <a href="{{ route('informasi') }}" class="btn btn-outline">
                    <x-heroicon-o-information-circle class="h-5 w-5" />
                    Pusat Informasi
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Pengantar --}}
<section class="section-space bg-surface">
    <div class="container-site">
        <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-16">
            <div>
                <span class="section-eyebrow">Tentang Publikasi</span>

                <h2 class="section-title mt-4">
                    Informasi yang Bisa Dipelajari dan Dibagikan.
                </h2>
            </div>

            <div class="space-y-4 text-sm leading-7 text-muted sm:text-base sm:leading-8">
                <p>
                    Publikasi menjadi salah satu sarana untuk memperluas
                    akses terhadap pengetahuan dan informasi yang bermanfaat
                    bagi santri, pengelola pesantren, keluarga, serta masyarakat.
                </p>

                <p>
                    Halaman ini disiapkan sebagai tempat untuk mengakses
                    materi edukasi, panduan, dokumen organisasi, dan bahan
                    bacaan lain yang diterbitkan atau direkomendasikan oleh
                    AISNU Jawa Barat.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Kategori publikasi --}}
<section class="section-space bg-canvas">
    <div class="container-site">
        <div class="section-heading">
            <span class="section-eyebrow">Ruang Pengetahuan</span>

            <h2 class="section-title mt-3">
                Jelajahi Berdasarkan Kebutuhan.
            </h2>

            <p class="section-description">
                Kenali jenis materi yang dapat dikembangkan dan dihimpun
                dalam pusat publikasi AISNU Jawa Barat.
            </p>
        </div>

        <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <article class="card card-interactive p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-shield-check class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-lg font-bold text-ink">
                    Perlindungan Santri
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Materi edukasi mengenai pencegahan kekerasan,
                    penghormatan martabat santri, dan pentingnya
                    lingkungan belajar yang aman.
                </p>
            </article>

            <article class="card card-interactive p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-book-open class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-lg font-bold text-ink">
                    Panduan dan Edukasi
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Bahan bacaan untuk memperluas wawasan santri,
                    keluarga, pendidik, dan masyarakat mengenai
                    kehidupan pesantren.
                </p>
            </article>

            <article class="card card-interactive p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-building-library class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-lg font-bold text-ink">
                    Dokumen Organisasi
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Ruang untuk dokumen, laporan, dan materi organisasi
                    yang telah disiapkan untuk diakses oleh publik.
                </p>
            </article>

            <article class="card card-interactive p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-academic-cap class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-lg font-bold text-ink">
                    Pengembangan Kapasitas
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Materi yang mendukung pembelajaran, keterampilan,
                    kepemimpinan, dan pengembangan potensi santri.
                </p>
            </article>

            <article class="card card-interactive p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-document-chart-bar class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-lg font-bold text-ink">
                    Laporan dan Kajian
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Ruang untuk laporan kegiatan, hasil kajian, dan
                    dokumen pendukung yang telah tersedia dan layak
                    dipublikasikan.
                </p>
            </article>

            <article class="card card-interactive p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-light-bulb class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-lg font-bold text-ink">
                    Materi Inspiratif
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Bacaan yang mendorong kepedulian, kolaborasi,
                    kreativitas, dan kontribusi positif bagi lingkungan
                    pesantren.
                </p>
            </article>
        </div>
    </div>
</section>

{{-- Daftar publikasi --}}
<section id="daftar-publikasi" class="section-space scroll-mt-24 bg-surface">
    <div class="container-site">
        <div class="section-heading">
            <span class="section-eyebrow">Koleksi Publikasi</span>

            <h2 class="section-title mt-3">
                Publikasi yang Tersedia.
            </h2>

            <p class="section-description">
                Daftar dokumen dan materi akan ditampilkan di bagian ini
                setelah file publikasi tersedia dan siap dibagikan.
            </p>
        </div>

        <div class="mx-auto mt-10 max-w-3xl rounded-2xl border border-dashed border-line bg-canvas px-6 py-12 text-center sm:px-10">
            <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                <x-heroicon-o-document-magnifying-glass class="h-7 w-7" />
            </span>

            <h3 class="mt-5 text-lg font-bold text-ink">
                Koleksi Sedang Dipersiapkan
            </h3>

            <p class="mx-auto mt-3 max-w-xl text-sm leading-7 text-muted">
                Dokumen dan materi publikasi akan ditampilkan setelah
                tersedia. Silakan jelajahi halaman informasi dan berita
                untuk menemukan konten lain yang relevan.
            </p>

            <div class="mt-6 flex flex-col justify-center gap-3 sm:flex-row">
                <a href="{{ route('informasi') }}" class="btn btn-primary">
                    <x-heroicon-o-information-circle class="h-5 w-5" />
                    Lihat Informasi
                </a>

                <a href="{{ route('berita.index') }}" class="btn btn-outline">
                    <x-heroicon-o-newspaper class="h-5 w-5" />
                    Baca Berita
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Ajakan --}}
<section class="section-space bg-canvas">
    <div class="container-site">
        <div class="relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-card sm:p-10 lg:p-12">
            <div aria-hidden="true" class="pointer-events-none absolute -right-12 -top-12 h-48 w-48 rounded-full border border-brand-200/60"></div>

            <div class="relative grid gap-8 lg:grid-cols-[minmax(0,1fr)_auto] lg:items-center">
                <div class="max-w-2xl">
                    <span class="section-eyebrow">Terhubung dengan AISNU</span>

                    <h2 class="mt-4 text-2xl font-bold leading-tight tracking-tight text-ink sm:text-3xl lg:text-4xl">
                        Pengetahuan Bertumbuh Ketika Dibagikan.
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-muted sm:text-base sm:leading-8">
                        Temukan informasi mengenai organisasi, program,
                        dan kegiatan AISNU Jawa Barat melalui halaman
                        yang tersedia di situs ini.
                    </p>
                </div>

                <div class="relative flex flex-col gap-3 sm:flex-row lg:flex-col">
                    <a href="{{ route('profil') }}" class="btn btn-primary">
                        <x-heroicon-o-building-office-2 class="h-5 w-5" />
                        Profil AISNU
                        <x-heroicon-o-arrow-right class="h-4 w-4" />
                    </a>

                    <a href="{{ route('kontak') }}" class="btn btn-outline">
                        <x-heroicon-o-chat-bubble-left-right class="h-5 w-5" />
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection