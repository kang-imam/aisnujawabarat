@extends('layouts.app')

@section('title', 'Pencarian | AISNU Jawa Barat')

@section('meta_description', 'Cari informasi, berita, publikasi, program, layanan, dan konten lainnya di situs resmi AISNU Jawa Barat.')

@section('canonical_url', route('pencarian'))

@section('content')

{{-- Hero dan formulir pencarian --}}
<section class="relative overflow-hidden border-b border-line bg-canvas">
    <div aria-hidden="true" class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full border border-brand-200/60"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -right-8 -top-8 h-44 w-44 rounded-full border border-accent/30"></div>

    <div class="container-site relative py-16 sm:py-20 lg:py-24">
        <div class="mx-auto max-w-3xl text-center">
            <span class="section-eyebrow">
                <x-heroicon-o-magnifying-glass class="h-4 w-4" />
                Pusat Pencarian
            </span>

            <h1 class="mt-5 text-4xl font-bold leading-tight tracking-tight text-ink sm:text-5xl lg:text-6xl">
                Temukan Informasi
                <span class="text-brand-700">yang Anda Butuhkan.</span>
            </h1>

            <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-muted sm:text-lg">
                Cari berita, publikasi, program, layanan, dan informasi
                mengenai AISNU Jawa Barat melalui satu tempat.
            </p>

            <form
                action="{{ route('pencarian') }}"
                method="GET"
                role="search"
                aria-label="Pencarian situs"
                class="mx-auto mt-8 max-w-2xl">
                <label for="kata-kunci" class="sr-only">
                    Kata kunci pencarian
                </label>

                <div class="flex flex-col gap-3 rounded-2xl border border-line bg-surface p-3 shadow-card sm:flex-row sm:items-center">
                    <div class="flex min-w-0 flex-1 items-center gap-3 px-2">
                        <x-heroicon-o-magnifying-glass class="h-5 w-5 shrink-0 text-muted" />

                        <input
                            id="kata-kunci"
                            type="search"
                            name="q"
                            value="{{ request('q') }}"
                            placeholder="Cari berita, program, publikasi..."
                            class="min-h-12 w-full min-w-0 border-0 bg-transparent text-sm text-ink outline-none placeholder:text-muted focus:ring-0"
                            autocomplete="off" />
                    </div>

                    <button type="submit" class="btn btn-primary shrink-0">
                        <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                        Cari Sekarang
                    </button>
                </div>

                <p class="mt-3 text-left text-xs leading-5 text-muted sm:text-center">
                    Masukkan kata kunci yang berkaitan dengan informasi
                    yang ingin Anda temukan.
                </p>
            </form>
        </div>
    </div>
</section>

{{-- Hasil pencarian --}}
<section id="hasil-pencarian" class="section-space scroll-mt-24 bg-surface">
    <div class="container-site">
        @if (request()->filled('q'))
        <div class="mb-8 border-b border-line pb-6">
            <span class="section-eyebrow">Hasil Pencarian</span>

            <h2 class="mt-3 text-2xl font-bold tracking-tight text-ink sm:text-3xl">
                Hasil untuk
                <span class="text-brand-700">"{{ request('q') }}"</span>
            </h2>

            <p class="mt-3 text-sm leading-7 text-muted">
                Hasil pencarian akan ditampilkan setelah fitur pencarian
                dihubungkan dengan sumber konten situs.
            </p>
        </div>

        <div class="rounded-2xl border border-dashed border-line bg-canvas px-6 py-12 text-center sm:px-10">
            <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                <x-heroicon-o-document-magnifying-glass class="h-7 w-7" />
            </span>

            <h3 class="mt-5 text-lg font-bold text-ink">
                Pencarian Belum Terhubung
            </h3>

            <p class="mx-auto mt-3 max-w-xl text-sm leading-7 text-muted">
                Formulir sudah dapat mengirimkan kata kunci melalui
                parameter <code>q</code>. Hasil nyata memerlukan
                implementasi pencarian pada route atau controller.
            </p>
        </div>
        @else
        <div class="mx-auto max-w-2xl py-6 text-center">
            <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                <x-heroicon-o-magnifying-glass class="h-7 w-7" />
            </span>

            <h2 class="mt-5 text-xl font-bold text-ink sm:text-2xl">
                Mulai dengan Kata Kunci
            </h2>

            <p class="mt-3 text-sm leading-7 text-muted">
                Ketik topik, nama program, atau informasi yang ingin
                Anda cari pada kolom di atas.
            </p>
        </div>
        @endif
    </div>
</section>

