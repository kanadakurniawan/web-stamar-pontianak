<head>   
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="{{ env('NAMA_KANTOR') }}" />
    <meta name="description" content="{{ env('DESCRIPTION') }}">
    <link rel="icon" type="image/png" href="{{ asset(env('ICON')) }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>@yield('judul') | BMKG - {{ env('NAMA_KANTOR') }}</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('frontend/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    </head>