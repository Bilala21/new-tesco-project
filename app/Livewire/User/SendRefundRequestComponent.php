<?php

namespace App\Livewire\User;

use Livewire\Component;

class SendRefundRequestComponent extends Component
{
    public function render()
    {
        return view('livewire.user.send-refund-request-component')->layout('layouts.user');
    }
}
