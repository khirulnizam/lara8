<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    //model Venue
    protected $table="venues";//table name
    protected $fillable=['vname','vblock','vtype'];//fields can be ammend by user
}
