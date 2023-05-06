<?php

namespace App\Http\Livewire\Client\Dashboard;

use Livewire\Component;
use App\Models\User;
use App\Models\EmergencyContacts;
use App\Events\Settings;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;


class AddContact extends Component
{
        //Emergency Contacts
        public $em_contact, $em_address, $em_email, $em_name, $em_relationship, $em_age, $em_birthday;
        
        protected $rules = [
            'em_name' => 'required|min:5',
            'em_address' => 'required|min:5',
            'em_contact' => 'required|min:11',
            'em_age' => 'required|integer',
            'em_birthday' => 'date',
            'em_email' => 'required|email',
            'em_relationship' => 'required',
        ];
    
    public function addContact()
    {
        // dd($this->em_contact,
        // $this->em_email,
        // $this->em_name,
        // $this->em_relationship,
        // $this->em_age,
        // $this->em_birthday,
        // $this->em_address
        // );
        
        //or  $this->em_contacts[] = auth()->user()->emergencyContacts;
        //$this->em_contacts[] = new EmergencyContacts();

        //$this->user = User::find(auth()->user()->id);

        // $this->name = $this->user->name;
        // $this->contact = $this->user->contact;
        // $this->address =$this->user->address;
        // $this->age = $this->user->age;
        // $this->gender = $this->user->gender;        
        // $this->birthday = date('Y-m-d', strtotime($this->user->birthday));
        // $this->email = $this->user->email;

        $this->validate();
        $add = EmergencyContacts::create([
            'user_id' => auth()->user()->id,
            'name' => $this->em_name,
            'email' => $this->em_email,
            'address'=> $this->em_address,
            'contact'=> $this->em_contact,        
            'birthday'=> $this->em_birthday,
            'age'=> $this->em_age,
            'relationship'=> $this->em_relationship,
        ]);

        event(new Registered($add));

        //auth()->login($add);

        session()->flash('success', 'New Contact Successfully inserted!');
    }
    public function hide()
    {
        session()->forget('success');
    }
    public function updated($property)
    {
        $this->validateOnly($property);
    }
    
    public function render()
    {
        return view('livewire.client.dashboard.add-contact')->extends('layouts.client');
    }
}
