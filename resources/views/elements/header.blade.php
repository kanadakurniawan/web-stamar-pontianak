<div id="topbar" class="dark topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="top-menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <div class="social-icons social-icons-colored-hover">
                    <ul>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<header id="header">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="{{ route('beranda') }}">
                    <img alt="Stasiun Meteorologi Maritim Pontianak" src="{{ asset('frontend/images/logo-bmkg-maritim-pontianak-motto.svg') }}" class="logo-default py-4">
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
                                    <li><a href="#">Sejarah</a></li>
                                    <li><a href="#">Visi dan Misi</a></li>
                                    <li><a href="#">Tugas dan Fungsi</a></li>
                                    <li><a href="#">Logo dan Panji</a></li>
                                    <li><a href="#">Struktur Organisasi</a></li>
                                    <li><a href="#">Sumber Daya Manusia</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Features</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#">Sliders</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                            <li><a href="slider-inspiro-slider.html">Inspiro Slider</a></li>
                                            <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                            <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                            <li><a href="slider-static-media-text-rotator.html">Fullscreen Text Rotator</a></li>
                                            <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="page-loaders.html">Page Loaders<span class="badge bg-danger">NEW</span></a></li>
                                    <li class="dropdown-submenu"><a href="#">Modal Auto Open<span class="badge bg-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="modal-auto-open-subscription.html">Subscription</a></li>
                                            <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                            <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                            <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                            <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                            <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                            <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                            <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                            <li><a href="modal-auto-open.html">Sample Text</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Cookie Notify<span class="badge bg-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cookie-notify.html">Top position</a></li>
                                            <li><a href="cookie-notify-bottom.html">Bottom position</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shape-dividers.html">Shape Dividers<span class="badge bg-danger">NEW</span></a></li>
                                    <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Label (new)<span class="badge bg-danger">NEW</span></a></li>
                                            <li><a href="#">Label (hot)<span class="badge bg-danger">HOT</span></a></li>
                                            <li><a href="#">Label (popular)<span class="badge bg-success">POPULAR</span></a></li>
                                            <li><a href="#">Label (sale)<span class="badge bg-warning">SALE</span></a></li>
                                            <li><a href="#">Label (info)<span class="badge bg-info">INFO</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"><a href="#">Elements</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <ul>
                                                    <li><a href="shortcode-according.html">Accordions</a></li>
                                                    <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                    <li><a href="shortcode-animations.html">Animations</a></li>
                                                    <li><a href="shortcode-avatar.html">Avatar</a></li>
                                                    <li><a href="shortcode-audio-video.html">Audio & Video</a></li>
                                                    <li><a href="shortcode-blockquotes.html">Blockquotes</a></li>
                                                    <li><a href="component-bootstrap-switch.html">BS Switch<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="component-bootstrap-notify.html">BS Notify<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-breadcrumbs.html">Breadcrumbs</a></li>
                                                    <li><a href="shortcode-buttons.html">Buttons</a></li>
                                                    <li><a href="shortcode-background-image.html">Background Image</a></li>
                                                    <li><a href="shortcode-background-overlays.html">Background Overlays</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul>
                                                    <li><a href="component-charts-chartjs.html">Charts<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="component-calendar.html">Calendar<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-client-logo.html">Clients logos</a></li>
                                                    <li><a href="shortcode-calltoaction.html">Call to action</a></li>
                                                    <li><a href="shortcode-carousel.html">Carousel</a></li>
                                                    <li><a href="shortcode-code.html">Code</a></li>
                                                    <li><a href="shortcode-countdown-timer.html">Countdown Timers</a></li>
                                                    <li><a href="shortcode-countdown.html">Countdown<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-counters.html">Counter Numbers</a></li>
                                                    <li><a href="component-clipboard.html">Clipboard<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="component-datatable.html">Data Tables<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="component-daterangepicker.html">Date & Time Pickers</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul>
                                                    <li><a href="shortcode-dropcat-highlight.html">Dropcat & Highlight</a></li>
                                                    <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                                    <li><a href="shortcode-team-members.html">Team members</a></li>
                                                    <li><a href="shortcode-forms.html">Form Controls</a></li>
                                                    <li><a href="shortcode-form-validation.html">Form Validation</a></li>
                                                    <li><a href="shortcode-form-layouts.html">Form Layouts</a></li>
                                                    <li><a href="shortcode-file-upload.html">File upload</a></li>
                                                    <li><a href="shortcode-grid.html">Grid System</a></li>
                                                    <li><a href="shortcode-heading-styles.html">Heading Styles</a></li>
                                                    <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                                    <li><a href="shortcode-icon-lists.html">Icons</a></li>
                                                    <li><a href="shortcode-images.html">Images</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul>
                                                    <li><a href="shortcode-lightbox.html">Lightbox</a></li>
                                                    <li><a href="shortcode-lists.html">Lists</a></li>
                                                    <li><a href="shortcode-labels-badgets.html">Labels & Badges</a></li>
                                                    <li><a href="shortcode-maps.html">Maps</a></li>
                                                    <li><a href="shortcode-modal.html">Modal</a></li>
                                                    <li><a href="shortcode-modal-strip.html">Modal Strip</a></li>
                                                    <li><a href="shortcode-navs.html">Navbar & Navs</a></li>
                                                    <li><a href="shortcode-paginations.html">Pagination & Pager</a></li>
                                                    <li><a href="shortcode-panels.html">Panels</a></li>
                                                    <li><a href="shortcode-pie-chart.html">Pie charts</a></li>
                                                    <li><a href="shortcode-popover.html">Popover</a></li>
                                                    <li><a href="shortcode-milestone-stats.html">Milestone & Stats</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul>
                                                    <li><a href="shortcode-pricing-table.html">Pricing tables</a></li>
                                                    <li><a href="shortcode-progress-bar.html">Progress bars</a></li>
                                                    <li><a href="shortcode-parallax.html">Parallax</a></li>
                                                    <li><a href="shortcode-particles.html">Particles<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-responsive-utilities.html">Responsive utilities</a></li>
                                                    <li><a href="component-ion-range-slider.html">Range Slider<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-sections.html">Sections</a></li>
                                                    <li><a href="shortcode-smooth-scrolling.html">Smooth Scrolling</a></li>
                                                    <li><a href="shortcode-social-icons.html">Social Icons</a></li>
                                                    <li><a href="shortcode-spinners.html">Spinners<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="component-toggles-radio-checkboxes.html">Switch Toggle<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-shape-dividers.html">Shape Dividers<span class="badge bg-danger">NEW</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul>
                                                    <li><a href="shortcode-ratings.html">Ratings<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-tables.html">Tables</a></li>
                                                    <li><a href="shortcode-textbox.html">Text Boxes</a></li>
                                                    <li><a href="shortcode-tabs.html">Tabs</a></li>
                                                    <li><a href="shortcode-testimonial.html">Testimonials</a></li>
                                                    <li><a href="shortcode-toggles.html">Toggles</a></li>
                                                    <li><a href="shortcode-tooltips.html">Tooltips</a></li>
                                                    <li><a href="shortcode-typography.html">Typography</a></li>
                                                    <li><a href="shortcode-text-rotator.html">Text Rotator</a></li>
                                                    <li><a href="shortcode-timeline.html">Timeline<span class="badge bg-danger">NEW</span></a></li>
                                                    <li><a href="shortcode-video-background.html">Video Background</a></li>
                                                    <li><a href="shortcode-wizard.html">Wizard<span class="badge bg-danger">NEW</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-about-basic.html">Basic</a></li>
                                            <li><a href="page-about-extended.html">Extended</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-about-me-creative.html">Creative<span class="badge bg-danger">NEW</span></a></li>
                                            <li><a href="page-about-me-basic.html">Basic</a></li>
                                            <li><a href="page-about-me-extended.html">Extended</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-contact-classic.html">Classic</a></li>
                                            <li><a href="page-contact-advanced.html">Advanced</a> </li>
                                            <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a></li>
                                            <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a></li>
                                            <li><a href="page-contact-map-bottom.html">Map bottom</a></li>
                                            <li><a href="page-contact-sidebar-left.html">Sidebar Left</a></li>
                                            <li><a href="page-contact-sidebar-right.html">Sidebar Right</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-gallery-2.html">Two Columns</a></li>
                                            <li><a href="page-gallery-3.html">Three Columns</a></li>
                                            <li><a href="page-gallery-4.html">Four Columns</a></li>
                                            <li><a href="page-gallery-5.html">Five Columns</a></li>
                                            <li><a href="page-gallery-6.html">Six Columns</a></li>
                                            <li><a href="page-gallery-sidebar.html">Sidebar version</a></li>
                                            <li><a href="page-gallery-wide.html">Wide version</a></li>
                                            <li><a href="page-gallery-load-more.html">Load more</a></li>
                                            <li><a href="page-gallery-infinite-scroll.html">Infinity Scroll</a></li>
                                            <!--<li><a href="page-gallery-gallery-albums.html">Gallery Albums</a></li>-->
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-user-login.html">Login</a></li>
                                            <li><a href="page-user-login-cover.html">Login - Side Cover</a></li>
                                            <li><a href="page-user-login-classic.html">Login - Classic</a></li>
                                            <li><a href="page-user-register-cover.html">Register - Side Cover</a></li>
                                            <li><a href="page-user-register.html">Register</a></li>
                                            <li><a href="page-user-register-classic.html">Register - Classic</a></li>
                                            <li><a href="page-user-password-recovery.html">Recovery Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="page-services.html">Services</a></li>
                                    <li><a href="page-our-team.html">Our team</a></li>
                                    <li><a href="page-our-clients.html">Our clients</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                    <li><a href="page-404-parallax.html">404 Page - Parallax</a></li>
                                    <li><a href="page-500.html">500 Page</a></li>
                                    <li><a href="page-fullwidth.html">Fullwidth page</a></li>
                                    <li><a href="page-fullwidth-wide.html">Fullwidth page - Wide</a></li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-sidebar.html">Sidebar Left</a></li>
                                            <li><a href="page-sidebar-right.html">Sidebar Right</a></li>
                                            <li><a href="page-sidebar-both.html">Sidebar Both</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="page-site-map.html">Site Map</a></li>
                                    <li><a href="page-faq.html">FAQ</a></li>
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
                            <li class="dropdown mega-menu-item"><a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Masonry</li>
                                                    <li><a href="blog-masonry-2.html">Two Columns</a></li>
                                                    <li><a href="blog-masonry-3.html">Three Columns<span class="badge bg-danger">HOT</span></a></li>
                                                    <li><a href="blog-masonry-4.html">Four Columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="blog-masonry-no-page-title.html">No page title</a></li>
                                                    <li><a href="blog-masonry-wide.html">Wide version</a></li>
                                                    <li><a href="blog-masonry-load-more.html">Load More</a></li>
                                                    <li><a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a></li>
                                                    <li><a href="blog-masonry-filter.html">Filter Categories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Grids Layout</li>
                                                    <li><a href="blog-1.html">One Column</a></li>
                                                    <li><a href="blog-2.html">Two Columns</a></li>
                                                    <li><a href="blog-3.html">Three Columns</a></li>
                                                    <li><a href="blog-4.html">Four Columns</a></li>
                                                    <li><a href="blog-no-page-title.html">No page title</a></li>
                                                    <li><a href="blog-wide.html">Wide version</a></li>
                                                    <li><a href="blog-load-more.html">Load More</a></li>
                                                    <li><a href="blog-infinite-scroll.html">Infinite Scroll</a></li>
                                                    <li><a href="blog-filter.html">Filter Categories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Left Image</li>
                                                    <li><a href="blog-left-image-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="blog-left-image-sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="blog-left-image-sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="blog-left-image-no-sidebar.html">No Sidebar</a></li>
                                                    <li><a href="blog-left-image-no-page-title.html">No page title</a></li>
                                                    <li><a href="blog-left-image-load-more.html">Load More</a></li>
                                                    <li><a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a></li>
                                                    <li><a href="blog-left-image-author-info.html">Author Info</a></li>
                                                    <li><a href="blog-left-image-filter.html">Filter Categories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Layouts</li>
                                                    <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="blog-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="blog-sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                                    <li class="mega-menu-title">Post Item Styles</li>
                                                    <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                    <li><a href="blog-style-textual.html">Textual</a></li>
                                                    <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                    <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Single Post</li>
                                                    <li><a href="blog-single.html">Default</a></li>
                                                    <li><a href="blog-single-slider.html">Slider</a></li>
                                                    <li><a href="blog-single-video.html">Video</a></li>
                                                    <li><a href="blog-single-audio.html">Audio</a></li>
                                                    <li><a href="blog-single-creative.html">Creative</a></li>
                                                    <li class="mega-menu-title">Comments<span class="badge bg-danger">NEW</span></li>
                                                    <li><a href="blog-comments.html#comments">Default Comments</a></li>
                                                    <li><a href="blog-comments-disqus.html#comments">Disqus Comments</a></li>
                                                    <li><a href="blog-comments-facebook.html#comments">Facebook Comments</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"><a href="#">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Columns</li>
                                                    <li><a href="shop-columns-2.html">Two Columns</a></li>
                                                    <li><a href="shop-columns-3.html">Three Columns</a></li>
                                                    <li><a href="shop-columns-4.html">Four Columns</a></li>
                                                    <li><a href="shop-columns-5.html">Five Columns</a></li>
                                                    <li><a href="shop-columns-6.html">Six Columns</a></li>
                                                    <li><a href="shop-sidebar-sticky.html">Sidebar Sticky</a></li>
                                                    <li><a href="shop-wide.html">Wide version</a></li>
                                                    <li><a href="shop-no-page-title.html">No page title</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Layouts</li>
                                                    <li><a href="shop-sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="shop-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="shop-sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="shop-fullwidth.html">Fullwidth (Wide)</a></li>
                                                    <li class="mega-menu-title">Loading Styles</li>
                                                    <li><a href="shop-load-more.html">Load more</a><a href="shop-load-more-sidebar.html">Load Sidebar</a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinity Scroll</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Order process</li>
                                                    <li><a class="animsition-link" href="shop-cart.html">Shoping Cart</a></li>
                                                    <li><a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a></li>
                                                    <li><a class="animsition-link" href="shop-checkout.html">Checkout</a></li>
                                                    <li><a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a></li>
                                                    <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                    <li><a href="shop-wishlist-empty.html">Wishlist Empty</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Single Product</li>
                                                    <li><a href="shop-single-product.html">Fullwidth</a></li>
                                                    <li><a href="shop-single-product-sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="shop-single-product-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="shop-single-product-sidebar-both.html">Both Sidebars</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5 p-l-0">
                                                <h4 class="text-theme">BIG SALE<small>Up to</small></h4>
                                                <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                                <p class="m-b-0">The most happiest time of the day!. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p><a class="btn btn-shadow btn-roundeded btn-block m-t-10">SHOP NOW!</a><small class="t300">
                                                    <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                                </small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
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