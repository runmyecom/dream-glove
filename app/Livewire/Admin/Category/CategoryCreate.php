<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use App\Livewire\Forms\CategoryForm;
use App\Livewire\Admin\Category\CategoryTable;

class CategoryCreate extends Component
{
    public CategoryForm $form;
    public $resultDiv = false;
    public $search = "";
    public $results;

    public $modalCategoryCreate = false;

    public function searchParent(){
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
        $this->form->parent_id = $result->id;
        $this->resultDiv = false;
    }

    public function save()
    {
        $this->validate();

        $response = $this->form->store();

        is_null($response)
            ? $this->dispatch('notify', title: 'success', message: 'Category created successfully')
            : $this->dispatch('notify', title: 'error', message: 'Something goes wrong!');

        $this->dispatch('dispatch-category-create-save')->to(CategoryTable::class);
    }

    public function render()
    {
        return view('livewire.admin.category.category-create');
    }
}
