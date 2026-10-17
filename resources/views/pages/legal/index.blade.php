@extends('layouts.app')

@section('title', 'Informasi Legal | AISNU Jawa Barat')

@section('meta_description', 'Informasi legal situs AISNU Jawa Barat yang mencakup kebijakan privasi, ketentuan penggunaan, hak cipta, dan penggunaan informasi pada situs.')

@section('canonical_url', route('legal'))

@section('content')

{{-- Hero --}}
<section class="relative overflow-hidden border-b border-line bg-canvas">
    <div aria-hidden="true" class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full border border-brand-200/60"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -right-8 -top-8 h-44 w-44 rounded-full border border-accent/30"></div>

    <div class="container-site relative py-16 sm:py-20 lg:py-24">
        <div class="max-w-3xl">
            <span class="section-eyebrow">
                <x-heroicon-o-scale class="h-4 w-4" />
                Informasi Legal
            </span>

            <h1 class="mt-5 text-4xl font-bold leading-tight tracking-tight text-ink sm:text-5xl lg:text-6xl">
                Transparansi dan
                <span class="text-brand-700">Kepercayaan.</span>
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-muted sm:text-lg">
                Pelajari ketentuan penggunaan situs, perlindungan privasi,
                hak cipta, dan prinsip penggunaan informasi yang tersedia
                di situs AISNU Jawa Barat.
            </p>
        </div>
    </div>
</section>

{{-- Pengantar --}}
<section class="section-space bg-surface">
    <div class="container-site">
        <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-start lg:gap-16">
            <div>
                <span class="section-eyebrow">Tentang Halaman Ini</span>

                <h2 class="section-title mt-4">
                    Informasi yang Jelas bagi Setiap Pengunjung.
                </h2>
            </div>

            <div class="space-y-4 text-sm leading-7 text-muted sm:text-base sm:leading-8">
                <p>
                    Halaman ini disediakan untuk membantu pengunjung memahami
                    ketentuan dan prinsip umum yang berkaitan dengan penggunaan
                    situs AISNU Jawa Barat.
                </p>

                <p>
                    Kebijakan dan ketentuan yang ditampilkan perlu disesuaikan
                    dengan praktik pengelolaan situs, jenis data yang diproses,
                    serta ketentuan hukum yang berlaku.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Navigasi legal --}}
<section class="section-space bg-canvas">
    <div class="container-site">
        <div class="section-heading">
            <span class="section-eyebrow">Dokumen dan Ketentuan</span>

            <h2 class="section-title mt-3">
                Informasi yang Perlu Anda Ketahui.
            </h2>

            <p class="section-description">
                Pilih topik berikut untuk membaca informasi yang berkaitan
                dengan penggunaan situs.
            </p>
        </div>

        <div class="mt-10 grid gap-5 md:grid-cols-2">

            {{-- Privasi --}}
            <article id="privasi" class="card scroll-mt-24 p-6 sm:p-8">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-lock-closed class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-xl font-bold text-ink">
                    Kebijakan Privasi
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Kebijakan privasi menjelaskan bagaimana informasi
                    pengunjung dikumpulkan, digunakan, disimpan, dan
                    dilindungi ketika menggunakan situs.
                </p>

                <ul class="mt-5 space-y-3 text-sm leading-6 text-muted">
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Jenis informasi yang diproses.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Tujuan penggunaan dan penyimpanan informasi.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Cara menghubungi pengelola terkait privasi.
                    </li>
                </ul>

                <p class="mt-5 border-t border-line pt-4 text-xs leading-5 text-muted">
                    Isi kebijakan perlu dilengkapi sesuai praktik pengelolaan
                    data yang benar-benar diterapkan.
                </p>
            </article>

            {{-- Ketentuan penggunaan --}}
            <article id="ketentuan" class="card scroll-mt-24 p-6 sm:p-8">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-document-check class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-xl font-bold text-ink">
                    Ketentuan Penggunaan
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Ketentuan penggunaan memberikan panduan umum bagi
                    pengunjung saat mengakses, membaca, dan memanfaatkan
                    konten yang tersedia di situs.
                </p>

                <ul class="mt-5 space-y-3 text-sm leading-6 text-muted">
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Penggunaan informasi secara bertanggung jawab.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Larangan penyalahgunaan situs dan konten.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Ketentuan mengenai tautan ke situs lain.
                    </li>
                </ul>

                <p class="mt-5 border-t border-line pt-4 text-xs leading-5 text-muted">
                    Ketentuan final perlu ditinjau dan disetujui oleh
                    pihak yang berwenang.
                </p>
            </article>

            {{-- Hak cipta --}}
            <article id="hak-cipta" class="card scroll-mt-24 p-6 sm:p-8">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-document-text class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-xl font-bold text-ink">
                    Hak Cipta dan Penggunaan Konten
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Konten berupa tulisan, foto, ilustrasi, dokumen,
                    logo, dan materi lainnya dapat memiliki hak penggunaan
                    yang berbeda sesuai pemilik dan sumbernya.
                </p>

                <ul class="mt-5 space-y-3 text-sm leading-6 text-muted">
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Perhatikan atribusi dan sumber konten.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Minta izin jika penggunaan ulang mensyaratkannya.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Hormati hak pemilik materi pihak ketiga.
                    </li>
                </ul>
            </article>

            {{-- Informasi dan tanggung jawab --}}
            <article id="informasi" class="card scroll-mt-24 p-6 sm:p-8">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                    <x-heroicon-o-information-circle class="h-6 w-6" />
                </span>

                <h3 class="mt-5 text-xl font-bold text-ink">
                    Akurasi Informasi
                </h3>

                <p class="mt-3 text-sm leading-7 text-muted">
                    Informasi di situs disediakan untuk membantu pengunjung
                    memperoleh pengetahuan dan memahami kegiatan maupun
                    layanan yang dipublikasikan.
                </p>

                <ul class="mt-5 space-y-3 text-sm leading-6 text-muted">
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Periksa tanggal dan konteks informasi.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Konfirmasikan informasi penting kepada pihak terkait.
                    </li>
                    <li class="flex items-start gap-3">
                        <x-heroicon-o-check-circle class="mt-0.5 h-5 w-5 shrink-0 text-brand-700" />
                        Sampaikan koreksi melalui saluran kontak yang tersedia.
                    </li>
                </ul>
            </article>

        </div>
    </div>
