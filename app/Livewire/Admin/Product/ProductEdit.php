<?php

namespace App\Livewire\Admin\Product;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ProductImages;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\ProductForm;
use App\Livewire\Admin\Product\ProductTable;

#[Layout('layouts.admin')]
class ProductEdit extends Component
{
    use WithFileUploads;

    public ProductForm $form;

    public $images = [];
    public $product_id;
    public $unique_id;
    public $name;
    public $mrp;
    public $description;
    public $thumbnail;
    public $bullet_1;
    public $bullet_2;
    public $bullet_3;
    public $bullet_4;
    public $bullet_5;
    public $bullet_6;

    public function mount($id)
    {
        $product = Product::where('id', $id)->first();
        $this->product_id = $product->id;
        $this->unique_id = $product->unique_id;
        $this->name = $product->name;
        $this->mrp = $product->mrp;
        $this->description = $product->description;
        $this->thumbnail = $product->thumbnail;
        $this->bullet_1 = $product->bullet_1;
        $this->bullet_2 = $product->bullet_2;
        $this->bullet_3 = $product->bullet_3;
        $this->bullet_4 = $product->bullet_4;
        $this->bullet_5 = $product->bullet_5;
        $this->bullet_6 = $product->bullet_6;

        $this->images = ProductImages::where('product_unique_id', $product->unique_id)->get();
    }

    public function deleteImage($id)
    {
        $image = ProductImages::where('id', $id)->first();
        unlink(public_path('uploads/all/' . $image->image));
        ProductImages::where('id', $id)->delete();
        $this->dispatch('dispatch-product-create-edit')->to(ProductTable::class);
    }

    public function updateProduct()
    {
        $product = Product::where('id', $this->product_id)->first();
        $product->name = $this->name;
        $product->mrp = $this->mrp;
        $product->description = $this->description;
        $product->thumbnail = $this->thumbnail;
        $product->bullet_1 = $this->bullet_1;
        $product->bullet_2 = $this->bullet_2;
        $product->bullet_3 = $this->bullet_3;
        $product->bullet_4 = $this->bullet_4;
        $product->bullet_5 = $this->bullet_5;
        $product->bullet_6 = $this->bullet_6;

        $product->save();

        if($this->images != ''){
            foreach($this->images as $key => $image){
                $pimage = new ProductImages();
                $pimage->product_unique_id = $this->unique_id;

                $imageName = Carbon::now()->timestamp . $key . '.' . $this->images[$key]->extension();
                $this->images[$key]->storeAs('all', $imageName );

                $pimage->image = $imageName;
                $pimage->save();
            }
        }

        $this->images = [];

        $this->dispatch('dispatch-product-create-edit')->to(ProductTable::class);
        $this->dispatch('notify', title: 'success', message: 'Product updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.product.product-edit', [
            'productImages' => ProductImages::where('product_unique_id', $this->unique_id)->get()
        ]);
    }
}
