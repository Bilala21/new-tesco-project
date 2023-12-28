<?php

namespace App\Livewire\User;

use Livewire\Component;

class PurchaseHistoryComponent extends Component
{
    public function render()
    {
        return view('livewire.user.purchase-history-component')->layout('layouts.user');
    }
}
