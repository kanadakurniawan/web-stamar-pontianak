@extends('layouts.homepage')
@section('judul')
Beranda
@endsection
@section('css-tambahan')
<link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/weather-icon/css/weather-icons.min.css">
<link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/weather-icon/css/weather-icons-wind.min.css">
@endsection
@section('konten')
<section id="page-content">
<div class="container">
    {{-- <div class="row"> --}}
        <div class="col-8">
            <div class="headline">
                <h4 >Prakiraan Cuaca Pelabuhan</h4>
            </div>
            @include('elements.widgets.prakiraan-cuaca-pelabuhan')            
        </div>
        <div class="col-4">
        {{-- </div> --}}
    </div>
</div>
</div>
@endsection