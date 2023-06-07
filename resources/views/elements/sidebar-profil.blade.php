<div class="sidebar col-lg-3">
    <!--widget newsletter-->
    <div class="widget">
        <h4 class="widget-title">Profil Kami</h4>
		<ul class="list-icon list-icon-arrow list-icon-colored">
			<li> <a href="{{ route('profil.sejarah') }}">Sejarah</a> </li>
			<li> <a href="{{ route('profil.visi-dan-misi') }}">Visi dan Misi</a> </li>
			<li> <a href="{{ route('profil.tugas-dan-fungsi') }}">Tugas dan Fungsi</a> </li>
			<li> <a href="{{ route('profil.logo-dan-panji') }}">Logo dan Panji</a> </li>
			<li> <a href="{{ route('profil.struktur-organisasi') }}">Struktur Organisasi</a> </li>
			<li> <a href="{{ route('profil.sdm') }}">Sumber Daya Manusia</a> </li>
		</ul>
    </div>
    <div class="widget">        
        <h4 class="widget-title">Gempa Dirasakan</h4>
        <ul class="list-unstyled gempa mb-1">
            <li class="judul-gempa mb-2">{{ $gempa[1]->gempa->Tanggal }}  , {{ $gempa[1]->gempa->Jam }}</li>
            <li class="image-with-text">
                <img class="icon-gempa" src="https://maritim.kalbar.bmkg.go.id/images/gempabumi/magnitude.png" width="25" height="25" alt=""> 
                <span>Magnitude : <br/>
                <span class="deskripsi-gempa">{{ $gempa[1]->gempa->Magnitude }}</span></span>
            </li>
            <li class="image-with-text">
                <object  class="icon-gempa" data="{{ asset('frontend/images/widgets/gempa/kedalaman.webp') }}" width="25" height="25"> </object> 
                <span>Kedalaman : <br/><span class="deskripsi-gempa">{{ $gempa[1]->gempa->Kedalaman }}</span></span>
            </li>
            <li class="image-with-text">
                <object data="{{ asset('frontend/images/widgets/gempa/koordinat.webp') }}" width="25" height="25"> </object> 
                <span>Lokasi : <br/><span class="deskripsi-gempa">{{ $gempa[1]->gempa->Lintang }} - {{ $gempa[0]->gempa->Bujur }}</span></span>
            </li>
            <li class="image-with-text">
                <img class="icon-gempa" src="https://maritim.kalbar.bmkg.go.id/images/gempabumi/lokasi.png" width="25" height="25" alt=""> 
                <span>Lokasi : <br/><span class="deskripsi-gempa">{{ $gempa[1]->gempa->Wilayah }}</span></span>
            </li>
            <li class="image-with-text">
                <img class="icon-gempa" src="https://maritim.kalbar.bmkg.go.id/images/gempabumi/dirasakan.png" width="25" height="25" alt="">  
                <span>Dirasakan (Skala MMI) : <br/><span class="deskripsi-gempa">{{ $gempa[1]->gempa->Dirasakan }}</span></span>
            </li>
        </ul>
        <a href="https://ews.bmkg.go.id/tews/data/{{ $gempa[2]->gempa->Shakemap }}" class="fancybox img-hover-v1 px-0" rel="gallery1" title="Gempabumi Dirasakan">
            <img class="img-fluid" src="https://ews.bmkg.go.id/tews/data/{{ $gempa[2]->gempa->Shakemap }}" alt="">
        </a>
    </div>
    <!--end: widget newsletter-->
    <!--Tabs with Posts-->
    <div class="widget">
        <div class="tabs">
            <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                </li>
            </ul>
            <div class="tab-content" id="tabs-posts-content">
                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/5.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/6.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/7.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/6.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/7.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/8.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">New costs and rise of the economy!</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/7.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/8.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">New costs and rise of the economy!</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/6.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i>
                                    Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End: Tabs with Posts-->
    <!-- Twitter widget -->
 
    <!-- end: Twitter widget-->
    <!--widget tags -->
    <div class="widget  widget-tags">
        <h4 class="widget-title">Tags</h4>
        <div class="tags">
            <a href="#">Design</a>
            <a href="#">Portfolio</a>
            <a href="#">Digital</a>
            <a href="#">Branding</a>
            <a href="#">HTML</a>
            <a href="#">Clean</a>
            <a href="#">Peace</a>
            <a href="#">Love</a>
            <a href="#">CSS3</a>
            <a href="#">jQuery</a>
        </div>
    </div>
    <!--end: widget tags -->
</div>