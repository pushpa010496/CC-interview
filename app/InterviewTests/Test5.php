<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;

class Test5 extends Test
{
    public $description = "return Department Collection by descending order of employees count";

    // * department name should be return by run method
    public function run(): Collection
    {
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test2 "
    }
}