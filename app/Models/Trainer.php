<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    //table 
    protected $table='trainers';

    //rows involved
    protected $fillable=['trainername','trainerexpert',
                'trainerweb'];
}
