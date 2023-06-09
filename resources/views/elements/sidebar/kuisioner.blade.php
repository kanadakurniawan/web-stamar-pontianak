<div class="sidebar col-lg-3">
    <!--widget newsletter-->
    <div class="widget">
        <h4 class="widget-title">Kuisioner</h4>
		<ul class="list-icon list-icon-arrow list-icon-colored">
			<li> <a href="{{ route('kuisioner.kepuasan-masyarakat') }}">Kepuasan Masyarakat</a> </li>
			<li> <a href="{{ route('kuisioner.persepsi-korupsi') }}">Persepsi Korupsi</a> </li>
		</ul>
    </div>
    
    @include('elements.widgets.gempa-dirasakan')
    <!--end: widget newsletter-->
    <!--Tabs with Posts-->
    @include('elements.widgets.prakiraan-cuaca-kota')
</div>