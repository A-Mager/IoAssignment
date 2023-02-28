<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = ['date','jobType', 'estimatedTime', 'carPart'];

    
}