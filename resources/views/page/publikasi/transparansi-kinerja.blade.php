@extends('layouts.sidebar-left')
@section('judul')
Transparansi Kinerja
@endsection
@php
$sidebar = 'publikasi';
@endphp
@section('konten')
<div class="content col-lg-9">
    <!-- Blog -->
    <div id="blog" class="single-post">
        <div class="row">
        <!-- Post single item-->
            <div class="panel panel-u">
                <div class="panel-heading">
                    <h4 class="panel-title">Rencana Kinerja Tahunan</h4>
                </div>
                <div class="panel-body">
                    <ul> 	
                        <li><a href="https://maritim.kalbar.bmkg.go.id/images/kinerja/rkt_stamar_ponti_2021.pdf" target="_blank" rel="noopener noreferrer">Rencana Kinerja Tahunan Tahun 2021</a></li>
                        <li><a href="https://maritim.kalbar.bmkg.go.id/images/kinerja/rkt_stamar_ponti_2022.pdf" target="_blank" rel="noopener noreferrer">Rencana Kinerja Tahunan Tahun 2022</a></li>
                        <li><a href="https://maritim.kalbar.bmkg.go.id/images/kinerja/rkt_stamar_ponti_2023.pdf" target="_blank" rel="noopener noreferrer">Rencana Kinerja Tahunan Tahun 2023</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="panel panel-u">
                <div class="panel-heading">
                    <h4 class="panel-title">Perjanjian Kinerja</h4>
                </div>
                <div class="panel-body">
                    <ul> 	
                        <li><a href="https://maritim.kalbar.bmkg.go.id/images/kinerja/pk_stamar_ponti_2021.pdf" target="_blank" rel="noopener noreferrer">Perjanjian Kinerja Tahun 2021</a></li> 	
                        <li><a href="https://maritim.kalbar.bmkg.go.id/images/kinerja/pk_stamar_ponti_2022.pdf" target="_blank" rel="noopener noreferrer">Perjanjian Kinerja Tahun 2022</a></li>
                    </ul>
                </div>
            </div>   
        </div>
    </div>
</div>

        
@endsection