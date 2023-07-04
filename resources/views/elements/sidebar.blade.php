<div class="sidebar col-lg-3">
    <!--widget newsletter-->
    <div class="widget">
        <h4 class="widget-title">{{ ucwords($sidebar) }}</h4>
		<ul class="list-icon list-icon-arrow list-icon-colored">
            @if($sidebar == 'profil')
                @include('menu.profil')
            @elseif($sidebar == 'kuisioner')
                @include('menu.kuisioner')
            @elseif($sidebar == 'layanan publik')
                @include('menu.layanan-publik')
            @elseif($sidebar == 'publikasi')
                @include('menu.publikasi')
            @endif  
		</ul>
    </div>
    @include('elements.widgets.gempa-dirasakan')
    <!--end: widget newsletter-->
    <!--Tabs with Posts-->
    @include('elements.widgets.prakiraan-cuaca-kota')
</div>