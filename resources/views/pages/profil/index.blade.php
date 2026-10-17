@extends('layouts.app')
@section('title', 'Profil AISNU Jawa Barat')
@section('meta_description', 'Kenali AISNU Jawa Barat, peran organisasi, nilai perjuangan, dan komitmen dalam mendukung santri yang aman, berdaya, dan berkemajuan.')
@section('canonical_url', route('profil'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Tentang organisasi</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">Membangun ruang aman dan masa depan santri Jawa Barat</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">AISNU Jawa Barat hadir sebagai bagian dari ikhtiar membangun ekosistem santri yang berdaya, terlindungi, berpengetahuan, dan mampu berkontribusi bagi masyarakat.</p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('informasi') }}" class="btn btn-accent">Jelajahi informasi <x-heroicon-o-arrow-right class="size-4" /></a>
            <a href="{{ route('kontak') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Hubungi kami</a>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Mengenal AISNU Jawa Barat</p>
            <h2 class="section-title">Organisasi yang tumbuh bersama kebutuhan santri</h2>
            <p class="section-description">Santri memiliki peran penting dalam kehidupan keagamaan, pendidikan, sosial, dan pembangunan masyarakat. Peran tersebut perlu didukung oleh lingkungan belajar yang aman, kesempatan berkembang, akses informasi yang baik, serta mekanisme perlindungan yang berpihak pada martabat manusia.</p>
            <p class="mt-5 leading-8 text-muted">Melalui informasi, program, kemitraan, dan penguatan jejaring, AISNU Jawa Barat berupaya mendorong partisipasi santri serta membangun perhatian bersama terhadap isu-isu yang memengaruhi kehidupan mereka.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-3">
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-shield-check class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Perlindungan santri</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mendorong lingkungan pendidikan yang aman, penghormatan terhadap martabat santri, dan perhatian serius terhadap kekerasan di lingkungan pendidikan.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-academic-cap class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Penguatan kapasitas</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Mendukung akses pengetahuan, pengembangan keterampilan, jejaring, dan partisipasi santri dalam kehidupan sosial.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-user-group class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Kolaborasi</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Membuka ruang komunikasi dan kerja sama dengan pesantren, komunitas, lembaga, serta pihak lain yang memiliki tujuan sejalan.</p>
            </article>
        </div>
    </div>
</section>
<section class="section-space bg-surface">
    <div class="container-site grid gap-10 lg:grid-cols-2 lg:items-center">
        <div>
            <p class="section-eyebrow">Arah gerakan</p>
            <h2 class="section-title">Santri aman, berdaya, dan berkontribusi</h2>
            <p class="section-description">Kami meyakini bahwa kemajuan santri perlu berjalan beriringan dengan perlindungan hak, akses pendidikan, penguatan karakter, dan kesempatan untuk berkembang.</p>
        </div>
        <div class="space-y-4">
            <div class="flex gap-4 rounded-2xl border border-line bg-white p-5">
                <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700"><x-heroicon-o-check-circle class="size-5" /></div>
                <div>
                    <h3 class="font-bold text-brand-950">Mengutamakan martabat manusia</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Setiap santri berhak diperlakukan dengan hormat dan bebas dari kekerasan serta diskriminasi.</p>
                </div>
            </div>
            <div class="flex gap-4 rounded-2xl border border-line bg-white p-5">
                <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700"><x-heroicon-o-check-circle class="size-5" /></div>
                <div>
                    <h3 class="font-bold text-brand-950">Mendorong kepedulian bersama</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Perlindungan santri memerlukan kepedulian, prosedur yang bertanggung jawab, dan kolaborasi berbagai pihak.</p>
                </div>
            </div>
            <div class="flex gap-4 rounded-2xl border border-line bg-white p-5">
                <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700"><x-heroicon-o-check-circle class="size-5" /></div>
                <div>
                    <h3 class="font-bold text-brand-950">Membuka akses informasi</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Informasi yang jelas membantu santri, keluarga, dan masyarakat menemukan pengetahuan serta jalur komunikasi yang tepat.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="rounded-3xl bg-brand-950 px-6 py-10 text-white sm:px-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.16em] text-emerald-300">Bergerak bersama</p>
                <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">Mari bangun ekosistem santri yang lebih aman dan berdaya</h2>
                <p class="mt-4 leading-7 text-brand-100">Kenali program kami, ikuti informasi terbaru, atau hubungi AISNU Jawa Barat untuk membuka komunikasi dan peluang kolaborasi.</p>
            </div>
            <div class="mt-7 flex shrink-0 flex-wrap gap-3 lg:mt-0">
                <a href="{{ route('program') }}" class="btn btn-accent">Lihat program</a>
                <a href="{{ route('kemitraan') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Jalin kemitraan</a>
            </div>
        </div>
    </div>
</section>
@endsection