</section>

{{-- Prinsip penggunaan --}}
<section class="section-space bg-surface">
    <div class="container-site">
        <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_minmax(0,0.8fr)] lg:items-center lg:gap-14">
            <div>
                <span class="section-eyebrow">Komitmen Pengelolaan</span>

                <h2 class="section-title mt-4">
                    Mengutamakan Privasi, Keamanan, dan Tanggung Jawab.
                </h2>

                <p class="mt-5 text-sm leading-7 text-muted sm:text-base sm:leading-8">
                    Pengelolaan situs perlu memperhatikan keamanan informasi,
                    penghormatan terhadap hak pengguna, dan penggunaan konten
                    secara bertanggung jawab. Penerapan prinsip tersebut
                    harus sesuai dengan kebijakan dan prosedur yang benar-benar
                    berlaku di AISNU Jawa Barat.
                </p>
            </div>

            <div class="rounded-2xl border border-line bg-canvas p-6 sm:p-8">
                <div class="flex items-start gap-4">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-shield-check class="h-5 w-5" />
                    </span>

                    <div>
                        <h3 class="font-bold text-ink">
                            Gunakan Informasi dengan Bijak
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-muted">
                            Hormati privasi individu, hindari membagikan
                            data pribadi tanpa dasar yang tepat, dan
                            gunakan informasi sesuai tujuan yang semestinya.
                        </p>
                    </div>
                </div>

                <div class="my-6 border-t border-line"></div>

                <div class="flex items-start gap-4">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-700 dark:bg-brand-100 dark:text-brand-900">
                        <x-heroicon-o-chat-bubble-left-right class="h-5 w-5" />
                    </span>

                    <div>
                        <h3 class="font-bold text-ink">
                            Sampaikan Pertanyaan atau Koreksi
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-muted">
                            Jika menemukan informasi yang perlu diperjelas,
                            hubungi pengelola melalui halaman kontak situs.
                        </p>

                        <a href="{{ route('kontak') }}" class="mt-4 inline-flex items-center gap-2 font-bold text-brand-700 transition-colors hover:text-brand-900 dark:text-brand-700 dark:hover:text-brand-900">
                            Buka halaman kontak
                            <x-heroicon-o-arrow-up-right class="h-4 w-4" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Penutup --}}
<section class="section-space bg-canvas">
    <div class="container-site">
        <div class="rounded-3xl border border-line bg-surface p-6 shadow-card sm:p-9 lg:p-12">
            <div class="mx-auto max-w-3xl text-center">
                <span class="section-eyebrow">
                    <x-heroicon-o-scale class="h-4 w-4" />
                    Transparansi dan Akuntabilitas
                </span>

                <h2 class="mt-4 text-2xl font-bold leading-tight tracking-tight text-ink sm:text-3xl lg:text-4xl">
                    Ada Pertanyaan Mengenai Ketentuan Situs?
                </h2>

                <p class="mt-4 text-sm leading-7 text-muted sm:text-base sm:leading-8">
                    Silakan hubungi AISNU Jawa Barat untuk menyampaikan
                    pertanyaan atau meminta klarifikasi mengenai informasi
                    yang tersedia di situs.
                </p>

                <div class="mt-7 flex flex-col justify-center gap-3 sm:flex-row">
                    <a href="{{ route('kontak') }}" class="btn btn-primary">
                        <x-heroicon-o-chat-bubble-left-right class="h-5 w-5" />
                        Hubungi Kami
                    </a>

                    <a href="{{ route('beranda') }}" class="btn btn-outline">
                        <x-heroicon-o-home class="h-5 w-5" />
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection