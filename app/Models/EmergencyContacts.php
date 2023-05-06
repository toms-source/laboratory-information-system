<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyContacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'relationship',
        'address',
        'contact',
        'email',
        'birthday',
        'age',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
