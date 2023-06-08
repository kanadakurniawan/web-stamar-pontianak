@extends('layouts.profil')
@section('judul')
Sejarah
@endsection
@section('konten')
<div class="content col-lg-9">
    <!-- Blog -->
    <div id="blog" class="single-post">
        <!-- Post single item-->
        <div class="post-item">
            <div class="post-item-wrap">
                <div class="post-item-description">
                    <img src="{{ asset ('frontend/images/pages/struktur_organisasi.png') }}" class="img-fluid img-rounded" style="display: block; margin-left: auto; margin-right: auto;" width="552px" height="850px"> 
                </div>
            </div>
        </div>
        <!-- end: Post single item-->
    </div>
</div>
@endsection