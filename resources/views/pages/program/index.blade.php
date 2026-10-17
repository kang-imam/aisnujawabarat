@extends('layouts.app')

@section('title', 'Program AISNU Jawa Barat | Perlindungan dan Pengembangan Santri')

@section('meta_description', 'Informasi program dan bidang kegiatan AISNU Jawa Barat yang mendukung perlindungan santri, penguatan lingkungan pesantren, edukasi, kolaborasi, dan pengembangan kapasitas.')

@section('canonical_url', route('program'))

@section('content')
@include('pages.program.sections.hero')
@include('pages.program.sections.unggulan')
@include('pages.program.sections.bidang')
@include('pages.program.sections.ajakan')
@endsection