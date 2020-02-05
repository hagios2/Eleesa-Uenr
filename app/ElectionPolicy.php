<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectionPolicy extends Model
{
    protected $guarded = ['id'];

    public function agreedStudent()
    {

        return $this->belongsTo(User::class);
    }
}
