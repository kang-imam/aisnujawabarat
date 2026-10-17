@extends('layouts.app')

@section('title', 'Berita AISNU Jawa Barat | Berita dan Kegiatan')

@section('meta_description', 'Baca berita, kegiatan, informasi organisasi, dan perkembangan terbaru AISNU Jawa Barat seputar perlindungan santri, pesantren aman, program, dan kolaborasi.')

@section('canonical_url', route('berita.index'))

@section('content')
@include('pages.berita.sections.hero')
@include('pages.berita.sections.unggulan')
@include('pages.berita.sections.daftar')
@include('pages.berita.sections.ajakan')
@endsection