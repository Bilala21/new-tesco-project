<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use Livewire\Component;

class HomeController extends Component
{
    public function render()
    {
        $brands = Brand::all()->take(12);
        $products = Product::paginate(12);
        $sliders = HomeSlider::where('status',1)->get();
        $latestProducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $categories = Category::all();
        return view('livewire.home-controller',['products' => $products,'sliders' => $sliders,'latestProducts' => $latestProducts,'categories' => $categories,'brands' => $brands])->layout('layouts.base');
    }
}
