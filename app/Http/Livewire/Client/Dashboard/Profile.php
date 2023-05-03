<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $contact;
    public $address;
    public $client_id;
    // public $gender;
    // public $birthday;
    
    public function render()
    {
        return view('livewire.client.dashboard.profile')->extends('layouts.client');
    }
    
    public function mount(){
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->contact = auth()->user()->contact;
        $this->address = auth()->user()->address;
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
