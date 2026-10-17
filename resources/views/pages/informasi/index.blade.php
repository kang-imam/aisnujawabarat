@extends('layouts.app')

@section('title', 'Informasi AISNU Jawa Barat')

@section('meta_description', 'Pusat informasi AISNU Jawa Barat tentang perlindungan santri, kehidupan pesantren, program organisasi, dan pengembangan kapasitas santri.')

@section('canonical_url', route('informasi'))

@section('content')
@include('pages.informasi.sections.hero')

@include('pages.informasi.sections.topik')

@include('pages.informasi.sections.terbaru')
@endsection