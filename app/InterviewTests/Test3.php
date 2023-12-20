<?php

namespace App\InterviewTests;

use App\Modules\Test;
use DB;

class Test3 extends Test
{
    public $description = "return all those employee's names who had joined between 2020 - 2023";

    // * example: return value  ['John', 'sam']

    public function run(): array
    {
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test3 "
       return DB::table('employees')
        ->select('name')
        ->whereBetween('joining_date', ['2020-01-01', '2023-12-31'])
        ->get();
    }
}
