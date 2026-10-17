@extends('layouts.app')
@section('title', 'Publikasi AISNU Jawa Barat')
@section('meta_description', 'Pusat publikasi AISNU Jawa Barat untuk dokumen, materi edukasi, panduan, dan sumber informasi organisasi.')
@section('canonical_url', route('publikasi.index'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Pusat publikasi</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">Publikasi dan sumber pengetahuan</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Ruang untuk menghimpun dokumen organisasi, materi edukasi, panduan, dan sumber informasi yang membantu santri serta masyarakat.</p>
        <div class="mt-8 flex flex-wrap gap-3"><a href="{{ route('informasi') }}" class="btn btn-accent">Jelajahi informasi <x-heroicon-o-arrow-right class="size-4" /></a><a href="{{ route('media') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Lihat media</a></div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Kategori publikasi</p>
            <h2 class="section-title">Sumber informasi untuk berbagai kebutuhan</h2>
            <p class="section-description">Publikasi yang ditampilkan sebaiknya memiliki sumber yang jelas, status dokumen yang terverifikasi, dan informasi tanggal terbit atau pembaruan.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-document-text class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Dokumen organisasi</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Dokumen dan materi organisasi yang telah disetujui untuk dipublikasikan.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-book-open class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Materi edukasi</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Bahan pembelajaran terkait kehidupan santri, literasi, dan pengembangan kapasitas.</p><a href="{{ route('informasi') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Buka informasi <x-heroicon-o-arrow-right class="size-4" /></a>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-shield-check class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Panduan perlindungan</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Materi tentang pencegahan kekerasan, keselamatan, privasi, dan prinsip penanganan yang bertanggung jawab.</p><a href="{{ route('layanan') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Baca informasi layanan <x-heroicon-o-arrow-right class="size-4" /></a>
            </article>
        </div>
        <div class="mt-10 rounded-2xl border border-line bg-surface p-6 sm:p-8">
            <h2 class="text-xl font-bold text-brand-950">Koleksi publikasi sedang disiapkan</h2>
            <p class="mt-3 max-w-2xl text-sm leading-7 text-muted">Belum ada daftar dokumen atau berkas publikasi dinamis yang terhubung pada halaman ini. Dokumen aktual dapat ditambahkan setelah isi, sumber, hak distribusi, dan status publikasinya diverifikasi.</p>
            <a href="{{ route('kontak') }}" class="btn btn-primary mt-5">Hubungi pengelola <x-heroicon-o-arrow-right class="size-4" /></a>
        </div>
    </div>
</section>
@endsection