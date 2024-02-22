<?php

namespace App\Livewire\Client\ProductByCategory\Baseball\FieldingGloves;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class OutfieldPremier extends Component
{
    public function render()
    {
        return view('livewire.client.product-by-category.baseball.fielding-gloves.outfield-premier',[
            'products' => Product::where('category_name', 'baseball-fielding-gloves-outfield-premier')->get()
        ]);
    }
}
