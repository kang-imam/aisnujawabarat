@extends('layouts.app')
@section('title', 'Media AISNU Jawa Barat')
@section('meta_description', 'Pusat media AISNU Jawa Barat untuk materi visual, dokumentasi kegiatan, dan konten edukasi mengenai santri dan pesantren.')
@section('canonical_url', route('media'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Media dan dokumentasi</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">Cerita, gagasan, dan gerakan santri</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Ruang untuk menampilkan materi visual, dokumentasi kegiatan, dan konten edukasi yang berkaitan dengan kehidupan santri serta perkembangan AISNU Jawa Barat.</p>
        <div class="mt-8 flex flex-wrap gap-3"><a href="{{ route('berita.index') }}" class="btn btn-accent">Jelajahi berita <x-heroicon-o-arrow-right class="size-4" /></a><a href="{{ route('publikasi.index') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Lihat publikasi</a></div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Ruang media</p>
            <h2 class="section-title">Konten yang informatif dan bertanggung jawab</h2>
            <p class="section-description">Materi media perlu memberikan informasi yang akurat, menghormati hak cipta, dan menjaga privasi setiap orang yang ditampilkan.</p>
        </div>
        <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <article class="card overflow-hidden">
                <div class="flex aspect-[4/3] items-center justify-center bg-brand-50 text-brand-700"><x-heroicon-o-camera class="size-14" /></div>
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-700">Dokumentasi</p>
                    <h3 class="mt-3 text-lg font-bold text-brand-950">Kegiatan dan agenda organisasi</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Tempat untuk menampilkan foto dan dokumentasi kegiatan yang sudah diverifikasi serta mendapat izin publikasi yang sesuai.</p>
                </div>
            </article>
            <article class="card overflow-hidden">
                <div class="flex aspect-[4/3] items-center justify-center bg-brand-50 text-brand-700"><x-heroicon-o-book-open class="size-14" /></div>
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-700">Edukasi</p>
                    <h3 class="mt-3 text-lg font-bold text-brand-950">Materi literasi dan perlindungan</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Konten edukasi mengenai lingkungan aman, hak santri, pencegahan kekerasan, dan literasi digital.</p><a href="{{ route('layanan') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Baca informasi layanan <x-heroicon-o-arrow-right class="size-4" /></a>
                </div>
            </article>
            <article class="card overflow-hidden">
                <div class="flex aspect-[4/3] items-center justify-center bg-brand-50 text-brand-700"><x-heroicon-o-megaphone class="size-14" /></div>
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-[0.14em] text-brand-700">Publikasi</p>
                    <h3 class="mt-3 text-lg font-bold text-brand-950">Informasi dan materi organisasi</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Tempat untuk mengakses dokumen, materi kampanye, dan publikasi resmi yang tersedia.</p><a href="{{ route('publikasi.index') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Jelajahi publikasi <x-heroicon-o-arrow-right class="size-4" /></a>
                </div>
            </article>
        </div>
        <div class="mt-10 rounded-2xl border border-line bg-surface p-6 sm:p-8">
            <h2 class="text-xl font-bold text-brand-950">Galeri media sedang disiapkan</h2>
            <p class="mt-3 max-w-2xl text-sm leading-7 text-muted">Belum ada koleksi media dinamis yang ditampilkan pada halaman ini. Dokumentasi aktual dapat ditambahkan setelah file, keterangan, hak penggunaan, dan persetujuan publikasi diverifikasi.</p>
        </div>
    </div>
</section>
@endsection