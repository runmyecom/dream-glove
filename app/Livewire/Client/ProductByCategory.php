<?php

namespace App\Livewire\Client;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class ProductByCategory extends Component
{
    public $category;

    public function mount($slug = null){
        $this->category = $slug;
    }
    public function render()
    {
        return view('livewire.client.product-by-category', [
            'products' => Product::where('category_name', 'guard')->get()
        ]);
    }
}
