
@extends('layouts.error')

@section('title', 'Halaman Tidak Ditemukan (404) | AISNU Jawa Barat')

@section('meta_description', 'Halaman yang Anda cari tidak ditemukan. Kunjungi beranda AISNU Jawa Barat untuk menemukan informasi lainnya.')

@section('code', '404')

@section('heading', 'Halaman tidak ditemukan')

@section('message', 'Maaf, halaman yang Anda cari mungkin telah dipindahkan, dihapus, atau alamat yang Anda masukkan tidak tepat.')

@section('icon')
    <x-heroicon-o-magnifying-glass class="size-8 sm:size-9" aria-hidden="true" />
@endsection

@section('extra')
    <p>
        Periksa kembali alamat halaman atau kembali ke beranda untuk
        menemukan berita, informasi, dan kegiatan AISNU Jawa Barat.
    </p>
@endsection
