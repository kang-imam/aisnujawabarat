@extends('layouts.app')
@section('title', 'Pesantren Aman dan Berdaya | AISNU Jawa Barat')
@section('meta_description', 'Informasi dan gagasan untuk mendorong lingkungan pesantren yang aman, sehat, inklusif, serta mendukung perkembangan santri di Jawa Barat.')
@section('canonical_url', route('pesantren'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20 lg:py-24">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Ekosistem pesantren</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl lg:text-6xl">Pesantren yang aman, santri yang berdaya</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Pesantren merupakan ruang pendidikan, pembentukan karakter, dan kehidupan bersama. Keberhasilan pendidikan perlu berjalan beriringan dengan keselamatan, penghormatan, serta perlindungan setiap santri.</p>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('layanan') }}" class="btn btn-accent">Pelajari perlindungan santri <x-heroicon-o-arrow-right class="size-4" /></a>
            <a href="{{ route('program') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Lihat program</a>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Budaya aman</p>
            <h2 class="section-title">Pendidikan yang bermartabat membutuhkan lingkungan yang melindungi</h2>
            <p class="section-description">Budaya aman tidak cukup dibangun melalui imbauan. Diperlukan keteladanan, aturan yang jelas, mekanisme pengaduan yang dapat diakses, serta respons yang tidak menyalahkan pihak terdampak.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2">
            <article class="card p-6 sm:p-7">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-shield-check class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Pencegahan kekerasan</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Bangun pemahaman bersama mengenai kekerasan fisik, verbal, perundungan, intimidasi, eksploitasi, dan kekerasan seksual. Semua pihak perlu mengetahui batas perilaku yang aman serta langkah mencari bantuan.</p>
            </article>
            <article class="card p-6 sm:p-7">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-user-group class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Peran pengasuh dan pendidik</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Pengasuh, pendidik, pengelola, dan komunitas memiliki peran penting dalam membangun relasi yang sehat, menindaklanjuti risiko, dan mencegah penyalahgunaan kuasa.</p>
            </article>
            <article class="card p-6 sm:p-7">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-chat-bubble-left-right class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Pengaduan yang bertanggung jawab</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Jalur pengaduan harus mudah dipahami, menjaga data secara bertanggung jawab, mengurangi risiko pembalasan, dan memberikan informasi yang jelas mengenai batas serta tahapan penanganan.</p>
            </article>
            <article class="card p-6 sm:p-7">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-sparkles class="size-6" /></div>
                <h3 class="mt-5 text-xl font-bold text-brand-950">Pengembangan potensi santri</h3>
                <p class="mt-3 text-sm leading-7 text-muted">Lingkungan yang mendukung memberi kesempatan bagi santri untuk belajar, mengembangkan keterampilan, berorganisasi, berwirausaha, dan berkontribusi kepada masyarakat.</p>
            </article>
        </div>
    </div>
</section>
<section class="section-space bg-surface">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Langkah bersama</p>
            <h2 class="section-title">Apa yang bisa dilakukan komunitas pesantren?</h2>
        </div>
        <div class="mt-8 space-y-4">
            <div class="flex gap-4 rounded-2xl border border-line bg-white p-5 sm:p-6">
                <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-bold text-brand-800">01</div>
                <div>
                    <h3 class="font-bold text-brand-950">Susun aturan perlindungan yang jelas</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Tetapkan standar perilaku, batas interaksi, tanggung jawab pengelola, dan prosedur tindak lanjut yang diketahui warga pesantren.</p>
                </div>
            </div>
            <div class="flex gap-4 rounded-2xl border border-line bg-white p-5 sm:p-6">
                <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-bold text-brand-800">02</div>
                <div>
                    <h3 class="font-bold text-brand-950">Sediakan jalur untuk menyampaikan kekhawatiran</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Pastikan santri mengetahui kepada siapa mereka dapat berbicara dan bagaimana mencari bantuan jika jalur pertama tidak aman atau tidak dapat diakses.</p>
                </div>
            </div>
            <div class="flex gap-4 rounded-2xl border border-line bg-white p-5 sm:p-6">
                <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-bold text-brand-800">03</div>
                <div>
                    <h3 class="font-bold text-brand-950">Tindak lanjuti dengan menjaga privasi</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Batasi akses pada informasi sensitif, hindari penyebaran identitas, dan libatkan tenaga atau lembaga yang memiliki kompetensi sesuai kebutuhan kasus.</p>
                </div>
            </div>
            <div class="flex gap-4 rounded-2xl border border-line bg-white p-5 sm:p-6">
                <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-bold text-brand-800">04</div>
                <div>
                    <h3 class="font-bold text-brand-950">Evaluasi dan perbaiki sistem secara berkala</h3>
                    <p class="mt-2 text-sm leading-7 text-muted">Tinjau prosedur perlindungan, aksesibilitas pengaduan, kesiapan pendampingan, serta kebutuhan pendidikan dan penguatan kapasitas.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="rounded-3xl bg-brand-950 px-6 py-10 text-white sm:px-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.16em] text-emerald-300">Kolaborasi pesantren</p>
                <h2 class="mt-3 text-2xl font-extrabold sm:text-3xl">Mari dorong pesantren yang aman dan berkemajuan</h2>
                <p class="mt-4 leading-7 text-brand-100">AISNU Jawa Barat membuka ruang komunikasi untuk pertukaran gagasan, penguatan kapasitas, dan penjajakan kolaborasi yang mendukung kehidupan santri.</p>
            </div>
            <div class="mt-7 flex shrink-0 flex-wrap gap-3 lg:mt-0">
                <a href="{{ route('kemitraan') }}" class="btn btn-accent">Jalin kemitraan</a>
                <a href="{{ route('kontak') }}" class="btn border border-white/30 text-white transition hover:bg-white/10">Hubungi kami</a>
            </div>
        </div>
    </div>
</section>
@endsection