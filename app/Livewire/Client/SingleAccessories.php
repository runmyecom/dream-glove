<?php

namespace App\Livewire\Client;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class SingleAccessories extends Component
{
    public $product;
    public $selectedKey = 0;
    public $qty = 1;

    public function mount($slug = null){
        $this->product = Product::where('slug', $slug)->first();
    }

    public function changeImage($key)
    {
        $this->selectedKey = $key;
    }

    public function addToCart($id){
        if(auth()->user()){
            $product = Product::where('id', $id)->first();
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'product_name' => $product->name,
                'product_price' => $product->mrp,
            ];
            Cart::updateOrCreate($data);

            $this->dispatch('updateCartCount');

            is_null($data)
                ? $this->dispatch('notify', title: 'error', message: 'Something goes wrong!')
                : $this->dispatch('notify', title: 'success', message: 'Product added to the cart');
        } else {
            // redirect to login
            return redirect(route('login'));
        }
    }

    public function render()
    {
        return view('livewire.client.single-accessories');
    }
}
