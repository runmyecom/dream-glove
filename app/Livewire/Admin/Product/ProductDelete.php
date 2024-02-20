<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ProductImages;
use Livewire\Attributes\Locked;
use App\Livewire\Admin\Product\ProductTable;

class ProductDelete extends Component
{
    #[Locked]
    public $id;

    #[Locked]
    public $name;

    public $modalProductDelete = false;

    #[On('dispatch-product-table-delete')]
    public function set_product($id, $name)
    {
        $this->id = $id;
        $this->name = $name;

        $this->modalProductDelete = true;
    }

    public function del()
    {
        $product = Product::where('id', $this->id)->first();

        $images = ProductImages::where('product_unique_id', $product->unique_id)->get();
        foreach($images as $image){
            unlink(public_path('uploads/all/' . $image->image));
            $image->delete();
        }

        $del = Product::destroy($this->id);

        ($del)
        ? $this->dispatch('notify', title: 'success', message: 'Product deleted')
        : $this->dispatch('notify', title: 'error', message: 'Something goes wrong!');

        $this->modalProductDelete = false;

        $this->dispatch('dispatch-product-delete-del')->to(ProductTable::class);
    }

    public function render()
    {
        return view('livewire.admin.product.product-delete');
    }
}
