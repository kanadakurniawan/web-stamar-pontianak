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
            <div class="col-md-6">
                <div class="m-t-30">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScP3ydrLr_WqiA5KQly1l6CV8T8QAXskEVAph-i-apsQdCIQQ/viewform?embedded=true" width="100%" height="1300" frameborder="0" marginheight="0" marginwidth="0">Memuat...</iframe>                    
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-uppercase">Alamat & Peta</h3>
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <ul class="list-icon list-icon-colored">
                                <li><i class="fa fa-map-marker"></i>Jalan Pelabuhan Komplek Pelabuhan Dwikora Pontianak</li>
                                <li><i class="fa fa-phone"></i>(0561) 769906 </li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:stamar.pontianak@bmkg.go.id">stamar.pontianak@bmkg.go.id</a></li>                
                            </ul>
                        </address>
                    </div>                    
                </div>                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8180652469837!2d109.33559731528904!3d-0.020488635562068865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d585c3bd4d803%3A0x5d8b7eeede166639!2sStasiun+Meteorologi+Maritim+Pontianak!5e0!3m2!1sid!2sid!4v1509545265677" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </div>

</div>
@endsection