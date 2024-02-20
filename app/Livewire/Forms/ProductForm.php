<?php

namespace App\Livewire\Forms;

use Carbon\Carbon;
use Livewire\Form;
use App\Models\Product;
use App\Models\ProductImages;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class ProductForm extends Form
{
    use WithFileUploads;

    public ?product $product;

    #[Validate(['images.*' => 'image|max:1024'])]
    public $images = [];

    #[Validate('required|min:3', as: 'Name')]
    public $name;

    public $slug;
    public $mrp;
    public $description;
    public $keyword;
    public $bullet_1;
    public $bullet_2;
    public $bullet_3;
    public $bullet_4;
    public $bullet_5;
    public $bullet_6;
    public $category_name;
    public $category_id;

    public function setProduct(Product $product){
        $this->product = $product;

        $this->name = $product->name;
        $this->mrp = $product->mrp;
        $this->description = $product->description;
        $this->bullet_1 = $product->bullet_1;
        $this->bullet_2 = $product->bullet_2;
        $this->bullet_3 = $product->bullet_3;
        $this->bullet_4 = $product->bullet_4;
        $this->bullet_5 = $product->bullet_5;
        $this->bullet_6 = $product->bullet_6;
        $this->category_name = $product->category_name;
        $this->category_id = $product->category_id;
    }

    public function store(){
        // Product::create($this->except('product'));

        $uniqId = Carbon::now()->timestamp . uniqid();

        $prod = new Product();
        $prod->name = $this->name;
        $prod->mrp = $this->mrp;
        $prod->description = $this->description;
        $prod->bullet_1 = $this->bullet_1;
        $prod->bullet_2 = $this->bullet_2;
        $prod->bullet_3 = $this->bullet_3;
        $prod->bullet_4 = $this->bullet_4;
        $prod->bullet_5 = $this->bullet_5;
        $prod->bullet_6 = $this->bullet_6;
        $prod->category_name = $this->category_name;
        $prod->category_id = $this->category_id;
        $prod->unique_id = $uniqId;

        foreach ($this->images as $key => $image) {
            $pimage = new ProductImages();
            $pimage->product_unique_id = $uniqId;

            $imageName = Carbon::now()->timestamp . $key . '.' . $this->images[$key]->extension();
            $this->images[$key]->storeAs('all', $imageName );

            $pimage->image = $imageName;
            $pimage->save();

            // $img = ImageIntervention::make($photo)->resize(800, null, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->encode();
            // $pimage->image = base64_encode($img);
            // $pimage->save();
        }

        $prod->save();
        $this->reset();
    }

    public function update(){
        $this->product->update($this->except('product'));
    }
}
