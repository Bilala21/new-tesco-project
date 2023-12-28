<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class HomeCategoriesComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.home-categories-component',['categories' => $categories])->layout('layouts.base');
    }
}
