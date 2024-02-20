<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin')]
class AdminPanel extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-panel');
    }
}
