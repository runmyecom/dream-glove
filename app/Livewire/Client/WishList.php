<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class WishList extends Component
{
    public function render()
    {
        return view('livewire.client.wish-list');
    }
}
