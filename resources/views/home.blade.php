@extends('layouts.app')

@section('content')

<div class="hero">
    <span class="badge">Laravel 12</span>

    <h1>{{ $campus['name'] }}</h1>

    <p>
        {{ $campus['description'] }}
    </p>

    <p>
        Lokasi: <strong>{{ $campus['location'] }}</strong>
    </p>
</div>

<div class="card-grid">

    <div class="card">
        <h3>Program Studi</h3>
        <p>
            Informasi program studi yang tersedia di CampusInfo.
        </p>

        <a href="{{ route('program-studi') }}">
            Lihat Program Studi
        </a>
    </div>

    <div class="card">
        <h3>Kontak</h3>
        <p>
            Informasi alamat dan kontak CampusInfo.
        </p>

        <a href="{{ route('kontak') }}">
            Hubungi Kami
        </a>
    </div>

    <div class="card">
        <h3>Architecture Explorer</h3>
        <p>
            Pelajari struktur dan arsitektur Laravel.
        </p>

        <a href="{{ route('architecture') }}">
            Buka Architecture
        </a>
    </div>

</div>

@endsection