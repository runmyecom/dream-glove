<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Customize extends Component
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

    public $palmcolor = 'transparent';
    public $leathercolor = 'transparent';
    public $meshcolor = 'transparent';
    public $wristbandcolor = 'transparent';
    public $toplogocolor = 'transparent';
    public $bottomlogocolor = 'transparent';
    public $rightlogocolor = 'transparent';

    public function render()
    {
        return view('livewire.client.customize');
    }
}
