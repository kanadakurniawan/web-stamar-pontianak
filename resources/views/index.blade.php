@extends('layouts.homepage')
@section('judul')
Beranda
@endsection
@section('css-tambahan')
@endsection
@section('konten')
<section id="page-content" class="pt-3">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            
            {{-- Prakiraan Cuaca Pelabuhan Start --}}
            <div class="headline">
                <h4 >Prakiraan Cuaca Pelabuhan</h4>
            </div>
            <div class="carousel team-members team-members-shadow" data-dots="false" data-items="3" data-autoplay="true" data-autoplay-timeout="2000">
                @for ($i=0; $i < 20; $i++) 
                <x-prakiraan-cuaca-pelabuhan-item  
                    :cuaca="$dataPelabuhan[$i][0]['weather']" 
                    :arahanginfrom="$dataPelabuhan[$i][0]['wind_from']" 
                    :arahanginto="$dataPelabuhan[$i][0]['wind_to']"
                    :kecepetananginfrom="$dataPelabuhan[$i][0]['wind_speed_min']"
                    :kecepetananginto="$dataPelabuhan[$i][0]['wind_speed_max']"
                    :gelombang="$dataPelabuhan[$i][0]['wave_desc']"
                    :pelabuhan="$namaPelabuhan[$i]"
                />
                @endfor                
            </div>   
            {{-- Prakiraan Cuaca Pelabuhan End --}}

            {{-- Banner Start --}}
            <div class="row banner mb-3 mt-0">
                <a href="{{ env('BANNER_HOMEPAGE_LINK') }}" target="_blank">
                    <img class="img-fluid" src="{{ asset(env('BANNER_HOMEPAGE')) }}" alt="">
                </a>
            </div>   
            {{-- Banner End --}}

            {{-- Warning Start --}}
            <div role="alert" class="alert alert-warning my-3">
                <div class="row">
                    <div class="col-md-2 py-2 rounded peringatandini-title">>
                        <p class="align-middle"><i class="fa fa-triangle-exclamation fa-2xl mx-auto d-block"></i></p>
                        <p class="align-middle"><strong> Peringatan Dini</strong></p>
                    </div>
                    <div class="col-md-10 pl-3 peringatandini carousel" data-dots="false" data-items="1" data-autoplay="true" data-autoplay-timeout="2000">
                        @for ($x = 0; $x <= 2; $x++) 
                        <div>
                            <strong>{{ $hariIndo[$x] }} | Kalimantan Barat</strong><br/>
                            {{ $dataWarning->report[$x]->text }}                            
                        </div> 
                        @endfor   
                    </div> 
                </div>               
            </div>
            {{-- Warning End --}}
        </div> 
        <div class="col-lg-4">
            
            <div class="tabs">
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="terkini-tab" data-bs-toggle="tab" href="#terkini" role="tab" aria-controls="home" aria-selected="true">Gempa Terkini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dirasakan-tab" data-bs-toggle="tab" href="#dirasakan" role="tab" aria-controls="profile" aria-selected="false">Dirasakan</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="terkini" role="tabpanel" aria-labelledby="terkini-tab">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled gempa mb-1">
                                <li class="judul-gempa mb-2">{{ $gempa[0]->gempa->Tanggal }}  , {{ $gempa[0]->gempa->Jam }}</li>
                                <li class="image-with-text">
                                    <img class="icon-gempa" src="https://maritim.kalbar.bmkg.go.id/images/gempabumi/magnitude.png" width="25" height="25" alt=""> 
                                    <span>Magnitude : <br/>
                                    <span class="deskripsi-gempa">{{ $gempa[0]->gempa->Magnitude }}</span></span>
                                </li>
                                <li class="image-with-text">
                                    <object  class="icon-gempa" data="{{ asset('frontend/images/widgets/gempa/kedalaman.webp') }}" width="25" height="25"> </object> 
                                    <span>Kedalaman : <br/><span class="deskripsi-gempa">{{ $gempa[0]->gempa->Kedalaman }}</span></span>
                                </li>
                                <li class="image-with-text">
                                    <object data="{{ asset('frontend/images/widgets/gempa/koordinat.webp') }}" width="25" height="25"> </object> 
                                    <span>Lokasi : <br/><span class="deskripsi-gempa">{{ $gempa[0]->gempa->Lintang }} - {{ $gempa[0]->gempa->Bujur }}</span></span>
                                </li>
                            </ul>
                        </div>
                        <ul class="list-unstyled gempa">
                            <li class="image-with-text">
                                <img class="icon-gempa" src="https://maritim.kalbar.bmkg.go.id/images/gempabumi/lokasi.png" width="25" height="25" alt=""> 
                                <span>Lokasi : <br/><span class="deskripsi-gempa">{{ $gempa[0]->gempa->Wilayah }}</span></span>
                            </li>
                            <li class="image-with-text">
                                <object data="{{ asset('frontend/images/widgets/gempa/tsunami.webp') }}" width="25" height="25"> </object> 
                                <span>Potensi : <br/><span class="deskripsi-gempa">{{ $gempa[2]->gempa->Potensi }}</span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="dirasakan" role="tabpanel" aria-labelledby="dirasakan-tab">
                        <div class="row">
                            <div class="col-5 px-0">
                                <a href="https://ews.bmkg.go.id/tews/data/{{ $gempa[2]->gempa->Shakemap }}" class="fancybox img-hover-v1" rel="gallery1" title="Gempabumi Dirasakan">
                                    <img class="img-fluid" src="https://ews.bmkg.go.id/tews/data/{{ $gempa[2]->gempa->Shakemap }}" alt="">
                                </a>
                            </div>
                            <div class="col-7">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection