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

    public $sizes = [
        '22inch',
        '24inch',
        '26inch',
        '28inch',
        '30inch',
        '32inch',
        '34inch',
        '36inch',
        '38inch',
        '40inch',
        '42inch',
        '44inch',
        '46inch(+$15)',
        '48inch(+$15)',
        '50inch(+$15)',
    ];

    public $logocolor = 'transparent';
    public $loopcolor = 'transparent';
    public $beltcolor = 'transparent';
    public $stichcolor = 'transparent';
    public $customtextbox = false;
    public $outertext = '';
    public $customtext = '';
    public $customTextColor = 'red';

    public function render()
    {
        return view('livewire.client.customize.custombelt');
    }
}
