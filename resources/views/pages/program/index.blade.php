@extends('layouts.app')
@section('title', 'Program AISNU Jawa Barat')
@section('meta_description', 'Kenali arah program AISNU Jawa Barat dalam perlindungan santri, penguatan kapasitas, konsolidasi, dan pemberdayaan.')
@section('canonical_url', route('program'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Program dan gerakan</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">Program yang berangkat dari kebutuhan santri</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Mengembangkan ruang belajar, perlindungan, konsolidasi, dan pemberdayaan agar santri dapat berpartisipasi serta bertumbuh dengan aman dan bermartabat.</p>
        <div class="mt-8 flex flex-wrap gap-3"><a href="{{ route('kontak') }}" class="btn btn-accent">Diskusikan kolaborasi <x-heroicon-o-arrow-right class="size-4" /></a><a href="{{ route('kemitraan') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Informasi kemitraan</a></div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Fokus program</p>
            <h2 class="section-title">Empat arah penguatan ekosistem santri</h2>
            <p class="section-description">Bidang berikut merupakan arah program yang dapat dikembangkan sesuai kebutuhan, sumber daya, dan agenda resmi organisasi.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2">
            <article class="card p-6 sm:p-8">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-shield-check class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Perlindungan santri</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mendorong edukasi pencegahan kekerasan, pemahaman hak santri, lingkungan pendidikan yang aman, dan penguatan jalur rujukan yang bertanggung jawab.</p><a href="{{ route('layanan') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Pelajari perlindungan <x-heroicon-o-arrow-right class="size-4" /></a>
            </article>
            <article class="card p-6 sm:p-8">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-user-group class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Konsolidasi dan partisipasi santri</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Membuka ruang dialog, pertukaran aspirasi, penguatan jejaring, dan perumusan agenda bersama yang melibatkan santri serta komunitas pesantren.</p><a href="{{ route('kontak') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Hubungi organisasi <x-heroicon-o-arrow-right class="size-4" /></a>
            </article>
            <article class="card p-6 sm:p-8">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-academic-cap class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Literasi dan pengembangan kapasitas</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mendukung pengetahuan, keterampilan, literasi digital, komunikasi, dan kapasitas kepemimpinan yang berguna bagi kehidupan santri.</p><a href="{{ route('informasi') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Jelajahi informasi <x-heroicon-o-arrow-right class="size-4" /></a>
            </article>
            <article class="card p-6 sm:p-8">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-light-bulb class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Kewirausahaan dan kemandirian</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mendorong pengembangan ide, keterampilan usaha, inovasi, dan jejaring ekonomi yang mendukung kemandirian santri.</p><a href="{{ route('santripreneur') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Kenali santripreneur <x-heroicon-o-arrow-right class="size-4" /></a>
            </article>
        </div>
    </div>
</section>
<section class="section-space bg-surface">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Pengembangan program</p>
            <h2 class="section-title">Program yang baik perlu tujuan dan tindak lanjut yang jelas</h2>
            <p class="section-description">Setiap kegiatan sebaiknya memiliki sasaran, penanggung jawab, sumber daya, mekanisme evaluasi, dan standar perlindungan peserta yang sesuai.</p>
        </div>
        <div class="mt-8 grid gap-5 md:grid-cols-3">
            <article class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Berangkat dari kebutuhan</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Dengarkan aspirasi santri dan komunitas untuk memahami tantangan serta prioritas.</p>
            </article>
            <article class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Dilaksanakan secara bertanggung jawab</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Pastikan pembagian peran, kesiapan sumber daya, aksesibilitas, dan keselamatan peserta.</p>
            </article>
            <article class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Dievaluasi secara berkala</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Gunakan pembelajaran dan umpan balik untuk memperbaiki kualitas serta keberlanjutan program.</p>
            </article>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="rounded-3xl bg-brand-950 px-6 py-10 text-white sm:px-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.16em] text-emerald-300">Bertumbuh bersama</p>
                <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">Punya usulan kegiatan atau program?</h2>
                <p class="mt-4 leading-7 text-brand-100">Hubungi AISNU Jawa Barat untuk menyampaikan gagasan dan mendiskusikan kemungkinan kolaborasi.</p>
            </div>
            <div class="mt-7 shrink-0 lg:mt-0"><a href="{{ route('kontak') }}" class="btn btn-accent">Sampaikan gagasan <x-heroicon-o-arrow-right class="size-4" /></a></div>
        </div>
    </div>
</section>
@endsection