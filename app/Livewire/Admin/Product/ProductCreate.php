<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\ProductForm;
use App\Livewire\Admin\Product\ProductTable;

#[Layout('layouts.admin')]
class ProductCreate extends Component
{
    use WithFileUploads;

    public ProductForm $form;

    public $modalProductCreate = false;
    public $resultDiv = false;
    public $search = "";
    public $results;

    public function searchCategory(){
        if(!empty($this->search)){
            $this->results = Category::orderby('name','asc')
                      ->select('*')
                      ->where('name','like','%'.$this->search.'%')
                      ->limit(5)
                      ->get();

            $this->resultDiv = true;
        }else{
            $this->resultDiv = false;
        }
    }
    public function fetchDetailById($id = 0){

        $result = Category::select('*')
                    ->where('id',$id)
                    ->first();

        $this->search = $result->name;
        $this->form->category_id = $result->id;
        $this->resultDiv = false;
    }

    public function save()
    {
        $this->validate();

        $response = $this->form->store();

        is_null($response)
            ? $this->dispatch('notify', title: 'success', message: 'Product created successfully')
            : $this->dispatch('notify', title: 'error', message: 'Something goes wrong!');

        $this->dispatch('dispatch-product-create-save')->to(ProductTable::class);
    }

    public function render()
    {
        return view('livewire.admin.product.product-create');
    }
}
