<!DOCTYPE html>
<html lang="en">
    @include('elements.head')

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Topbar -->
        @include('elements.topbar')
        <!-- end: Topbar -->
        <!-- Header -->
        @include('elements.header')
        <!-- end: Header -->
        <!-- Page title -->
        <section id="page-title">
            <div class="container">
                <div class="page-title">
                    <h1>@yield('judul')</h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- Page Content -->
        <section id="page-content" class="sidebar-left">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    @yield('konten')
                    <!-- end: content -->
                    <!-- Sidebar-->
                    @include('elements.sidebar-profil')
                    <!-- end: sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Page Content -->
        <!-- Footer -->
        @include('elements.footer')
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    @include('elements.script-footer-frontend')
</body>

</html>