<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string',
    ];

    public function switchToRegister()
    {
        $this->emit('switchToRegister');
    }

    public function login()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') { // Check if the user has an admin role
                $username = Auth::user()->username;
                return redirect('/admin/dashboard')->with('success', 'Welcome back, ' . $username); 
                // Redirect to the admin panel
            } else {
                return redirect()->route('client.dashboard'); // Redirect to the client dashboard
            }
        }

        session()->flash('danger', "These credentials do not match our records.");
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function hide()
    {
        session()->forget('danger');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
