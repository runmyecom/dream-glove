<?php

namespace App\Livewire\Client\Customize\BattingGloves;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class BattingGloveWave extends Component
{
    protected $listeners = ['selected-color' => 'handleEvent'];

    public $cartitems, $sub_total = 0, $total = 0, $tax = 0;

    public $colors = [
        'white' => '#ffffff',
        'black' => '#000000',
        'navyblue' => '#1e1e2d',
        'red' => '#c53f3f',
        'royalblue' => '#33417d',
        'grey' => '#908f8d',
        'pink' => '#ffa7bd',
        'orange' => '#f1773f',
        'forestgreen' => '#263524',
        'yellow' => '#ffe947',
    ];

    public $sizes = [
        'Small',
        'Medium',
        'Large',
        'XL',
        'XXL',
        'Women Small',
        'Women Medium',
        'Women Large',
        'Youth Small',
        'Youth Medium',
        'Youth Large',
        'Youth XL',
    ];

    public $size = '';
    public $selectedColor = '';

    public $palmcolor = 'transparent';
    public $leathercolor = 'transparent';
    public $meshcolor = 'transparent';
    public $binding = 'transparent';
    public $wristbandcolor = 'transparent';
    public $strap = 'transparent';
    public $strapbinding = 'transparent';
    public $logooutline = 'transparent';
    public $toplogocolor = 'transparent';
    public $bottomlogocolor = 'transparent';
    public $rightlogocolor = 'transparent';
    public $patches = 'transparent';
    public $stiching = 'transparent';
    public $righttextbox = true;
    public $righttextbg = 'white';
    public $righttext = 'Vimal Bha';
    public $rightTextColor = 'black';
    public $rightTextFont = '';
    public $lefttextbox = true;
    public $lefttextbg = 'white';
    public $lefttext = 'Vimal Bha';
    public $leftTextColor = 'black';
    public $leftTextFont = '';

    public function handleEvent($data){
        foreach($data as $color){
            $this->selectedColor = $color;
        }
    }


    public function render()
    {
        return view('livewire.client.customize.batting-gloves.batting-glove-wave');
    }
}
