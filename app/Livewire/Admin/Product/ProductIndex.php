<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin')]
class ProductIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.product.product-index');
    }
}
