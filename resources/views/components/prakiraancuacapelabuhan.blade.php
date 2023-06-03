<div class="team-member pt-4 pb-3 carouselcuaca" style="background-image: url('{{ asset('frontend/images/widgets/prakiraan-cuaca-pelabuhan/background.jpg') }}')">
    <div class="team-image mb-0 mt-2">
        <div class="icon mb-0">
            <img alt="" src="{{ asset('frontend/images/widgets/prakiraan-cuaca-pelabuhan/icon') }}/{{ $cuaca }}.png" class="iconawan">									
        </div>
                           
    </div> 
    {{ $cuaca }}
    <div class="team-desc pt-0">
        <p>
            <i class="fa fa-arrow-right"></i> {{ $arahangin }}<br>
            <i class="fa fa-wind"></i> {{ $kecepatanangin }} knot<br>   
            <i class="fa fa-water"></i> {{ $gelombang }}
        </p>
        Pelabuhan
        <h3><i class="fa fa-ship"></i> {{ $pelabuhan }}</h3>
    </div>
</div>