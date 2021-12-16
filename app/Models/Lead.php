<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'location',
        'gender',
        'phoneno',
    ];

    use HasFactory;
}
