@extends('layouts.app')

@section('content')

<h1>Kontak</h1>

<div class="card-grid">

    <div class="card">
        <h3>Alamat</h3>
        <p>{{ $kontak['alamat'] }}</p>
    </div>

    <div class="card">
        <h3>Email</h3>
        <p>{{ $kontak['email'] }}</p>
    </div>

    <div class="card">
        <h3>Telepon</h3>
        <p>{{ $kontak['telepon'] }}</p>
    </div>

</div>

@endsection