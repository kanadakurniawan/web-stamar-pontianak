<!DOCTYPE html>
<html lang="en">
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

<body>
    <div class="body-inner">
        <!-- Header -->
        @include('elements.header')
        <!-- end: Header -->
        <!-- Inspiro Slider -->
        @yield('konten')
        <!--end: Inspiro Slider -->

        <!-- Footer -->        
        @include('elements.footer')
        <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!--Template functions-->
    <script src="{{ asset('frontend/js/functions.js') }}"></script>
    <script src="https://kit.fontawesome.com/a573f99059.js" crossorigin="anonymous"></script>
</body>

</html>