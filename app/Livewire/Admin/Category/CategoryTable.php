<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use App\Livewire\Forms\CategoryForm;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;

    public CategoryForm $form;
    public $checked = [];
    public $selectall = false;

    public
        $paginate = 10;

    #[On('dispatch-category-create-save')]
    #[On('dispatch-category-create-edit')]
    #[On('dispatch-category-delete-del')]
    public function render()
    {
        return view('livewire.admin.category.category-table', [
            'categories' => $this->categories
        ]);
    }

    public function getCategoriesProperty(){
        return Category::where('name', 'like', '%'.$this->form->name.'%')
        ->paginate($this->paginate);
    }

}
