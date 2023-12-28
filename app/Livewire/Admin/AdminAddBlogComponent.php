<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $desc;
    public $image;

    public function addBlog() {
        $blog = new Blog();
        $blog->title = $this->title;
        $blog->desc = $this->desc;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('blogs',$imageName);
        $blog->image = $imageName;
        $blog->save();
        session()->flash('message','Blog Added Successfully!');

        
    }
    public function render()
    {
        return view('livewire.admin.admin-add-blog-component')->layout('layouts.admin');
    }
}
