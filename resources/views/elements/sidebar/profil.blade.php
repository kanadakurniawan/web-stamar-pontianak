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
    @include('elements.widgets.gempa-dirasakan')
    <!--end: widget newsletter-->
    <!--Tabs with Posts-->
    @include('elements.widgets.prakiraan-cuaca-kota')
</div>