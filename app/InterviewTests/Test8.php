<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;

class Test8 extends Test
{
    public $description = "return the total spending in 2022 on order of customer id 5";

    public function run(): float
    {
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test8 "
        
        return Order::where('customer_id', 5)
        ->whereYear('created_at', 2022)
        ->sum('total_selling_price');
 }
}