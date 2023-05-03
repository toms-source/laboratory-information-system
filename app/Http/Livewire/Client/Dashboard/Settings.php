<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;
use App\Models\User;

class Settings extends Component
{
    public $name;
    public $contact;
    public $address;
    public $age;
    public $gender;
    public $birthday;

    protected $rules = [
        'name' => 'required|min:6',
        'address' => 'required|min:6',
        'contact' => 'required|min:9',
        'age' => 'min:3',
    ];

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->contact = auth()->user()->contact;
        $this->address = auth()->user()->address;
        $this->age = auth()->user()->age;
        $this->gender = auth()->user()->gender;
        $this->birthday = auth()->user()->birthday;
       // dd($this->name);
    }

    public function updateSettings()
    {
        $this->validate();

        $this->client_id = auth()->user()->id;
        $i = 0;
        $i = $this->client_id;
        User::find($i)->update([
        'name' => $this->name,
        'address'=> $this->address,
        'contact'=> $this->contact,
        'age'=> $this->age,
        'gender'=> $this->gender,
        'birthday'=> $this->birthday,
        ]);

        session()->flash('success', 'Update successfully!');
    }
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function hide()
    {
        session()->forget('success');
    }

    public function render()
    {
        return view('livewire.client.dashboard.settings')->extends('layouts.client');
    }
}
