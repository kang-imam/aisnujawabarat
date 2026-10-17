@extends('layouts.app')

@section('title', 'Kemitraan AISNU Jawa Barat | Kolaborasi dan Sinergi')

@section('meta_description', 'Jelajahi peluang kemitraan dengan AISNU Jawa Barat untuk mendukung perlindungan santri, penguatan pesantren, edukasi, dan pengembangan kapasitas melalui kolaborasi.')

@section('canonical_url', route('kemitraan'))

@section('content')
@include('pages.kemitraan.sections.hero')
@include('pages.kemitraan.sections.peluang')
@include('pages.kemitraan.sections.kolaborasi')
@include('pages.kemitraan.sections.ajakan')
@endsection