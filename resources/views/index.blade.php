@extends('layouts.homepage')
@section('judul')
Beranda
@endsection
@section('css-tambahan')
@endsection
@section('konten')
<section id="page-content">
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
                    <div class="col-md-2 py-3 rounded peringatandini-title">>
                        <p class="align-middle"><i class="fa fa-triangle-exclamation fa-2xl mx-auto d-block"></i></p>
                        <p class="align-middle"><strong> Peringatan Dini</strong></p>
                    </div>
                    <div class="col-md-10 p-2 peringatandini carousel" data-dots="false" data-items="1" data-autoplay="true" data-autoplay-timeout="2000">
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
        </div>
    </div>
</div>
</div>
@endsection