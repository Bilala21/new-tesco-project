<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;


class AdminCategoryComponent extends Component
{

     // delete the category
     public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category Deleted Successfully!');
    }

  
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-category-component',['categories' => $categories])->layout('layouts.admin');
    }
}
