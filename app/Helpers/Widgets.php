<?php

namespace App\Helpers;

class Widgets{
    function namaPelabuhan(){
        $namaPelabuhan = ['Dwikora','PPN Pemangkat','Tarempa','Sintete','Sukabangun','PPP Sungai Rengas','PPP Teluk Batang','Tebas Kuala','Penagi','Letung','Kuala Maras','Pulau Laut','Sedanau','Pulau Tiga','Midai','Subi','Serasan','Rasau Jaya','Padang Tikar','Kijing International'];
        return $namaPelabuhan;
    }

    function prakiraanCuacaPelabuhan()
    {
        $files = [
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0009_Dwikora.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0309_PPN%20Pemangkat.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0085_Tarempa.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0088_Sintete.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0089_Sukabangun.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0310_PPP%20Sungai%20Rengas.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0311_PPP%20Teluk%20Batang.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0389_Tebas%20Kuala.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0469_Penagi.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0471_Letung.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0472_Kuala%20Maras.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0473_Pulau%20Laut.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0474_Sedanau.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0475_Pulau%20Tiga.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0476_Midai.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0477_Subi.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0478_Serasan.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0479_Rasau%20Jaya.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0529_Padang%20Tikar.json',
            'https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0587_Kijing%20International%20Port.json'
        ];
        $i=0;
        foreach ($files as $value) {
            $coba = file_get_contents($value);
            $data1 = json_decode($coba, true); 
            $dataPelabuhan[$i] = $data1['data'];
            $i++;
        }
        return $dataPelabuhan;
    }

    function warning(){
        $warningkalbar=simplexml_load_file("http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/WarningsXML-Kalimantan_Barat.xml");
        $warning = $warningkalbar->warnings->reports;
        return $warning;
    } 

    function tanggal_indo($tanggal, $cetak_hari = false)
    {
        $hari = array ( 1 =>    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                    'Minggu'
                );
                
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split 	  = explode('-', $tanggal);
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    }
}
