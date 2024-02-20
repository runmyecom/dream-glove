<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class GuestNavigation extends Component
{

    public function toNext(){
        if(Auth::check()){
            return redirect(route('shopping-cart'));
        } else {
            $this->dispatch('notify', title: 'error', message: 'Please login to your account!!');
        }
    }

    public function render()
    {
        return view('livewire.guest-navigation', [
            'categories' => Category::get()
        ]);
    }
}
