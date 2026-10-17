
@extends('layouts.error')

@section('title', 'Terlalu Banyak Permintaan (429) | AISNU Jawa Barat')

@section('meta_description', 'Permintaan Anda sedang dibatasi. Tunggu beberapa saat sebelum mencoba kembali mengakses AISNU Jawa Barat.')

@section('code', '429')

@section('heading', 'Terlalu banyak permintaan')

@section('message', 'Anda mengirimkan permintaan terlalu sering dalam waktu singkat. Untuk menjaga kestabilan layanan, akses sementara dibatasi.')

@section('icon')
    <x-heroicon-o-arrow-path class="size-8 sm:size-9" aria-hidden="true" />
@endsection

@section('extra')
    <p>
        Tunggu beberapa saat sebelum mencoba kembali. Hindari memuat ulang
        halaman secara berulang agar layanan dapat kembali diakses dengan normal.
    </p>
@endsection
