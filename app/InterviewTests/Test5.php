<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;

class Test5 extends Test
{
    public $description = "Retrieve the Department Collection sorted in descending order based on the number of employees.";

    public function run(): Collection
    {
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test5 "

      return Department::withCount('employees')
            ->orderByDesc('employees_count')
            ->get();

    }
}