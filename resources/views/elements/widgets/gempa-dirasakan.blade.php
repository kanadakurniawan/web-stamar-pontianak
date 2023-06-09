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