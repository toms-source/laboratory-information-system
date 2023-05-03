<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.client.dashboard.profile')->extends('layouts.client');
    }
}
