<?php

namespace App\Livewire\Client\ProductByCategory\Apparel;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Belts extends Component
{
    public function render()
    {
        return view('livewire.client.product-by-category.apparel.belts',[
            'products' => Product::where('category_name', 'apparel-belts')->get()
        ]);
    }
}
