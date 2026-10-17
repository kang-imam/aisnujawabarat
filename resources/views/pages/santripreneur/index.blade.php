@extends('layouts.app')

@section('title', 'Santripreneur AISNU Jawa Barat | Kewirausahaan Santri')

@section('meta_description', 'Informasi Santripreneur AISNU Jawa Barat untuk mendukung pengembangan keterampilan, kreativitas, kewirausahaan, kemandirian ekonomi, dan kolaborasi usaha bagi santri.')

@section('canonical_url', route('santripreneur'))

@section('content')
@include('pages.santripreneur.sections.hero')
@include('pages.santripreneur.sections.tentang')
@include('pages.santripreneur.sections.program')
@include('pages.santripreneur.sections.ajakan')
@endsection