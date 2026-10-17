@extends('layouts.app')
@section('title', 'Berita AISNU Jawa Barat')
@section('meta_description', 'Berita, kabar kegiatan, dan perkembangan AISNU Jawa Barat seputar santri, pesantren, perlindungan, pendidikan, dan pemberdayaan.')
@section('canonical_url', route('berita.index'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Kabar organisasi</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">Berita dan perkembangan AISNU Jawa Barat</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Ikuti kabar kegiatan, gagasan, dan perkembangan seputar santri, pesantren, serta upaya membangun lingkungan pendidikan yang aman dan berdaya.</p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('informasi') }}" class="btn btn-accent">Pusat informasi <x-heroicon-o-arrow-right class="size-4" /></a>
            <a href="{{ route('publikasi.index') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Lihat publikasi</a>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Kabar dan kegiatan</p>
            <h2 class="section-title">Informasi yang penting untuk diikuti</h2>
            <p class="section-description">Halaman ini menjadi tempat untuk menampilkan berita resmi organisasi. Artikel akan ditampilkan ketika konten berita telah diterbitkan dan tersedia di website.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="card overflow-hidden">
                <div class="flex aspect-[16/9] items-center justify-center bg-brand-50 text-brand-700"><x-heroicon-o-shield-check class="size-12" /></div>
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-700">Perlindungan santri</p>
                    <h3 class="mt-3 text-lg font-bold text-brand-950">Mendorong lingkungan pesantren yang aman</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Upaya perlindungan membutuhkan kepedulian, pencegahan kekerasan, dan mekanisme penanganan yang bertanggung jawab.</p>
                    <a href="{{ route('layanan') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Pelajari topik <x-heroicon-o-arrow-right class="size-4" /></a>
                </div>
            </article>
            <article class="card overflow-hidden">
                <div class="flex aspect-[16/9] items-center justify-center bg-brand-50 text-brand-700"><x-heroicon-o-user-group class="size-12" /></div>
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-700">Konsolidasi santri</p>
                    <h3 class="mt-3 text-lg font-bold text-brand-950">Ruang dialog dan penguatan jejaring santri</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Konsolidasi dapat menjadi ruang untuk bertukar gagasan, mendengar aspirasi, dan merumuskan langkah bersama.</p>
                    <a href="{{ route('program') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Jelajahi program <x-heroicon-o-arrow-right class="size-4" /></a>
                </div>
            </article>
            <article class="card overflow-hidden">
                <div class="flex aspect-[16/9] items-center justify-center bg-brand-50 text-brand-700"><x-heroicon-o-light-bulb class="size-12" /></div>
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-700">Pemberdayaan</p>
                    <h3 class="mt-3 text-lg font-bold text-brand-950">Mendukung potensi dan kemandirian santri</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Pendidikan, keterampilan, kewirausahaan, dan kolaborasi membuka ruang bagi santri untuk terus berkembang.</p>
                    <a href="{{ route('santripreneur') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Kenali santripreneur <x-heroicon-o-arrow-right class="size-4" /></a>
                </div>
            </article>
        </div>
        <div class="mt-10 rounded-2xl border border-line bg-surface p-6 sm:p-8">
            <h2 class="text-xl font-bold text-brand-950">Belum ada artikel berita yang diterbitkan</h2>
            <p class="mt-3 max-w-2xl text-sm leading-7 text-muted">Konten berita aktual dapat ditambahkan melalui sistem pengelolaan konten ketika fitur tersebut tersedia. Informasi di atas merupakan pengantar topik, bukan laporan kegiatan yang telah berlangsung.</p>
            <a href="{{ route('informasi') }}" class="btn btn-primary mt-5">Jelajahi informasi <x-heroicon-o-arrow-right class="size-4" /></a>
        </div>
    </div>
</section>
@endsection