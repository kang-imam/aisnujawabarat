@extends('layouts.app')
@section('title', 'Kebijakan dan Ketentuan | AISNU Jawa Barat')
@section('meta_description', 'Informasi mengenai privasi, penggunaan konten, keamanan informasi, dan ketentuan penggunaan website AISNU Jawa Barat.')
@section('canonical_url', route('legal'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Transparansi website</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">Kebijakan dan ketentuan penggunaan</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Informasi dasar mengenai penggunaan website, privasi pengunjung, dan tanggung jawab dalam mengakses serta membagikan konten.</p>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Panduan pengguna</p>
            <h2 class="section-title">Menggunakan website secara bertanggung jawab</h2>
            <p class="section-description">Ketentuan berikut merupakan informasi umum bagi pengunjung website AISNU Jawa Barat. Kebijakan ini perlu ditinjau dan disesuaikan dengan praktik pengelolaan data, teknologi, dan prosedur resmi yang benar-benar diterapkan oleh pengelola.</p>
        </div>
        <div class="mt-10 grid gap-6 lg:grid-cols-[260px_minmax(0,1fr)]">
            <nav aria-label="Daftar kebijakan" class="card h-fit p-5">
                <p class="font-bold text-brand-950">Daftar kebijakan</p>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><a href="#penggunaan" class="font-medium text-brand-700 transition hover:text-brand-900">Penggunaan website</a></li>
                    <li><a href="#privasi" class="font-medium text-brand-700 transition hover:text-brand-900">Privasi dan data</a></li>
                    <li><a href="#konten" class="font-medium text-brand-700 transition hover:text-brand-900">Konten dan hak cipta</a></li>
                    <li><a href="#keamanan" class="font-medium text-brand-700 transition hover:text-brand-900">Keamanan dan pengaduan</a></li>
                    <li><a href="#kontak" class="font-medium text-brand-700 transition hover:text-brand-900">Pertanyaan kebijakan</a></li>
                </ul>
            </nav>
            <div class="space-y-6">
                <article id="penggunaan" class="card scroll-mt-24 p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-brand-950">1. Penggunaan website</h2>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-muted">
                        <p>Pengunjung diharapkan menggunakan website secara sah, tidak mengganggu ketersediaan layanan, dan tidak melakukan tindakan yang merugikan pengguna lain atau pengelola.</p>
                        <p>Informasi yang tersedia ditujukan untuk membantu pengunjung mengenal organisasi, program, publikasi, dan informasi terkait santri. Informasi di website tidak otomatis menggantikan nasihat profesional atau layanan darurat.</p>
                    </div>
                </article>
                <article id="privasi" class="card scroll-mt-24 p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-brand-950">2. Privasi dan data pribadi</h2>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-muted">
                        <p>Pengunjung sebaiknya tidak mengirimkan data pribadi yang tidak diperlukan melalui kanal komunikasi umum. Data seperti identitas lengkap, alamat rumah, informasi kesehatan, dan detail pengalaman kekerasan perlu ditangani dengan kehati-hatian khusus.</p>
                        <p>Pengelola website perlu menjelaskan secara transparan data apa yang dikumpulkan, tujuan dan dasar pemrosesannya, pihak yang dapat mengaksesnya, masa penyimpanan, serta cara mengajukan permintaan terkait data pribadi.</p>
                        <p>Jangan menganggap suatu formulir atau kanal komunikasi bersifat anonim atau rahasia sepenuhnya sebelum mekanisme perlindungannya dijelaskan oleh pengelola.</p>
                    </div>
                </article>
                <article id="konten" class="card scroll-mt-24 p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-brand-950">3. Konten dan hak cipta</h2>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-muted">
                        <p>Konten yang diterbitkan pada website perlu digunakan dengan menghormati hak cipta, atribusi sumber, dan ketentuan hukum yang berlaku.</p>
                        <p>Penggunaan kembali foto, tulisan, logo, atau materi pihak lain harus memperhatikan izin dan hak pemiliknya. Identitas dan kisah pribadi santri, khususnya anak atau penyintas kekerasan, tidak boleh disebarluaskan tanpa dasar dan persetujuan yang sesuai.</p>
                    </div>
                </article>
                <article id="keamanan" class="card scroll-mt-24 p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-brand-950">4. Keamanan informasi dan pengaduan</h2>
                    <div class="mt-4 space-y-3 text-sm leading-7 text-muted">
                        <p>Informasi mengenai dugaan kekerasan perlu disampaikan dan ditangani dengan mengutamakan keselamatan, privasi, persetujuan, serta pencegahan tindakan yang dapat membahayakan pelapor atau pihak terdampak.</p>
                        <p>Jangan memublikasikan identitas, alamat, tangkapan layar percakapan pribadi, atau bukti sensitif di ruang publik. Gunakan jalur bantuan yang dapat diverifikasi dan jangan menjanjikan kerahasiaan mutlak jika mekanisme penanganannya belum jelas.</p>
                        <p>Apabila seseorang berada dalam bahaya langsung, prioritaskan keselamatan dan hubungi layanan darurat atau pihak berwenang yang relevan.</p>
                    </div>
                </article>
                <article id="kontak" class="card scroll-mt-24 p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-brand-950">5. Pertanyaan dan pembaruan kebijakan</h2>
                    <p class="mt-4 text-sm leading-7 text-muted">Untuk menyampaikan pertanyaan mengenai website atau kebijakan ini, silakan mengunjungi halaman kontak AISNU Jawa Barat. Kebijakan final sebaiknya mencantumkan identitas pengelola, tanggal berlaku, tanggal pembaruan, serta informasi kontak yang resmi dan aktif.</p>
                    <a href="{{ route('kontak') }}" class="btn btn-outline mt-5">Kunjungi halaman kontak <x-heroicon-o-arrow-right class="size-4" /></a>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection