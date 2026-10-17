@extends('layouts.app')
@section('title', 'Layanan dan Perlindungan Santri | AISNU Jawa Barat')
@section('meta_description', 'Informasi layanan, prinsip perlindungan santri, pencegahan kekerasan di lingkungan pesantren, dan akses komunikasi AISNU Jawa Barat.')
@section('canonical_url', route('layanan'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Layanan dan perlindungan</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">Keselamatan santri adalah tanggung jawab bersama</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Mendorong lingkungan pesantren yang aman, menghormati martabat santri, serta memberi perhatian serius pada pencegahan dan penanganan kekerasan, termasuk kekerasan seksual.</p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('kontak') }}" class="btn btn-accent">Hubungi AISNU Jawa Barat <x-heroicon-o-arrow-right class="size-4" /></a>
            <a href="{{ route('pesantren') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Informasi pesantren</a>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Prinsip perlindungan</p>
            <h2 class="section-title">Lingkungan aman dimulai dari keberanian untuk peduli</h2>
            <p class="section-description">Kekerasan tidak boleh dinormalisasi sebagai bagian dari pendidikan. Setiap upaya pencegahan dan penanganan perlu mengutamakan keselamatan, kerahasiaan yang dikelola secara bertanggung jawab, serta penghormatan kepada pihak yang terdampak.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-shield-check class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Pencegahan kekerasan</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mendorong pemahaman tentang batas aman, relasi yang sehat, perlindungan dari intimidasi, dan tanggung jawab bersama di lingkungan pendidikan.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-heart class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Berpihak pada penyintas</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Dengarkan tanpa menyalahkan, hormati pilihan dan privasi pihak terdampak, serta hindari tekanan untuk menceritakan ulang pengalaman yang menyakitkan.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-chat-bubble-left-right class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Informasi jalur bantuan</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Gunakan kanal bantuan yang identitas pengelola dan mekanisme penanganannya jelas. Pastikan jalur komunikasi benar-benar aktif sebelum mengirimkan informasi sensitif.</p>
            </article>
        </div>
    </div>
</section>
<section class="section-space bg-surface">
    <div class="container-site grid gap-10 lg:grid-cols-2 lg:items-start">
        <div>
            <p class="section-eyebrow">Jika terjadi kekerasan</p>
            <h2 class="section-title">Utamakan keselamatan dan dukungan</h2>
            <p class="section-description">Jika kamu atau seseorang yang kamu kenal mengalami kekerasan, kamu tidak harus menghadapinya sendirian. Pilih langkah yang paling aman sesuai situasi dan kebutuhan pihak terdampak.</p>
        </div>
        <div class="space-y-4">
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">1. Cari tempat yang aman</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Jika ada ancaman langsung, menjauhlah dari situasi berbahaya jika memungkinkan dan mintalah bantuan orang tepercaya atau layanan darurat setempat.</p>
            </div>
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">2. Dengarkan tanpa menghakimi</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Hindari menyalahkan, mengintimidasi, memaksa mediasi, atau menyebarkan cerita dan identitas pihak terdampak tanpa persetujuan yang sesuai.</p>
            </div>
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">3. Cari bantuan yang dapat diverifikasi</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Untuk pendampingan, hubungi lembaga atau tenaga profesional yang relevan. Jika melibatkan anak, utamakan keselamatan dan kepentingan terbaik anak.</p>
            </div>
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">4. Lindungi informasi pribadi</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Jangan mengunggah nama, alamat, foto, tangkapan layar, atau bukti sensitif ke media sosial. Pastikan kanal yang digunakan aman dan sesuai kebutuhan.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="rounded-3xl bg-brand-950 px-6 py-10 text-white sm:px-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.16em] text-emerald-300">Komunikasi resmi</p>
                <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">Butuh informasi lebih lanjut?</h2>
                <p class="mt-4 leading-7 text-brand-100">Kunjungi halaman kontak untuk melihat informasi komunikasi yang tersedia. Inisiatif Call Center Pengaduan Santri dan Rumah Aman Digital perlu menggunakan kanal resmi yang telah diverifikasi sebelum dipromosikan sebagai layanan aktif.</p>
            </div>
            <div class="mt-7 shrink-0 lg:mt-0">
                <a href="{{ route('kontak') }}" class="btn btn-accent">Lihat informasi kontak <x-heroicon-o-arrow-right class="size-4" /></a>
            </div>
        </div>
    </div>
</section>
@endsection