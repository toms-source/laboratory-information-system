<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;

class Name extends Component
{
    public $name;
    
    public function render()
    {
        return view('livewire.client.dashboard.name');
    }
    public function mount(){
        $this->name = auth()->user()->name;
    }
}
