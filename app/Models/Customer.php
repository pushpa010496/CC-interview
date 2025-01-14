<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'number',
        'phone_number',
        'address'
    ];

    public function Orders(){
        return $this->hasMany(Order::class);
    }
}
