<?php

namespace App\Livewire\Client\Customize\Gloves;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Selectweb extends Component
{
    public function render()
    {
        return view('livewire.client.customize.gloves.selectweb');
    }
}
