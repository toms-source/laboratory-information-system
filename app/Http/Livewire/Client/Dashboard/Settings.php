<?php

namespace App\Http\Livewire\Client\Dashboard;

use App\Models\User;
use Livewire\Component;
use App\Models\EmergencyContacts;

class Settings extends Component
{
    //TODO: refactor update or create
    //create delete emergency contact
    //add validation for emergency contact
    //add validation for birthday
    //debug birthday display. it is not displaying the correct date
    
    public $user;

    public $name;
    public $contact;
    public $address;
    public $age;
    public $gender;
    public $birthday;

    public $em_contacts = [];

    protected $rules = [
        'name' => 'required|min:6',
        'address' => 'required|min:6',
        'contact' => 'required|min:9',
        'age' => 'integer',
    ];

    public function mount()
    {   
        $this->user = User::find(auth()->user()->id);

        $this->name = $this->user->name;
        $this->contact = $this->user->contact;
        $this->address =$this->user->address;
        $this->age = $this->user->age;
        $this->gender = $this->user->gender;
        $this->birthday = date('d-m-Y', strtotime($this->user->birthday));
        // dd($this->name);

        foreach ($this->user->emergencyContacts as $contact) {
            $this->em_contacts[] = $contact;
        }
        //dd($this->em_contacts[] = auth()->user()->emergencyContacts);
    }

    public function updateSettings()
    {   
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'address'=> $this->address,
            'contact'=> $this->contact,
            'age'=> $this->age,
            'gender'=> $this->gender,
            'birthday'=> $this->birthday,
        ]);

        //https://laravel.com/docs/10.x/eloquent#upserts
        //updateOrCreate()

        // f{{ orea }}ch($this->em_contacts as $value)
        // {{{  }}
        //     if($value->id)
        //     {
        //         $value->update([
        //             'name' => $value->name,
        //             'relationship' => $value->relationship,
        //             'address' => $value->address,
        //             'contact' => $value->contact,
        //         ]);
        //     }
        //     else
        //     {
        //         $user->emergencyContacts()->create([
        //             'name' => $value['name'],
        //             'relationship' => $value['relationship'],
        //             'address' => $value['address'],
        //             'contact' => $value['contact'],
        //         ]);
        //     }
        // }
        

        //for reference
        // / Get the difference between $stocks and $stocks_copy
        // $differences = array_udiff($this->stocks_copy, $this->stocks, function ($a, $b) {
        //     return strcmp(serialize($a), serialize($b));
        // });

        // // Delete deleted forms from stocks first. 
        // if($differences)
        // {
        //     foreach($differences as $difference)
        //     {
        //         if(array_key_exists('id', $difference))
        //         {
        //             // Delete deleted form from stock array
        //             $this->product->stocks()->find($difference['id'])->delete();
        //         } 
        //     }
        // }

        // foreach($this->stocks as $stock)
        // {   
            
        //     $this->product->stocks()->updateOrCreate(
        //         [
        //             'name' => $stock['name'],
        //             'quantity' => $stock['quantity'],
        //             'original_price' => $stock['original_price'],
        //             'selling_price' => $stock['selling_price'],
        //             'status' => $stock['status'],
        //         ]
        //     );
        // }

        session()->flash('success', 'Update successfully!');
    }

    public function addContact()
    {
        //or  $this->em_contacts[] = auth()->user()->emergencyContacts;
        $this->em_contacts[] = new EmergencyContacts();
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
