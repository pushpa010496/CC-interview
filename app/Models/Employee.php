<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'salary_per_annum',
        'joining_date',
        'department_id'
    ];

    public function department(){
        return $this->hasOne(Department::class);
    }
}
