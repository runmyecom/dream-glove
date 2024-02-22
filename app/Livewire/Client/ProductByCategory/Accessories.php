<?php

namespace App\Livewire\Client\ProductByCategory;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Accessories extends Component
{
    public function render()
    {
        return view('livewire.client.product-by-category.accessories', [
            'products' => Product::where('category_name', 'accessories')->get()
        ]);
    }
}
