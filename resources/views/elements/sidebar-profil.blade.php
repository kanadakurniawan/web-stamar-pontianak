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
        <h4 class="widget-title">Prakiraan Cuaca Kota</h4>
        <div class="carousel team-members team-members-shadow" data-dots="false" data-items="1" data-autoplay="true" data-autoplay-timeout="2000">
            @php
            $cuacaKota = Widgets::prakiraanCuacaKota();
            $waktu = Widgets::pilihWaktuPrakiraanKota();
            $waktuPrakiraan = ["Pagi Hari","Siang Hari","Malam Hari","Dini Hari"];
            @endphp
            @foreach ($cuacaKota as $wil)
            @php
                $cuaca = $wil->parameter[6]->timerange[$waktu]->value[0];
                $namaCuaca = Widgets::namaCuaca($cuaca);
                $suhu = $wil->parameter[5]->timerange[0]->value[0];
                $suhu01 = $wil->parameter[4]->timerange[0]->value;
                $suhu02 = $wil->parameter[2]->timerange[0]->value;
                $kelembaban = $wil->parameter[0]->timerange[0]->value;
                $kelembaban01 = $wil->parameter[3]->timerange[0]->value;
                $kelembaban02 = $wil->parameter[1]->timerange[0]->value;
                $arahangin = $wil->parameter[7]->timerange[0]->value[1];
                $kecepatanangin = $wil->parameter[8]->timerange[0]->value;
            @endphp
            <div class="py-4 text-center" style="background-image: url('https://maritim.kalbar.bmkg.go.id/images/cuaca/{{ $cuaca }}-am.jpg')">
                <div class="text-light">
                    <strong>{{ $waktuPrakiraan[$waktu] }}</strong>	
                    <div>
                        <i class="fa fa-map-marker"></i>&nbsp; {{ $wil->name }}
                    </div>														
                    <div class="icon mt-3">
                        <img class="iconawan" alt="" src="https://maritim.kalbar.bmkg.go.id/images/cuaca/{{ $cuaca }}-am.png">                    
                        <div class="mt-3">{{ $namaCuaca }}</div>
                    </div>	                
                    <div>
                        <i class="fa fa-temperature-half"></i> {{ $suhu }} &#176C &nbsp; &nbsp; <i class="fa-solid fa-droplet"></i>{{ $kelembaban }} %
                    </div>
                    <div>
                        <i class="fa fa-wind"></i>&nbsp; {{ $kecepatanangin }} knot &nbsp;&nbsp;
                        <i class="fa fa-compass"></i>&nbsp;{{ $arahangin }}
                    </div>
                    
                        
                </div>									
                    
            </div>
            @endforeach
        </div>
    </div>
</div>