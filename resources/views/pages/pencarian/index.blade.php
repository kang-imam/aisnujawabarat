@extends('layouts.app')
@section('title', 'Pencarian Website | AISNU Jawa Barat')
@section('meta_description', 'Cari informasi, layanan, program, berita, dan publikasi di website AISNU Jawa Barat.')
@section('canonical_url', route('pencarian'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-14 sm:py-18">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Pencarian website</p>
        <h1 class="mt-4 text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">Apa yang ingin kamu temukan?</h1>
        <p class="mt-5 max-w-2xl text-base leading-8 text-brand-100">Cari halaman informasi, layanan, program, dan konten yang tersedia di website AISNU Jawa Barat.</p>
        <form action="{{ route('pencarian') }}" method="GET" role="search" class="mt-8 flex max-w-2xl flex-col gap-3 sm:flex-row">
            <label for="q" class="sr-only">Kata kunci pencarian</label>
            <input id="q" name="q" type="search" value="{{ $query ?? '' }}" placeholder="Contoh: santri, pesantren, program..." class="min-h-12 w-full rounded-xl border border-white/20 bg-white px-4 py-3 text-sm text-brand-950 outline-none focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400" />
            <button type="submit" class="btn btn-accent justify-center"><x-heroicon-o-magnifying-glass class="size-4" /> Cari informasi</button>
        </form>
    </div>
</section>
@php
$pages = [
['title' => 'Beranda', 'description' => 'Halaman utama AISNU Jawa Barat dan ringkasan informasi organisasi.', 'url' => route('beranda'), 'keywords' => 'beranda utama aisnu jawa barat'],
['title' => 'Profil AISNU Jawa Barat', 'description' => 'Kenali organisasi, nilai perjuangan, dan komitmen terhadap santri.', 'url' => route('profil'), 'keywords' => 'profil organisasi tentang aisnu'],
['title' => 'Informasi', 'description' => 'Pusat informasi tentang santri, pesantren, program, dan pemberdayaan.', 'url' => route('informasi'), 'keywords' => 'informasi pusat informasi'],
['title' => 'Layanan dan Perlindungan Santri', 'description' => 'Informasi mengenai pencegahan kekerasan dan prinsip perlindungan santri.', 'url' => route('layanan'), 'keywords' => 'layanan perlindungan pengaduan kekerasan seksual aman'],
['title' => 'Pesantren', 'description' => 'Gagasan untuk mendorong pesantren yang aman dan mendukung perkembangan santri.', 'url' => route('pesantren'), 'keywords' => 'pesantren pendidikan lingkungan aman'],
['title' => 'Program', 'description' => 'Informasi program, kegiatan, dan inisiatif organisasi.', 'url' => route('program'), 'keywords' => 'program kegiatan agenda konsolidasi santri'],
['title' => 'Berita', 'description' => 'Kabar dan perkembangan organisasi serta komunitas santri.', 'url' => route('berita.index'), 'keywords' => 'berita kabar kegiatan'],
['title' => 'Publikasi', 'description' => 'Halaman untuk materi dan dokumen publikasi organisasi.', 'url' => route('publikasi.index'), 'keywords' => 'publikasi dokumen materi'],
['title' => 'Media', 'description' => 'Materi visual, dokumentasi, dan konten edukasi.', 'url' => route('media'), 'keywords' => 'media galeri foto dokumentasi video'],
['title' => 'Santripreneur', 'description' => 'Kewirausahaan, inovasi, dan pengembangan kemandirian santri.', 'url' => route('santripreneur'), 'keywords' => 'santripreneur wirausaha usaha ekonomi'],
['title' => 'Kemitraan', 'description' => 'Informasi penjajakan kolaborasi dengan AISNU Jawa Barat.', 'url' => route('kemitraan'), 'keywords' => 'kemitraan kolaborasi kerja sama mitra'],
['title' => 'Kontak', 'description' => 'Informasi komunikasi dan kontak organisasi.', 'url' => route('kontak'), 'keywords' => 'kontak hubungi komunikasi'],
['title' => 'Legal', 'description' => 'Kebijakan penggunaan website dan informasi privasi.', 'url' => route('legal'), 'keywords' => 'legal kebijakan privasi ketentuan']
];
$searchTerm = mb_strtolower(trim((string) ($query ?? '')));
$results = collect($pages)->filter(function ($page) use ($searchTerm) {
return $searchTerm !== '' && str_contains(mb_strtolower($page['title'].' '.$page['description'].' '.$page['keywords']), $searchTerm);
});
@endphp
<section class="section-space">
    <div class="container-site">
        @if($searchTerm === '')
        <div class="max-w-3xl">
            <p class="section-eyebrow">Mulai pencarian</p>
            <h2 class="section-title">Jelajahi halaman yang tersedia</h2>
            <p class="section-description">Masukkan kata kunci untuk menemukan halaman yang sesuai. Pencarian ini mencocokkan judul dan ringkasan halaman website.</p>
        </div>
        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach(array_slice($pages, 0, 6) as $page)
            <a href="{{ $page['url'] }}" class="card card-interactive group p-5">
                <h3 class="flex items-center justify-between gap-3 font-bold text-brand-950">{{ $page['title'] }} <x-heroicon-o-arrow-up-right class="size-4 shrink-0 transition group-hover:translate-x-1" /></h3>
                <p class="mt-3 text-sm leading-7 text-muted">{{ $page['description'] }}</p>
            </a>
            @endforeach
        </div>
        @else
        <div class="max-w-3xl">
            <p class="section-eyebrow">Hasil pencarian</p>
            <h2 class="section-title">Hasil untuk “{{ $query }}”</h2>
            <p class="section-description">Ditemukan {{ $results->count() }} halaman yang cocok dengan kata kunci berdasarkan judul dan ringkasan halaman.</p>
        </div>
        @if($results->isNotEmpty())
        <div class="mt-8 max-w-4xl space-y-4">
            @foreach($results as $page)
            <a href="{{ $page['url'] }}" class="card card-interactive group block p-6">
                <h3 class="flex items-center justify-between gap-3 text-lg font-bold text-brand-950">{{ $page['title'] }} <x-heroicon-o-arrow-up-right class="size-5 shrink-0 transition group-hover:translate-x-1" /></h3>
                <p class="mt-3 text-sm leading-7 text-muted">{{ $page['description'] }}</p>
            </a>
            @endforeach
        </div>
        @else
        <div class="mt-8 rounded-2xl border border-line bg-surface p-6 sm:p-8">
            <div class="flex size-12 items-center justify-center rounded-2xl bg-white text-brand-700"><x-heroicon-o-magnifying-glass class="size-6" /></div>
            <h3 class="mt-5 text-xl font-bold text-brand-950">Belum ditemukan halaman yang cocok</h3>
            <p class="mt-3 text-sm leading-7 text-muted">Coba kata kunci yang lebih singkat atau gunakan istilah lain, misalnya “santri”, “pesantren”, “layanan”, atau “program”.</p>
            <a href="{{ route('pencarian') }}" class="btn btn-primary mt-5">Hapus pencarian</a>
        </div>
        @endif
        @endif
    </div>
</section>
@endsection