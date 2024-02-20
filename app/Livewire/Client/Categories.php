<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.client.categories', [
            'categories' => Category::tree()
        ]);
    }
}
