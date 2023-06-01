<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo, html template">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Document title -->
<title>@yield('judul') | Stasiun Meteorologi Maritim Pontianak</title>
<!-- Stylesheets & Fonts -->
<link href="css/plugins.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
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
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>