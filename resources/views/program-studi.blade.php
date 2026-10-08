@extends('layouts.app')

@section('content')

<h1>Program Studi</h1>

<p>
    Daftar program studi CampusInfo yang dikirim dari Controller ke Blade.
</p>

<div class="card-grid">

    @foreach ($programStudi as $prodi)

        <div class="card">

            <span class="badge">
                {{ $prodi['kode'] }}
            </span>

            <h3>{{ $prodi['nama'] }}</h3>

            <p>
                {{ $prodi['deskripsi'] }}
            </p>

        </div>

    @endforeach

</div>

@endsection