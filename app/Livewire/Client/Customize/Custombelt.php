<?php

namespace App\Livewire\Client\Customize;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Custombelt extends Component
{
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

    public $logocolor = 'transparent';
    public $loopcolor = 'transparent';
    public $beltcolor = 'transparent';
    public $stichcolor = 'transparent';

    public function render()
    {
        return view('livewire.client.customize.custombelt');
    }
}
