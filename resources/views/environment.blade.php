@extends('layouts.app')

@section('content')

<h1>Environment Information</h1>

<p>
    Informasi berikut aman ditampilkan karena tidak mengandung
    password, API key, APP_KEY, atau secret lainnya.
</p>

<table>

    <thead>
        <tr>
            <th>Informasi</th>
            <th>Nilai</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($environment as $key => $value)

            <tr>
                <td>{{ ucwords(str_replace('_', ' ', $key)) }}</td>
                <td>{{ $value }}</td>
            </tr>

        @endforeach

    </tbody>

</table>

@endsection