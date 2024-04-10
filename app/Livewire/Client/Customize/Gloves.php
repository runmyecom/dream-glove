<?php

namespace App\Livewire\Client\Customize;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Gloves extends Component
{
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

    public $bindingcolor = 'transparent';
    public $fingerpadcolor = 'transparent';
    public $homeplatecolor = 'transparent';
    public $logocolor = 'transparent';
    public $textcolor = 'transparent';
    public $wristcolor = 'transparent';

    public function render()
    {
        return view('livewire.client.customize.gloves');
    }
}
