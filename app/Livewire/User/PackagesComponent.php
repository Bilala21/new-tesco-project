<?php

namespace App\Livewire\User;

use Livewire\Component;

class PackagesComponent extends Component
{
    public function render()
    {
        return view('livewire.user.packages-component')->layout('layouts.user');
    }
}
