<?php

namespace App\Livewire\User;

use Livewire\Component;

class MyProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.user.my-profile-component')->layout('layouts.user');
    }
}
