@extends('layouts.app')

@section('content')

<h1>Laravel Architecture Dashboard</h1>

<p>
    Halaman ini menampilkan struktur folder penting pada aplikasi Laravel.
</p>

<div class="card-grid">

    @foreach ($structures as $structure)

        <div class="card">

            <span class="badge">
                {{ $structure['name'] }}
            </span>

            <h3>{{ $structure['name'] }}</h3>

            <p>
                {{ $structure['function'] }}
            </p>

        </div>

    @endforeach

</div>

@endsection