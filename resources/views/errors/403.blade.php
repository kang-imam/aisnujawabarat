
@extends('layouts.error')

@section('title', 'Akses Ditolak (403) | AISNU Jawa Barat')

@section('meta_description', 'Anda tidak memiliki izin untuk mengakses halaman ini di website AISNU Jawa Barat.')

@section('code', '403')

@section('heading', 'Akses tidak diizinkan')

@section('message', 'Maaf, Anda tidak memiliki izin untuk mengakses halaman ini. Jika merasa seharusnya memiliki akses, silakan hubungi administrator website.')

@section('icon')
    <x-heroicon-o-shield-exclamation class="size-8 sm:size-9" aria-hidden="true" />
@endsection

@section('extra')
    <p>
        Anda dapat kembali ke beranda atau masuk menggunakan akun yang
        memiliki izin sesuai dengan halaman yang ingin diakses.
    </p>
@endsection
