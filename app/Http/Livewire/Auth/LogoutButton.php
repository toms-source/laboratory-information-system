<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class LogoutButton extends Component
{
    public function render()
    {
        return view('livewire.auth.logout-button');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }

}
