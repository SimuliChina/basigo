<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'annual_earning',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}