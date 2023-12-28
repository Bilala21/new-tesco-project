<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class AdminProductComponent extends Component
{
    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Product Deleted Successfully!');
    }    
    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.admin-product-component',['products' => $products])->layout('layouts.admin');
    }
}
