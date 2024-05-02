<?php

namespace App\Livewire\Client\ProductByCategory\Baseball\Battinggloves;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Youth extends Component
{
    public function render()
    {
        return view('livewire.client.product-by-category.baseball.battinggloves.youth', [
            'products' => Product::where('category_name', 'baseball-batting-gloves-youth')->paginate(6)
        ]);
    }
}
