<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyContacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'relationship',
        'address',
        'contact',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
