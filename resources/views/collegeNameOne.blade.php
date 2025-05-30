@extends('layout')


@section('content')
<style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
        }
        .college-card {
            max-width: 1300px;
            margin: 100px auto 0 auto;
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .college-logo {
            width: 100%;
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        .college-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .college-description {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .college-info {
            font-size: 16px;
            margin-bottom: 6px;
        }
        .college-link a {
            color: #007BFF;
            text-decoration: none;
        }
        .college-link a:hover {
            text-decoration: underline;
        }
</style>
    <body>
    <div class="college-card">
        <img src={{ asset("logo/$college->logo") }} alt="Логотип колледжа" class="college-logo">

        <p class="college-title">{{ $college->name }}</p>

        <p class="college-description">
            {{ $college->description }}
        </p>

        <p class="college-info"><strong>Адрес:</strong> {{ $college->address }}</p>
        <p class="college-info"><strong>Телефон:</strong> {{ $college->tel }}</p>
        <p class="college-info college-link"><strong>Сайт:</strong> <a href={{ $college->site }}
                target="_blank">{{ $college->site }}</a></p>
    </div>
@endsection

