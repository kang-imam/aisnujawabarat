@extends('layouts.app')

@section('title', 'Layanan AISNU Jawa Barat | Informasi dan Perlindungan Santri')

@section('meta_description', 'Informasi layanan AISNU Jawa Barat terkait perlindungan santri, pendampingan informasi, pengaduan, dan dukungan untuk mewujudkan lingkungan pesantren yang aman.')

@section('canonical_url', route('layanan'))

@section('content')
@include('pages.layanan.sections.hero')
@include('pages.layanan.sections.daftar')
@include('pages.layanan.sections.alur')
@include('pages.layanan.sections.ajakan')
@endsection