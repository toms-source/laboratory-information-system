<?php

namespace App\Http\Livewire\Client\Dashboard;

use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $name;
    public $contact;
    public $address;
    public $client_id;
    public $gender;
    public $birthday;
    public $age;
    public $user;

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

    public function uploadImage(){
        $this->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB Max
        ]);

        //check muna kung may laman si image variable//
        if($this->image)
        {
            if(File::exists(public_path('storage/'.auth()->user()->image))){
                File::delete(public_path('storage/'.auth()->user()->image));
            }

            $filepath = $this->image->store('users/uploads', 'public'); //set sa public disk

            //dagdag validation
            if($filepath)
            {
                auth()->user()->image = $filepath;
                auth()->user()->save();
            } else
            {
                $this->addError('image', 'Weird!');
            }
            //pasa yung filepath sa auth()->user->image
            
            session()->flash('success', 'Image successfully uploaded!');
        } else {
            //custom validation incase nagawa ni user mag drag n drop tas nag upload ng docs, pdf, etc.
            $this->addError('image', 'Image is not valid');
        }
    }

    public function hide()
    {
        session()->forget('success');
    }

    
}
