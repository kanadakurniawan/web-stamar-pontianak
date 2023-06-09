<header id="header">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="{{ route('home.index') }}">
                    <img alt="{{ env('NAMA_KANTOR') }}" src="{{ asset(env('LOGO')) }}" class="logo-default py-4">
                </a>
            </div>
            <!--End: Logo-->
            <!-- Search -->
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>
            <!-- end: search -->
            <!--Header Extras-->
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <a class="lines-button x"> <span class="lines"></span> </a>
            </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li class="dropdown"><a href="#">Profil</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profil.sejarah') }}">Sejarah</a></li>
                                    <li><a href="{{ route('profil.visi-dan-misi') }}">Visi dan Misi</a></li>
                                    <li><a href="{{ route('profil.tugas-dan-fungsi') }}">Tugas dan Fungsi</a></li>
                                    <li><a href="{{ route('profil.logo-dan-panji') }}">Logo dan Panji</a></li>
                                    <li><a href="{{ route('profil.struktur-organisasi') }}">Struktur Organisasi</a></li>
                                    <li><a href="{{ route('profil.sdm') }}">Sumber Daya Manusia</a></li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"><a href="#">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Grids</li>
                                                    <li><a href="portfolio-2.html">Two Columns</a></li>
                                                    <li><a href="portfolio-3.html">Three Columns</a></li>
                                                    <li><a href="portfolio-4.html">Four Columns</a></li>
                                                    <li><a href="portfolio-5.html">Five Columns</a></li>
                                                    <li><a href="portfolio-6.html">Six Columns</a></li>
                                                    <li><a href="portfolio-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="portfolio-wide-3.html">Wide version</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Masonry</li>
                                                    <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                    <li><a href="portfolio-masonry-3.html">Three Columns<span class="badge bg-danger">HOT</span></a></li>
                                                    <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                    <li><a href="portfolio-masonry-5.html">Five Columns</a></li>
                                                    <li><a href="portfolio-masonry-6.html">Six Columns</a></li>
                                                    <li><a href="portfolio-masonry-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="portfolio-masonry-wide-3.html">Wide version</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                    <li><a href="portfolio-load-more.html">Load more</a></li>
                                                    <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                    <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                    <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                    <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Layouts</li>
                                                    <li><a href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="portfolio-sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="portfolio-slider-3.html">Slider Default</a></li>
                                                    <li><a href="portfolio-no-page-title.html">No Page Title</a></li>
                                                    <li><a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a></li>
                                                    <li><a href="portfolio-hover-styles.html">Hover Styles</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Single Project</li>
                                                    <li><a href="portfolio-page-grid-gallery.html">Grid Gallery</a></li>
                                                    <li><a href="portfolio-page-particles.html">Particles Wide Project</a></li>
                                                    <li><a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a></li>
                                                    <li><a href="portfolio-page-slider.html">Slider version</a></li>
                                                    <li><a href="portfolio-page-background-image.html">Fullscreen image</a></li>
                                                    <li><a href="portfolio-page-background-video.html">Fullscreen Video</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 no-padding">
                                                <div class="d-none d-lg-block m-t-40 m-b-10">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-9 m-t-10">
                                                                <div class="text-center center">
                                                                    <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3"><a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="d-block d-lg-none">
                                                    <li><a class="mega-menu-title" href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Layanan Publik</a>
                                <ul class="dropdown-menu">                                    
                                    <li> <a href="{{ route('layanan-publik.maklumat-pelayanan') }}">Maklumat Pelayanan</a> </li>
                                    <li> <a href="{{ route('layanan-publik.prosedur-pelayanan') }}">Prosedur Pelayanan</a> </li>
                                    <li> <a href="{{ route('layanan-publik.tarif-produk') }}">Tarif Produk</a> </li>
                                    <li><a href="#">Pelayanan Data Online</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Publikasi</a>
                                <ul class="dropdown-menu">
                                    <li> <a href="https://maritim.kalbar.bmkg.go.id/transparansi-kinerja/">Transparansi Kinerja</a></li>
 									<li> <a href="https://maritim.kalbar.bmkg.go.id/langganan/">Langganan Info Cuaca</a></li>
                                    <li> <a href="https://maritim.kalbar.bmkg.go.id/buletin/">Buletin</a></li>
                                    <li> <a href="https://maritim.kalbar.bmkg.go.id/ringkasan-cuaca/">Ringkasan Cuaca</a></li>
                                    <li> <a href="https://maritim.kalbar.bmkg.go.id/infografis-rcb/">Infografis RCB</a></li>
                                    <li> <a href="https://maritim.kalbar.bmkg.go.id/laporan/">Laporan</a></li>
                                    <li> <a href="https://maritim.kalbar.bmkg.go.id/modul-web/">Modul Web</a></li>
                                    <li> <a href="https://maritim.kalbar.bmkg.go.id/konten/">Blog</a></li>									
                                </ul>
                            </li>
                            <li class="dropdown"><a href="">Kuisioner</a>
                                <ul class="dropdown-menu">
                                    <li> <a href="{{ route('kuisioner.kepuasan-masyarakat') }}">Kepuasan Masyarakat</a> </li>
			                        <li> <a href="{{ route('kuisioner.persepsi-korupsi') }}">Persepsi Korupsi</a> </li>
                                </ul>
                            </li>
                            <li>
                            <li><a href="{{ route('home.hubungi-kami') }}">Hubungi Kami</a></li>
                            <li>
                                <img style="height:80px;" alt="Stasiun Meteorologi Maritim Pontianak" src="{{ asset('frontend/images/berakhlak-bangga-melayani-bangsa.png') }}" class="logo-default py-4">
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>