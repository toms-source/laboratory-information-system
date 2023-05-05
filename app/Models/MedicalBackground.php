<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'mbName',
        'mbRelationship',
        'mbAddress',
        'mbContact',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
