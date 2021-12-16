<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'location',
        'gender',
        'phoneno',
        'annual_earning',
    ];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
