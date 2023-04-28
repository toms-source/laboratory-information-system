<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.client.dashboard.dashboard')->extends('layouts.client');
    }
}
