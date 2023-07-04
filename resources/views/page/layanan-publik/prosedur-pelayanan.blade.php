@extends('layouts.sidebar-left')
@section('judul')
Prosedur Pelayanan
@endsection
@php
$sidebar = 'layanan publik';
@endphp
@section('konten')
<div class="content col-lg-9">
    <!-- Blog -->
    <div id="blog" class="single-post">
        <!-- Post single item-->
            <div style="margin-left:10px">                
                <img src="{{ asset('frontend/images/pages/alur.jpg') }}" class="img-fluid mx-auto d-block"><br/>
                <a  href="https://maritim.kalbar.bmkg.go.id/uploads/nolrupiah.pdf"><button type="button" class="btn">Unduh PERKA Nol Rupiah</button></a>	
        </div>
        <!-- end: Post single item-->
    </div>
</div>
@endsection