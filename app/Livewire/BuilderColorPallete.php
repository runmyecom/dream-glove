<?php

namespace App\Livewire;

use Livewire\Component;

class BuilderColorPallete extends Component
{
    public $white = '#fffff';
    public $black = '#000000';
    public $navyblue = '#1e1e2d';
    public $red = '#c53f3f';
    public $royalblue = '#33417d';
    public $grey = '#908f8d';
    public $pink = '#ffa7bd';
    public $orange = '#f1773f';
    public $forestgreen = '#263524';
    public $yellow = '#ffe947';

    public $selectedColor;


    public function render()
    {
        return view('livewire.builder-color-pallete');
    }
}
