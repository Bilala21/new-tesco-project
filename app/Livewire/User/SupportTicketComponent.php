<?php

namespace App\Livewire\User;

use Livewire\Component;

class SupportTicketComponent extends Component
{
    public function render()
    {
        return view('livewire.user.support-ticket-component')->layout('layouts.user');
    }
}
