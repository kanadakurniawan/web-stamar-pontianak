<div class="sidebar col-lg-3">
    <!--widget newsletter-->
    <div class="widget">
        <h4 class="widget-title">Layanan Publik</h4>
		<ul class="list-icon list-icon-arrow list-icon-colored">
			<li> <a href="{{ route('layanan-publik.maklumat-pelayanan') }}">Maklumat Pelayanan</a> </li>
            <li> <a href="{{ route('layanan-publik.prosedur-pelayanan') }}">Prosedur Pelayanan</a> </li>
            <li> <a href="{{ route('layanan-publik.tarif-produk') }}">Tarif Produk</a> </li>
            <li><a href="#">Pelayanan Data Online</a></li>
		</ul>
    </div>
    
    @include('elements.widgets.gempa-dirasakan')
    <!--end: widget newsletter-->
    <!--Tabs with Posts-->
    @include('elements.widgets.prakiraan-cuaca-kota')
</div>