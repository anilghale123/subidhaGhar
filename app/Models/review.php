<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'comment', 
        'rating', 
        'user_id', 
        's_id'  // Make sure the spelling is accurate
    ];
}
