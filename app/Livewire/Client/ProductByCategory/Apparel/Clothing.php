<?php

namespace App\Livewire\Client\ProductByCategory\Apparel;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Clothing extends Component
{
    public function render()
    {
        return view('livewire.client.product-by-category.apparel.clothing',[
            'products' => Product::where('category_name', 'apparel-clothing')->get()
        ]);
    }
}
