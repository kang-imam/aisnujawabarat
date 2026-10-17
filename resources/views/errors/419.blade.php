
@extends('layouts.error')

@section('title', 'Sesi Kedaluwarsa (419) | AISNU Jawa Barat')

@section('meta_description', 'Sesi Anda telah berakhir. Muat ulang halaman AISNU Jawa Barat dan coba kembali.')

@section('code', '419')

@section('heading', 'Sesi Anda telah berakhir')

@section('message', 'Halaman ini sudah tidak memiliki sesi yang valid. Hal tersebut dapat terjadi jika halaman dibiarkan terbuka terlalu lama atau sesi Anda telah berakhir.')

@section('icon')
    <x-heroicon-o-clock class="size-8 sm:size-9" aria-hidden="true" />
@endsection

@section('extra')
    <p>
        Silakan kembali ke halaman sebelumnya, muat ulang halaman, lalu
        kirim kembali formulir jika diperlukan. Jika masalah berlanjut,
        coba masuk kembali ke akun Anda.
    </p>
@endsection
