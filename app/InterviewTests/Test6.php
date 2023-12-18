<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;

class Test6 extends Test
{
    public $description = "save the following requestArray Data into orders and order_details table and return the Order object";

    public $requestArray = [
        'customer_id' => 3,
        'status' => 'SUBMITTED',
        'total_selling_price' => 0, // * have to calculate right selling price by the price of the product and quantity of the product
        'payment_method' => 'CASH ON DELIVERY',
        'order_details' => [
            [
                'product_id' => 1,
                'quantity' => 5
            ],
            [
                'product_id' => 7,
                'quantity' => 2
            ]
        ]
    ];

    public function run(): Order
    {
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test6 "
    }
}
