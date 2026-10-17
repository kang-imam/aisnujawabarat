@extends('layouts.app')
@section('title', 'Santripreneur | AISNU Jawa Barat')
@section('meta_description', 'Informasi kewirausahaan santri, pengembangan keterampilan, inovasi, dan kemandirian ekonomi bersama AISNU Jawa Barat.')
@section('canonical_url', route('santripreneur'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Santripreneur</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">Mendorong santri yang kreatif, mandiri, dan berdaya</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Santri memiliki peluang untuk mengembangkan pengetahuan, keterampilan, dan gagasan usaha yang bermanfaat bagi diri sendiri, pesantren, serta masyarakat.</p>
        <div class="mt-8 flex flex-wrap gap-3"><a href="{{ route('program') }}" class="btn btn-accent">Jelajahi program <x-heroicon-o-arrow-right class="size-4" /></a><a href="{{ route('kemitraan') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Peluang kemitraan</a></div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Pengembangan potensi</p>
            <h2 class="section-title">Kemandirian tumbuh melalui pengetahuan dan praktik</h2>
            <p class="section-description">Kewirausahaan bukan hanya tentang membangun usaha, tetapi juga tentang mengenali kebutuhan, menyelesaikan masalah, mengelola sumber daya, dan menciptakan manfaat secara bertanggung jawab.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-light-bulb class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Ide dan inovasi</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Belajar mengidentifikasi kebutuhan sekitar dan merancang solusi yang relevan, bermanfaat, serta dapat dikembangkan.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-academic-cap class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Keterampilan usaha</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mengembangkan kemampuan komunikasi, pemasaran, pengelolaan keuangan, pelayanan, dan literasi digital.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-user-group class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Jejaring dan kolaborasi</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Membangun hubungan dengan komunitas, mentor, lembaga pendidikan, dan mitra usaha yang memiliki tujuan sejalan.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-chart-bar class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Pengelolaan berkelanjutan</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Memahami biaya, kualitas produk, kebutuhan pelanggan, evaluasi usaha, dan pengambilan keputusan yang terukur.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-globe-alt class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Pemasaran digital</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Memanfaatkan teknologi secara aman untuk memperkenalkan produk, membangun kepercayaan, dan menjangkau calon pelanggan.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-heart class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Usaha yang bertanggung jawab</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mengutamakan kejujuran, kualitas, kepatuhan terhadap ketentuan yang berlaku, dan manfaat bagi masyarakat.</p>
            </article>
        </div>
    </div>
</section>
<section class="section-space bg-surface">
    <div class="container-site grid gap-10 lg:grid-cols-2 lg:items-center">
        <div>
            <p class="section-eyebrow">Langkah awal</p>
            <h2 class="section-title">Mulai dari masalah nyata di sekitar</h2>
            <p class="section-description">Gagasan usaha dapat dimulai dengan mengamati kebutuhan komunitas, berbicara dengan calon pengguna, mencoba solusi sederhana, dan memperbaikinya berdasarkan umpan balik.</p>
        </div>
        <div class="space-y-4">
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Kenali kebutuhan</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Amati kebutuhan masyarakat atau pesantren sebelum memilih produk atau layanan.</p>
            </div>
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Uji gagasan secara sederhana</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Mulai dari skala kecil dan evaluasi kualitas, biaya, manfaat, serta respons pengguna.</p>
            </div>
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Bangun jejaring pendukung</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Cari ruang belajar, mentor, dan mitra yang dapat mendukung perkembangan keterampilan serta usaha.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="rounded-3xl bg-brand-950 px-6 py-10 text-white sm:px-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.16em] text-emerald-300">Kolaborasi pemberdayaan</p>
                <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">Punya gagasan untuk mengembangkan potensi santri?</h2>
                <p class="mt-4 leading-7 text-brand-100">Sampaikan gagasan atau penjajakan kerja sama melalui kanal komunikasi AISNU Jawa Barat.</p>
            </div>
            <div class="mt-7 flex shrink-0 flex-wrap gap-3 lg:mt-0"><a href="{{ route('kontak') }}" class="btn btn-accent">Hubungi kami</a><a href="{{ route('kemitraan') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Kemitraan</a></div>
        </div>
    </div>
</section>
@endsection