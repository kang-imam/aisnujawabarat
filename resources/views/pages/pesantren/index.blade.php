@extends('layouts.app')

@section('title', 'Pesantren AISNU Jawa Barat | Pesantren Aman dan Berdaya')

@section('meta_description', 'Informasi seputar pesantren di Jawa Barat, penguatan lingkungan pesantren yang aman, perlindungan santri, dan kolaborasi untuk mendukung kehidupan pesantren yang bermartabat.')

@section('canonical_url', route('pesantren'))

@section('content')
@include('pages.pesantren.sections.hero')
@include('pages.pesantren.sections.tentang')
@include('pages.pesantren.sections.informasi')
@include('pages.pesantren.sections.ajakan')
@endsection