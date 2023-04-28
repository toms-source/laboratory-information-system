<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Index extends Component
{
    public $switch = false;

    protected $listeners = [
        'switchToRegister' => 'switch',
        'switchToLogin' => 'switch',
    ];

    public function switch()
    {
        $this->switch = !$this->switch;
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }

    public function hide()
    {
        session()->forget('info');
    }

    public function render()
    {
        return view('livewire.client.index')->extends('layouts.app');
    }
}
