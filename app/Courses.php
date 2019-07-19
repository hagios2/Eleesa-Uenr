<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = ['sem_id', 'combined', 'course_code', 'course']; 

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function material()
    {
        return $this->hasMany(Materials::class, 'course_id');
    }
}
