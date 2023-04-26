<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $admin = [
        'email' => 'admin@gmail',
        'password' => 'admin123'
    ];

    public $email;
    public $password;

    // sample login
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($this->email == $this->admin['email'] && $this->password == $this->admin['password']){
            session()->put('login', true);
            session()->flash('success', 'Success');
            return redirect()->to('/');
        }else{
            session()->flash('danger', 'Email and Password not match');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
