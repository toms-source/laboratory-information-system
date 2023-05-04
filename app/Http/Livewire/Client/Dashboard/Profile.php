<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $contact;
    public $address;
    public $client_id;
    public $gender;
    public $birthday;
    public $age;

    public $image;

    public function render()
    {
        return view('livewire.client.dashboard.profile')->extends('layouts.client');
    }
    
    public function mount(){
        $this->name = auth()->user()->name;
        $this->contact = auth()->user()->contact;
        $this->address = auth()->user()->address;
        $this->age = auth()->user()->age;
        $this->gender = auth()->user()->gender;
        $this->birthday = date('M-d-Y', strtotime(auth()->user()->birthday));
    }

    
    // public function insert(){
    //     $this->client_id = Auth::user()->id;
    //     $i = 0;
    //     $i = $this->client_id;
    //     User::find($i)->update([
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'address'=> $this->address,
    //         'contact'=> $this->contact
    //    ]);
    // }

}
