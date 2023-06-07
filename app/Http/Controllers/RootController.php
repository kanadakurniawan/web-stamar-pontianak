<?php

namespace App\Http\Controllers;

use App\Helpers\Widgets;
use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index(Widgets $widget){
        $dataPelabuhan = $widget->prakiraanCuacaPelabuhan();
        $namaPelabuhan = $widget->namaPelabuhan();
        $dataWarning = $widget->warning();

        $besokHari = date('Y-m-d',mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));
        $lusaHari = date('Y-m-d',mktime(0, 0, 0, date("m")  , date("d")+2, date("Y")));
        $iniHari = date('Y-m-d');
        $hari = [$iniHari,$besokHari,$lusaHari];
        for ($x = 0; $x <= 2; $x++) {
            $hariIndo[] = $widget->tanggal_indo($hari[$x],true);
        }

        $infoCuacaDwikora = $widget->infoCuacaDwikora();
        $prakiraanCuacaDwikora = $widget->prakiraanCuacaDwikora();

        $timeutc1 = $prakiraanCuacaDwikora[0]['valid_from'];
        $timeutc2 = $prakiraanCuacaDwikora[0]['valid_to'];
        $timeutc3 = $prakiraanCuacaDwikora[0]['high_tide_time'];
        $time1 = strtotime($timeutc1.' UTC');
        $time2 = strtotime($timeutc2.' UTC');
        $time3 = strtotime($timeutc3.' UTC');
        $valid_from = date("Y-m-d H:i", $time1);
        $valid_to = date("Y-m-d H:i", $time2);
        $high_tide_time = date("Y-m-d H:i", $time3);
        //  Peringatan Dini
        $peringatanDini = $widget->peringatanDini();        
        $waktuutc1 = $peringatanDini[0]['valid_from'];
        $waktuutc2 = $peringatanDini[0]['valid_to'];        
        $waktu1 = strtotime($waktuutc1.' UTC');
        $waktu2 = strtotime($waktuutc2.' UTC');        
        $peringatan_dini_valid_from = date("Y-m-d H:i", $waktu1);
        $peringatan_dini_valid_to = date("Y-m-d H:i", $waktu2);

        return view('index', compact('dataPelabuhan','namaPelabuhan','dataWarning','hariIndo','infoCuacaDwikora','prakiraanCuacaDwikora','valid_from','valid_to','high_tide_time','peringatanDini','peringatan_dini_valid_from','peringatan_dini_valid_to'));
    }
}
