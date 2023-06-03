<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrakiraanCuacaPelabuhanItem extends Component
{
    // public $cuaca;
    // public $arahangin;
    // public $kecepatanangin;
    // public $gelombang;
    // public $pelabuhan;

    // public function __construct($cuaca,$arahangin,$kecepatanangin,$gelombang,$pelabuhan)
    // {
    //     $this->cuaca , $cuaca;
    //     $this->arahangin , $arahangin;
    //     $this->kecepatanangin , $kecepatanangin;
    //     $this->gelombang , $gelombang;
    //     $this->pelabuhan , $pelabuhan;
    // }
    public function __construct(
        public string $cuaca,
        public string $arahanginfrom,
        public string $arahanginto,
        public string $kecepetananginfrom,
        public string $kecepetananginto,
        public string $gelombang,
        public string $pelabuhan,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.prakiraan-cuaca-pelabuhan-item');
    }
}
