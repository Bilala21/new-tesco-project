<?php

namespace App\Livewire\User;

use Livewire\Component;

class UploadFilesComponent extends Component
{
    public function render()
    {
        return view('livewire.user.upload-files-component')->layout('layouts.user');
    }
}
