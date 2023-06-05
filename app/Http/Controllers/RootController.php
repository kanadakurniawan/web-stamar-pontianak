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
        return view('index', compact('dataPelabuhan','namaPelabuhan','dataWarning','hariIndo'));
    }
}
