@extends('layouts.app')
@section('title', 'Kontak AISNU Jawa Barat')
@section('meta_description', 'Halaman kontak AISNU Jawa Barat untuk pertanyaan umum, komunikasi organisasi, aspirasi, dan penjajakan kemitraan.')
@section('canonical_url', route('kontak'))
@section('content')
<section class="bg-brand-950 text-white">
    <div class="container-site py-16 sm:py-20">
        <p class="text-sm font-bold uppercase tracking-[0.18em] text-emerald-300">Hubungi kami</p>
        <h1 class="mt-4 max-w-4xl text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">Mari membuka komunikasi dan kolaborasi</h1>
        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-100 sm:text-lg">Halaman ini menjadi titik awal untuk pertanyaan umum, komunikasi organisasi, penyampaian aspirasi, dan penjajakan kerja sama dengan AISNU Jawa Barat.</p>
    </div>
</section>
<section class="section-space">
    <div class="container-site">
        <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_minmax(320px,0.8fr)]">
            <div>
                <p class="section-eyebrow">Kanal komunikasi</p>
                <h2 class="section-title">Pilih kebutuhan komunikasi kamu</h2>
                <p class="section-description">Gunakan jalur komunikasi yang sesuai dengan tujuanmu. Pastikan informasi kontak yang dipublikasikan oleh organisasi merupakan informasi resmi dan masih aktif.</p>
                <div class="mt-8 space-y-4">
                    <article class="card flex gap-4 p-5">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-chat-bubble-left-right class="size-6" /></div>
                        <div>
                            <h3 class="font-bold text-brand-950">Pertanyaan umum</h3>
                            <p class="mt-2 text-sm leading-7 text-muted">Untuk pertanyaan mengenai organisasi, informasi website, kegiatan, dan publikasi.</p>
                        </div>
                    </article>
                    <article class="card flex gap-4 p-5">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-user-group class="size-6" /></div>
                        <div>
                            <h3 class="font-bold text-brand-950">Kemitraan dan kolaborasi</h3>
                            <p class="mt-2 text-sm leading-7 text-muted">Untuk pesantren, komunitas, lembaga pendidikan, organisasi, dan calon mitra yang ingin berdiskusi.</p><a href="{{ route('kemitraan') }}" class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Informasi kemitraan <x-heroicon-o-arrow-right class="size-4" /></a>
                        </div>
                    </article>
                    <article class="card flex gap-4 p-5">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-2xl bg-brand-50 text-brand-700"><x-heroicon-o-shield-check class="size-6" /></div>
                        <div>
                            <h3 class="font-bold text-brand-950">Informasi perlindungan santri</h3>
                            <p class="mt-2 text-sm leading-7 text-muted">Untuk mencari informasi mengenai pencegahan kekerasan dan prinsip perlindungan santri, kunjungi halaman layanan.</p><a href="{{ route('layanan') }}" class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900">Lihat informasi layanan <x-heroicon-o-arrow-right class="size-4" /></a>
                        </div>
                    </article>
                </div>
            </div>
            <aside class="h-fit rounded-3xl border border-line bg-surface p-6 sm:p-8">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-white text-brand-700 shadow-sm"><x-heroicon-o-information-circle class="size-6" /></div>
                <h2 class="mt-5 text-xl font-bold text-brand-950">Informasi sebelum menghubungi</h2>
                <p class="mt-3 text-sm leading-7 text-muted">Informasi nomor telepon, alamat kantor, email, dan akun media sosial sebaiknya ditampilkan setelah diverifikasi oleh pengelola agar pengunjung tidak diarahkan ke kontak yang keliru.</p>
                <div class="mt-6 rounded-2xl border border-line bg-white p-5">
                    <h3 class="font-bold text-brand-950">Mengenai pengaduan kekerasan</h3>
                    <p class="mt-3 text-sm leading-7 text-muted">Jangan mengirimkan rincian sensitif melalui kanal umum sebelum mengetahui siapa yang mengelola kanal tersebut dan bagaimana informasi akan ditangani.</p>
                    <p class="mt-3 text-sm leading-7 text-muted">Jika kamu atau orang lain berada dalam bahaya langsung, prioritaskan keselamatan dan hubungi layanan darurat atau pihak berwenang yang relevan.</p>
                </div>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('profil') }}" class="btn btn-primary">Profil organisasi</a>
                    <a href="{{ route('informasi') }}" class="btn btn-outline">Pusat informasi</a>
                </div>
            </aside>
        </div>
    </div>
</section>
<section class="section-space bg-surface">
    <div class="container-site">
        <div class="max-w-3xl">
            <p class="section-eyebrow">Komunikasi yang aman</p>
            <h2 class="section-title">Jaga privasi saat menyampaikan informasi</h2>
            <p class="section-description">Bagikan informasi seperlunya. Hindari mengirimkan kata sandi, data identitas lengkap, dokumen pribadi, foto intim, atau bukti sensitif melalui kanal yang belum terverifikasi.</p>
        </div>
        <div class="mt-8 grid gap-5 md:grid-cols-3">
            <article class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Periksa penerima</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Pastikan kanal komunikasi benar-benar milik pihak yang ingin kamu hubungi.</p>
            </article>
            <article class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Bagikan seperlunya</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Sampaikan tujuan komunikasi tanpa membuka data pribadi yang tidak diperlukan.</p>
            </article>
            <article class="rounded-2xl border border-line bg-white p-5">
                <h3 class="font-bold text-brand-950">Utamakan keselamatan</h3>
                <p class="mt-2 text-sm leading-7 text-muted">Jika komunikasi dapat meningkatkan risiko bagi kamu atau pihak lain, cari dukungan melalui jalur yang lebih aman.</p>
            </article>
        </div>
    </div>
</section>
@endsection