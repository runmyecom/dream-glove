<?php

namespace App\Livewire\Client\Customize\BattingGloves;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class SelectType extends Component
{
    public function render()
    {
        return view('livewire.client.customize.batting-gloves.select-type');
    }
}
