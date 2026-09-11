<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProject extends Model
{
    protected $fillable = [
        'title',
        'description',
        'course',
        'archived'
    ];
}
