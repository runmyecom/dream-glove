<?php

namespace App\Livewire\Client\ProductByCategory\Baseball;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Guard extends Component
{
    public function render()
    {
        return view('livewire.client.product-by-category.baseball.guard', [
            'products' => Product::where('category_name', 'baseball-guard')->paginate(6)
        ]);
    }
}
