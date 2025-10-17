@extends('layouts.app')

@section('title', 'Selamat Datang di Ekowisata Kami')

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.mitra')
    @include('partials.landing.paket')
    @include('partials.landing.fasilitas')
    @include('partials.landing.dokumentasi')
    @include('partials.landing.newsletter')
    @include('partials.landing.kontak')
@endsection