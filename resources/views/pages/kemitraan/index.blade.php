@extends('layouts.app')
@section('title', 'Kemitraan dan Kolaborasi | AISNU Jawa Barat')
@section('meta_description', 'Informasi kemitraan AISNU Jawa Barat untuk pesantren, komunitas santri, lembaga pendidikan, organisasi masyarakat, dan mitra kolaborasi.')
@section('canonical_url', route('kemitraan'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Kemitraan dan kolaborasi</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">Bersinergi untuk santri yang aman dan berdaya</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Perubahan yang bermakna membutuhkan kerja bersama. AISNU Jawa Barat membuka ruang dialog dan penjajakan kolaborasi yang sejalan dengan kebutuhan santri dan komunitas pesantren.</p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('kontak') }}" class="btn btn-accent">Mulai komunikasi <x-heroicon-o-arrow-right class="size-4" /></a>
            <a href="{{ route('profil') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Kenali organisasi</a>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Ruang kolaborasi</p>
            <h2 class="section-title">Mitra dengan kepedulian dan tujuan yang sejalan</h2>
            <p class="section-description">Kolaborasi dapat dikembangkan sesuai kebutuhan, kapasitas, dan kesepakatan para pihak dengan memperhatikan transparansi, akuntabilitas, serta kepentingan santri.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-building-library class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Pesantren dan lembaga pendidikan</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Pertukaran pengetahuan, penguatan kapasitas, dan pengembangan gagasan untuk mendukung ekosistem pendidikan yang aman.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-user-group class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Komunitas dan organisasi</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Pengembangan jejaring, kegiatan bersama, dan ruang dialog yang mendorong partisipasi santri serta masyarakat.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-academic-cap class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Akademisi dan tenaga ahli</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Dukungan pengetahuan, riset, edukasi, dan rekomendasi berdasarkan kompetensi serta kebutuhan program.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-heart class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Lembaga perlindungan</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Penjajakan komunikasi dengan pihak kompeten untuk memperkuat pemahaman tentang pencegahan kekerasan dan dukungan bagi pihak terdampak.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-light-bulb class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Pelaku usaha dan dunia kerja</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Peluang pengembangan keterampilan, kewirausahaan, literasi, dan kemandirian ekonomi santri.</p>
            </article>
            <article class="card p-6">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-megaphone class="size-6" /></div>
                <h3 class="mt-5 text-lg font-bold text-brand-950">Media dan publikasi</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Penyebaran informasi yang akurat, edukatif, menghormati privasi, dan tidak mengeksploitasi pengalaman pihak terdampak.</p>
            </article>
        </div>
    </div>
</section>
<section class="section-space bg-surface">
    <div class="container-site grid gap-10 lg:grid-cols-2">
        <div>
            <p class="section-eyebrow">Proses kolaborasi</p>
            <h2 class="section-title">Dari komunikasi menuju kerja bersama</h2>
            <p class="section-description">Setiap bentuk kemitraan perlu dibahas dan disepakati secara terbuka. Pengajuan kerja sama tidak otomatis berarti kemitraan telah disetujui.</p>
        </div>
        <div class="space-y-4">
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">01. Sampaikan gagasan</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Jelaskan identitas lembaga, tujuan, kebutuhan, serta gagasan kerja sama yang ingin didiskusikan.</p>
            </div>
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">02. Diskusikan kesesuaian</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Bahas sasaran, ruang lingkup, kapasitas, tanggung jawab, dan manfaat yang diharapkan oleh masing-masing pihak.</p>
            </div>
            <div class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">03. Sepakati tindak lanjut</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Langkah pelaksanaan, pembagian peran, penggunaan identitas organisasi, dan evaluasi perlu disepakati sebelum kegiatan dijalankan.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="rounded-3xl bg-brand-950 px-6 py-10 text-white sm:px-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.16em] text-emerald-300">Mari berdiskusi</p>
                <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">Punya gagasan untuk dikolaborasikan?</h2>
                <p class="mt-4 leading-7 text-brand-100">Hubungi AISNU Jawa Barat melalui informasi kontak resmi yang tersedia untuk memulai percakapan tentang peluang kerja sama.</p>
            </div>
            <div class="mt-7 shrink-0 lg:mt-0"><a href="{{ route('kontak') }}" class="btn btn-accent">Kunjungi halaman kontak <x-heroicon-o-arrow-right class="size-4" /></a></div>
        </div>
    </div>
</section>
@endsection