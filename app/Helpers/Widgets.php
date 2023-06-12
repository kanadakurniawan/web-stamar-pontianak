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

    static function gempa(){
        $dataXML = ["https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml","https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml","https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml"]; 
        
        for ($i=0; $i < 3; $i++) { 
            $gempa[]=simplexml_load_file($dataXML[$i]);
        }
        return $gempa;
    }

    function infoCuacaDwikora(){
        $sumber = 'http://202.90.199.132/aws-new/data/station/latest/3000000011';
        $konten = file_get_contents($sumber);
        $data = json_decode($konten, true);
        $infoCuacaDwikora = json_decode($konten, true);
        // $infoCuacaDwikora = $data['aaData'];
        return $infoCuacaDwikora;
    }

    function prakiraanCuacaDwikora(){
        date_default_timezone_set('Asia/Jakarta');
        $dwikora = file_get_contents("https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0009_Dwikora.json");
        $data1 = json_decode($dwikora, true);
        $prakiraanCuacaDwikora = $data1['data'];
        return $prakiraanCuacaDwikora;
    }

    function peringatanDini(){
        $pontianak = file_get_contents("https://peta-maritim.bmkg.go.id/public_api/perairan/D.10_Perairan%20Pontianak%20-%20Mempawah.json");
        $datapontianak = json_decode($pontianak, true);
        $peringatanDini = $datapontianak['data'];
        return $peringatanDini;
    }

    static function prakiraanCuacaKota(){
        $kalbar=simplexml_load_file("http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-KalimantanBarat.xml") or die("Error: Cannot create object");
        $cuaca = $kalbar->forecast->area;
        return $cuaca;
    }

    static function pilihWaktuPrakiraanKota(){
        date_default_timezone_set("Asia/Jakarta");
        $sekarang = date("H");
        //Menentukan batas batas jamnya	
        $batas01 = 7;
        $batas02 = 13;
        $batas03 = 19;
        if ($sekarang < $batas01){ $waktu = 0; }
        elseif ($sekarang >= $batas01 && $sekarang < $batas02) { $waktu = 1; }
        elseif ($sekarang >= $batas02 && $sekarang < $batas03) { $waktu = 2; }
        elseif ($sekarang >= $batas03) { $waktu = 3; }
        else { $waktu = 0; }
        return $waktu;
    }
    static function namaCuaca($weathernya){
        if ( $weathernya == 0 ) { $namaCuaca = "Cerah";
        } elseif ( $weathernya == 1 ) { $namaCuaca = "Cerah Berawan" ;
        } elseif ( $weathernya == 2 ) { $namaCuaca = "Cerah Berawan" ;
        } elseif ( $weathernya == 3 ) { $namaCuaca = "Berawan" ;
        } elseif ( $weathernya == 4 ) { $namaCuaca = "Berawan Tebal" ;
        } elseif ( $weathernya == 5 ) { $namaCuaca = "Udara Kabur"; 
        } elseif ( $weathernya == 10 ) { $namaCuaca = "Asap" ;
        } elseif ( $weathernya == 45 ) { $namaCuaca = "Kabut";
        } elseif ( $weathernya == 60 ) { $namaCuaca = "Hujan Ringan";
        } elseif ( $weathernya == 61 ) { $namaCuaca = "Hujan Sedang";
        } elseif ( $weathernya == 63 ) { $namaCuaca = "Hujan Lebat";
        } elseif ( $weathernya == 80 ) { $namaCuaca = "Hujan Lokal";
        } elseif ( $weathernya == 95 ) { $namaCuaca = "Hujan Petir";
        } elseif ( $weathernya == 97 ) { $namaCuaca = "Hujan Petir";
        } else { $namaCuaca = ""; }
        return $namaCuaca;
    }
}
