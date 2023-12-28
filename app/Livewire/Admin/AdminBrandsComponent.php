<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class AdminBrandsComponent extends Component
{

    public function deleteBrand($id) {
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('message','Brand Deleted Successfully!');
    }
   
    public function render()
    {
        $brands = Brand::all();
        return view('livewire.admin.admin-brands-component',['brands' => $brands])->layout('layouts.admin');
    }
}
