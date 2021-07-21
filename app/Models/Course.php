<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //incase you have different table name
    protected $table="courses";

    //to register which field that can be modified by user
    protected $fillable=['title','desc', 'trainer'];
}
