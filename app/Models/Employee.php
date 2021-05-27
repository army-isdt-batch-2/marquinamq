<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, softDeletes;

    protected $table = "employees";

    protected $fillable = [
        'photo',
        'first_name',
        'last_name',
        'middle_name',
        'contact',
        'address',
        'birthday',
        'gender',
        'designation',
        'rate',
        'departments_id',
        'sss_id',
        'pagibig_id',
        'philhealth_id',
        'tax_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
