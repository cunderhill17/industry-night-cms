<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProjectExample extends Model
{
    protected $fillable = [
        'project_type',
        'video_url',
        'image_url',
    ];

    public function studentProject()
    {
        return $this->belongsTo(StudentProject::class);
    }
}
