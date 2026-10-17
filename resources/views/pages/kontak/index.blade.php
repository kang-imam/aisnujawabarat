@extends('layouts.app')

@section('title', 'Kontak AISNU Jawa Barat | Hubungi Kami')

@section('meta_description', 'Hubungi AISNU Jawa Barat untuk pertanyaan mengenai organisasi, program, kemitraan, informasi, dan layanan perlindungan santri melalui saluran komunikasi yang tersedia.')

@section('canonical_url', route('kontak'))

@section('content')
@include('pages.kontak.sections.hero')
@include('pages.kontak.sections.saluran')
@include('pages.kontak.sections.panduan')
@include('pages.kontak.sections.ajakan')
@endsection