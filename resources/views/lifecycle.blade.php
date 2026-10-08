@extends('layouts.app')

@section('content')

<h1>Request Lifecycle</h1>

<p>
    Contoh lifecycle ketika browser mengakses:
    <code>GET /program-studi</code>
</p>

<div class="flow">

    <div class="flow-box">
        <strong>1</strong>
        <br>
        Browser
        <br>
        GET /program-studi
    </div>

    <div class="arrow">→</div>

    <div class="flow-box">
        <strong>2</strong>
        <br>
        public/index.php
    </div>

    <div class="arrow">→</div>

    <div class="flow-box">
        <strong>3</strong>
        <br>
        Laravel
        <br>
        Bootstrap
    </div>

    <div class="arrow">→</div>

    <div class="flow-box">
        <strong>4</strong>
        <br>
        routes/web.php
    </div>

    <div class="arrow">→</div>

    <div class="flow-box">
        <strong>5</strong>
        <br>
        HomeController
        <br>
        programStudi()
    </div>

    <div class="arrow">→</div>

    <div class="flow-box">
        <strong>6</strong>
        <br>
        Blade
        <br>
        program-studi.blade.php
    </div>

    <div class="arrow">→</div>

    <div class="flow-box">
        <strong>7</strong>
        <br>
        HTTP Response
    </div>

    <div class="arrow">→</div>

    <div class="flow-box">
        <strong>8</strong>
        <br>
        Browser
    </div>

</div>

<div class="card" style="margin-top:30px;">

    <h2>Analisis Request</h2>

    <p>
        Ketika pengguna membuka <code>/program-studi</code>,
        browser mengirim HTTP GET request kepada aplikasi Laravel.
    </p>

    <p>
        Request kemudian diproses melalui entry point aplikasi
        Laravel pada <code>public/index.php</code>.
    </p>

    <p>
        Laravel memuat konfigurasi dan routing aplikasi.
        Route <code>program-studi</code> ditemukan pada
        <code>routes/web.php</code>.
    </p>

    <p>
        Route tersebut memanggil method
        <code>programStudi()</code> pada
        <code>HomeController</code>.
    </p>

    <p>
        Controller menyiapkan array data program studi dan
        mengirimkannya ke Blade melalui
        <code>view('program-studi', compact('programStudi'))</code>.
    </p>

    <p>
        Blade mengolah data menjadi HTML. HTML tersebut kemudian
        dikembalikan sebagai HTTP response kepada browser.
    </p>

</div>

@endsection