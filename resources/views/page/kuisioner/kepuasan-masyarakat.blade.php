@extends('layouts.sidebar-left')
@section('judul')
Kepuasan Masyarakat
@endsection
@php
$sidebar = 'kuisioner';
@endphp
@section('konten')
<div class="content col-lg-9">
    <!-- Blog -->
    <div id="blog" class="single-post">
        <!-- Post single item-->
        <div class="post-item">
            <div class="post-item-wrap">
                <div class="post-item-description">
                    <p>Indeks Kepuasan Masyarakat (IKM) merupakan salah satu tolok ukur untuk menggambarkan persepsi penerima pelayanan publik terhadap pelayanan publik yang diselenggarakan oleh pemberi pelayanan publik.</p>
                    @php
                    $mytime = Carbon\Carbon::now();
                    @endphp
					<a target="_blank" href="http://eskm.bmkg.go.id/survey/663754/0/2/{{ $mytime->format('Y') }}-{{ $mytime->format('m') }}/{{ $mytime->format('Y') }}/0"><button type="button" class="btn">Isi Sekarang</button></a>
                </div>
            </div>
        </div>
        <!-- end: Post single item-->
    </div>
</div>
@endsection