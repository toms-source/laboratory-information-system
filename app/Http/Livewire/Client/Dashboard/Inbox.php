<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;

class Inbox extends Component
{
    public function render()
    {
        return view('livewire.client.dashboard.inbox')->extends('layouts.client');
    }
}
