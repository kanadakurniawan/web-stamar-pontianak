<div class="widget">
    <h4 class="widget-title">Prakiraan Cuaca Kota</h4>
    <div class="carousel team-members team-members-shadow" data-dots="false" data-items="1" data-autoplay="true" data-autoplay-timeout="2000">
        @php
        $cuacaKota = Widgets::prakiraanCuacaKota();
        $waktu = Widgets::pilihWaktuPrakiraanKota();
        $waktuPrakiraan = ["Pagi Hari","Siang Hari","Malam Hari","Dini Hari"];
        @endphp
        @foreach ($cuacaKota as $wil)
        @php
            $cuaca = $wil->parameter[6]->timerange[$waktu]->value[0];
            $namaCuaca = Widgets::namaCuaca($cuaca);
            $suhu = $wil->parameter[5]->timerange[0]->value[0];
            $suhu01 = $wil->parameter[4]->timerange[0]->value;
            $suhu02 = $wil->parameter[2]->timerange[0]->value;
            $kelembaban = $wil->parameter[0]->timerange[0]->value;
            $kelembaban01 = $wil->parameter[3]->timerange[0]->value;
            $kelembaban02 = $wil->parameter[1]->timerange[0]->value;
            $arahangin = $wil->parameter[7]->timerange[0]->value[1];
            $kecepatanangin = $wil->parameter[8]->timerange[0]->value;
        @endphp
        <div class="py-4 text-center" style="background-image: url('https://maritim.kalbar.bmkg.go.id/images/cuaca/{{ $cuaca }}-am.jpg')">
            <div class="text-light">
                <strong>{{ $waktuPrakiraan[$waktu] }}</strong>	
                <div>
                    <i class="fa fa-map-marker"></i>&nbsp; {{ $wil->name }}
                </div>														
                <div class="icon mt-3">
                    <img class="iconawan" alt="" src="https://maritim.kalbar.bmkg.go.id/images/cuaca/{{ $cuaca }}-am.png">                    
                    <div class="mt-3">{{ $namaCuaca }}</div>
                </div>	                
                <div>
                    <i class="fa fa-temperature-half"></i> {{ $suhu }} &#176C &nbsp; &nbsp; <i class="fa-solid fa-droplet"></i>{{ $kelembaban }} %
                </div>
                <div>
                    <i class="fa fa-wind"></i>&nbsp; {{ $kecepatanangin }} knot &nbsp;&nbsp;
                    <i class="fa fa-compass"></i>&nbsp;{{ $arahangin }}
                </div>
                
                    
            </div>									
                
        </div>
        @endforeach
    </div>
</div>