<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{
    public $name;
    public $contact;
    public $email;
    public $confirm_email;
    public $password;
    public $address;
    public $confirm_password;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'address' => 'required|min:6',
        'contact' => 'required|min:9',
        'password' => ['required', 'string', 'min:8', 
            'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/'],
        'confirm_password' => ['required', 'same:password'],
        'confirm_email' => ['required', 'same:email'],
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'address'=> $this->address,
            'contact'=> $this->contact,
            'password' => Hash::make($this->password)
        ]);
        
        event(new Registered($user));

        auth()->login($user);

        session()->flash('success', 'Registration successful! Welcome to BND Laboratories!');
        return redirect()->route('client.dashboard');
    }

    public function switchToLogin()
    {
        $this->emit('switchToLogin');
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    // wire:model.defer = 'variable_name'
    //public function updated()

    public function render()
    {
        return view('livewire.auth.register');
    }
}
