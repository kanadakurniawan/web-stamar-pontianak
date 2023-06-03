@extends('layouts.homepage')
@section('judul')
Beranda
@endsection
@section('css-tambahan')
@endsection
@section('konten')
<section id="page-content">
<div class="container">
    {{-- <div class="row"> --}}
        <div class="col-8">
            <div class="headline">
                <h4 >Prakiraan Cuaca Pelabuhan</h4>
            </div>
            <div class="carousel team-members team-members-shadow" data-dots="false" data-items="3">
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
            <div class="banner">
                <a href="{{ env('BANNER_HOMEPAGE_LINK') }}" target="_blank">
                    <img class="img-fluid" src="{{ asset(env('BANNER_HOMEPAGE')) }}" alt="">
                </a>
            </div>         
        </div>
        <div class="col-4">
        {{-- </div> --}}
    </div>
</div>
</div>
@endsection