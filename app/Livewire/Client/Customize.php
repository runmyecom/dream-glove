<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Customize extends Component
{
    public $cartitems, $sub_total = 0, $total = 0, $tax = 0;

    public $brandtextcolor = 'transparent';
    public $brandlogocolor = 'transparent';
    public $bindcolor = 'transparent';
    public $lacescolor = 'transparent';
    public $wristcolor = 'transparent';

    public function render()
    {
        return view('livewire.client.customize');
    }
}
