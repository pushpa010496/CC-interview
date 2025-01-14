<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_selling_price',
        'customer_id',
        'status',
        'payment_method'
    ];

    public function Customer(){

        return $this->belongsTo(Customer::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
