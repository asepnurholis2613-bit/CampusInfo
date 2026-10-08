<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'CampusInfo' }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        nav {
            background: #1e3a8a;
            padding: 16px 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .hero {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,.08);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,.08);
        }

        .card h3 {
            color: #1e3a8a;
        }

        .badge {
            display: inline-block;
            background: #dbeafe;
            color: #1e3a8a;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .flow {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .flow-box {
            background: white;
            border: 2px solid #1e3a8a;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            min-width: 140px;
        }

        .arrow {
            font-size: 28px;
            font-weight: bold;
            color: #1e3a8a;
        }

        footer {
            text-align: center;
            padding: 30px;
            color: #6b7280;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #1e3a8a;
            color: white;
        }

        code {
            background: #eef2ff;
            padding: 3px 6px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

<nav>
    <a href="{{ route('home') }}">Beranda</a>
    <a href="{{ route('program-studi') }}">Program Studi</a>
    <a href="{{ route('kontak') }}">Kontak</a>
    <a href="{{ route('architecture') }}">Architecture</a>
    <a href="{{ route('lifecycle') }}">Lifecycle</a>
    <a href="{{ route('environment') }}">Environment</a>
</nav>

<main class="container">
    @yield('content')
</main>

<footer>
    CampusInfo - Laravel Architecture Explorer
</footer>

</body>
</html>