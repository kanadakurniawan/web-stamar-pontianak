<!DOCTYPE html>
<html lang="en">
    @include('elements.head')

<body>
    <div class="body-inner">
        <!-- Topbar -->
        @include('elements.topbar')
        <!-- end: Topbar -->
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

    @include('elements.script-footer-frontend')
    </body>

</html>