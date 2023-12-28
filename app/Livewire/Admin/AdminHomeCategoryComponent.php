<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminHomeCategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-home-category-component')->layout('layouts.admin');
    }
}
