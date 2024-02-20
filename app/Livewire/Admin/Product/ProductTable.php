<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Livewire\Forms\ProductForm;

class ProductTable extends Component
{
    use WithPagination;

    public ProductForm $form;
    public $checked = [];
    public $selectall = false;

    public
        $paginate = 10,
        $sortBy = 'products.id',
        $sortDirection = 'desc';

    #[On('dispatch-product-create-save')]
    #[On('dispatch-product-create-edit')]
    #[On('dispatch-product-delete-del')]
    public function render(){
        return view('livewire.admin.product.product-table', [
            'products' => Product::where('name', 'like', '%'.$this->form->name.'%')
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->paginate)
        ]);
    }
}
