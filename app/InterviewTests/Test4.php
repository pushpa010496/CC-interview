<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;

class Test4 extends Test
{
    public $description = "return User Collection where user name started with 'a'";

    // * department name should be return by run method
    public function run(): Collection
    {
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test2 "
    }
}
