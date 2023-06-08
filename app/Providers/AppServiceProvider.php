<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Helpers\Widgets;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Widgets $widget): void
    {
        $tanggalTopBar = $widget->tanggal_indo(date('Y-m-d'),true);
        $gempa = $widget->gempa();
        $cuaca = $widget->prakiraanCuacaKota();
        $waktuPrakiraanCuacaKota = $widget->pilihWaktuPrakiraanKota();
        View::share('tanggal', $tanggalTopBar);
        View::share('gempa', $gempa);
        View::share('cuacaKota', $cuaca);
        View::share('waktuPrakiraanCuacaKota', $waktuPrakiraanCuacaKota);
    }
}
