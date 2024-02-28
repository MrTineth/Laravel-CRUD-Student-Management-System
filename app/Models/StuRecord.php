<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StuRecord extends Model
{
    use HasFactory;
    
    protected $fillable =[  //Fillables for student manage
        'stu_id',
        'title',
        'date',
        'description'
        

    ];
}
