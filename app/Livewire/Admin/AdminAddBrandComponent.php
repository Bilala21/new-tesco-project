<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddBrandComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;

    public function addBrand() {
        $brand = new Brand();
        $brand->name = $this->name;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('brands',$imageName);
        $brand->image = $imageName;
        $brand->save();
        session()->flash('message','Brand Added Successfully!');

        
    }
    public function render()
    {
        return view('livewire.admin.admin-add-brand-component')->layout('layouts.admin');
    }
}
