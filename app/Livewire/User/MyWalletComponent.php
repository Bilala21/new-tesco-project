<?php

namespace App\Livewire\User;

use Livewire\Component;

class MyWalletComponent extends Component
{
    public function render()
    {
        return view('livewire.user.my-wallet-component')->layout('layouts.user');
    }
}
