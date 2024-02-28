<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[     //Fillable data for table in database
        'stu_name',
        'stu_dob',
        'stu_address',
        'stu_status'
    ];
}
