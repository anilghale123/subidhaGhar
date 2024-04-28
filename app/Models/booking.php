<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'date', 
        'time',
        'phone_number', 
        'location', 
        'notes',
        'status',
        'user_id', 
        's_id',
        'name'  // Make sure the spelling is accurate
    ];
}
