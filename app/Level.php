<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function semester()
    {
        return $this->hasMany(Semester::class, 'level_id');
    }
}
