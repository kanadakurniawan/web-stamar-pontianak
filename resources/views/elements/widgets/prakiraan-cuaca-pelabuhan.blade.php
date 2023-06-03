<div class="carousel team-members team-members-shadow" data-dots="false" data-items="3">
    @for ($i=0; $i < 20; $i++) 
    <div class="team-member pt-4 pb-3 carouselcuaca" style="background-image: url('{{ asset('frontend/images/widgets/prakiraan-cuaca-pelabuhan/background.jpg') }}')">
        <div class="team-image mb-0 mt-2">
            <div class="icon mb-0">
                <img alt="" src="{{ asset('frontend/images/widgets/prakiraan-cuaca-pelabuhan/icon') }}/{{ $dataPelabuhan[$i][0]['weather'] }}.png" class="iconawan">									
            </div>
                               
        </div> 
        {{ $dataPelabuhan[$i][0]['weather']}}
        <div class="team-desc pt-0">
            <p>
                <i class="fa fa-arrow-right"></i> {{ $dataPelabuhan[$i][0]['wind_from'] }} - {{ $dataPelabuhan[$i][0]['wind_to'] }}<br>
                <i class="fa fa-wind"></i> {{ $dataPelabuhan[$i][0]['wind_speed_min'] }} - {{ $dataPelabuhan[$i][0]['wind_speed_max'] }} knot<br>   
                <i class="fa fa-water"></i> {{ $dataPelabuhan[$i][0]['wave_desc'] }}
            </p>
            Pelabuhan
            <h3><i class="fa fa-ship"></i> {{ $namaPelabuhan[$i] }}</h3>
        </div>
    </div>
    @endfor
    
</div>