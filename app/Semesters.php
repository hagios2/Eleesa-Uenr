<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function program()
    {
        return $this->belongsTo(Programs::class, 'prog_id');
    }

    public function courses()
    {
        return $this->hasMany(Courses::class, 'sem_id');
    }
}
