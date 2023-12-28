<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;

class AdminBlogsComponent extends Component
{
    public function deleteBlog($id) {
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('message','Blog Deleted Successfully!');
    }
    public function render()
    {
        $blogs = Blog::all();
        return view('livewire.admin.admin-blogs-component',['blogs' => $blogs])->layout('layouts.admin');
    }
}
