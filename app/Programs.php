<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    public function courses()
    {
        return $this->hasMany(Semester::class, 'prog_id');
    }
}
