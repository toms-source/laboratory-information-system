<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;

class HealthRecords extends Component
{
    public function render()
    {
        return view('livewire.client.dashboard.health-records')->extends('layouts.client');
        
    }
}