{{-- Jelajahi halaman --}}
<section class="section-space bg-canvas">
    <div class="container-site">
        <div class="section-heading">
            <span class="section-eyebrow">Jelajahi Situs</span>

            <h2 class="section-title mt-3">
                Cari dari Halaman yang Tepat.
            </h2>

            <p class="section-description">
                Anda juga dapat membuka langsung kategori informasi
                yang sesuai dengan kebutuhan.
            </p>
        </div>

        <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('berita.index') }}" class="card card-interactive group p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-newspaper class="h-6 w-6" />
                </span>

                <h3 class="mt-5 flex items-center justify-between gap-3 font-bold text-ink">
                    Berita dan Kegiatan
                    <x-heroicon-o-arrow-up-right class="h-4 w-4 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </h3>

                <p class="mt-2 text-sm leading-7 text-muted">
                    Informasi dan perkembangan kegiatan AISNU Jawa Barat.
                </p>
            </a>

            <a href="{{ route('publikasi.index') }}" class="card card-interactive group p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-book-open class="h-6 w-6" />
                </span>

                <h3 class="mt-5 flex items-center justify-between gap-3 font-bold text-ink">
                    Publikasi
                    <x-heroicon-o-arrow-up-right class="h-4 w-4 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </h3>

                <p class="mt-2 text-sm leading-7 text-muted">
                    Dokumen, panduan, dan materi edukasi yang tersedia.
                </p>
            </a>

            <a href="{{ route('program') }}" class="card card-interactive group p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 transition-colors dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-rectangle-stack class="h-6 w-6" />
                </span>

                <h3 class="mt-5 flex items-center justify-between gap-3 font-bold text-ink">
                    Program
                    <x-heroicon-o-arrow-up-right class="h-4 w-4 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </h3>

                <p class="mt-2 text-sm leading-7 text-muted">
                    Kenali arah program dan bidang kegiatan organisasi.
                </p>
            </a>

            <a href="{{ route('layanan') }}" class="card card-interactive group p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-shield-check class="h-6 w-6" />
                </span>

                <h3 class="mt-5 flex items-center justify-between gap-3 font-bold text-ink">
                    Layanan
                    <x-heroicon-o-arrow-up-right class="h-4 w-4 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </h3>

                <p class="mt-2 text-sm leading-7 text-muted">
                    Temukan informasi layanan dan panduan terkait.
                </p>
            </a>

            <a href="{{ route('pesantren') }}" class="card card-interactive group p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-building-library class="h-6 w-6" />
                </span>

                <h3 class="mt-5 flex items-center justify-between gap-3 font-bold text-ink">
                    Pesantren
                    <x-heroicon-o-arrow-up-right class="h-4 w-4 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </h3>

                <p class="mt-2 text-sm leading-7 text-muted">
                    Informasi mengenai pesantren aman dan perlindungan santri.
                </p>
            </a>

            <a href="{{ route('santripreneur') }}" class="card card-interactive group p-6">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-light-bulb class="h-6 w-6" />
                </span>

                <h3 class="mt-5 flex items-center justify-between gap-3 font-bold text-ink">
                    Santripreneur
                    <x-heroicon-o-arrow-up-right class="h-4 w-4 shrink-0 text-muted transition-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5" />
                </h3>

                <p class="mt-2 text-sm leading-7 text-muted">
                    Informasi kewirausahaan dan pengembangan potensi santri.
                </p>
            </a>
        </div>
    </div>
</section>

{{-- Kontak --}}
<section class="section-space bg-surface">
    <div class="container-site">
        <div class="rounded-3xl border border-line bg-canvas p-6 sm:p-9 lg:flex lg:items-center lg:justify-between lg:gap-10 lg:p-10">
            <div class="max-w-2xl">
                <span class="section-eyebrow">Butuh Bantuan?</span>

                <h2 class="mt-3 text-2xl font-bold tracking-tight text-ink sm:text-3xl">
                    Belum Menemukan Informasi yang Dicari?
                </h2>

                <p class="mt-4 text-sm leading-7 text-muted sm:text-base">
                    Kunjungi halaman kontak untuk melihat saluran komunikasi
                    AISNU Jawa Barat yang tersedia.
                </p>
            </div>

            <div class="mt-6 shrink-0 lg:mt-0">
                <a href="{{ route('kontak') }}" class="btn btn-primary">
                    <x-heroicon-o-chat-bubble-left-right class="h-5 w-5" />
                    Hubungi Kami
                    <x-heroicon-o-arrow-right class="h-4 w-4" />
                </a>
            </div>
        </div>
    </div>
</section>

@endsection