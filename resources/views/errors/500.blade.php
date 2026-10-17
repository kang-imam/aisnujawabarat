
@extends('layouts.error')

@section('title', 'Kesalahan Server (500) | AISNU Jawa Barat')

@section('meta_description', 'Terjadi gangguan internal pada server AISNU Jawa Barat. Silakan coba kembali beberapa saat lagi.')

@section('code', '500')

@section('heading', 'Terjadi gangguan pada server')

@section('message', 'Maaf, server sedang mengalami kendala sehingga halaman ini belum dapat ditampilkan. Tim kami perlu memeriksa masalah tersebut.')

@section('icon')
    <x-heroicon-o-server-stack class="size-8 sm:size-9" aria-hidden="true" />
@endsection

@section('extra')
    <p>
        Silakan coba kembali beberapa saat lagi. Jika masalah terus terjadi,
        hubungi pengelola website dan sertakan waktu kejadian agar kendala
        lebih mudah ditelusuri.
    </p>
@endsection
