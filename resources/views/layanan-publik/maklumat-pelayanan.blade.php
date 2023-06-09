@extends('layouts.sidebar-left')
@section('judul')
Maklumat Pelayanan
@endsection
@section('konten')
<div class="content col-lg-9">
    <!-- Blog -->
    <div id="blog" class="single-post">
        <!-- Post single item-->
            <div style="margin-left:10px">
                <img class="img-thumbnail mx-auto d-block" src="{{ asset('frontend/images/pages/bmkg-icon.png') }}"/>
                <blockquote>
                <h4 class="text-center mt-3">Maklumat Pelayanan</h4>
                <p class="text-center">"Dengan ini kami menyatakan siap melayani masyarakat untuk memperoleh informasi Meteorologi, Klimatologi dan Geofisika sesuai dengan standar pelayanan yang telah ditetapkan, apabila tidak menepati janji ini, kami siap menerima sanksi sesuai dengan peraturan perundang-undangan yang berlaku."</p>
                <p class="text-right">Sumber : BMKG Pusat</p> 
                </blockquote>
                   
        </div>
        <!-- end: Post single item-->
    </div>
</div>
@endsection