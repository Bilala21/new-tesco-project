<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class AdminEditBrandComponent extends Component
{
    // public function mount($id) {
    //     $brand = Brand::where('id',$id)->first();
    //     $this->name = $brand->name;
    //     $this->image = $brand->image;

    // }
    public function render()
    {
        return view('livewire.admin.admin-edit-brand-component')->layout('layouts.admin');
    }
}
