
@extends('layouts.app')

@section('title', 'Profil AISNU Jawa Barat | Tentang Organisasi')

@section('meta_description', 'Kenali AISNU Jawa Barat, peran organisasi, nilai-nilai yang menjadi landasan gerakan, dan komitmen dalam mendukung perlindungan santri serta lingkungan pesantren yang aman.')

@section('canonical_url', route('profil'))

@section('content')
    @include('pages.profil.sections.hero')
    @include('pages.profil.sections.tentang')
    @include('pages.profil.sections.nilai')
    @include('pages.profil.sections.komitmen')
@endsection
