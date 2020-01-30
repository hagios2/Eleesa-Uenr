<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

    protected $guarded = ['id'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prez_candidate()
    {
        return $this->belongsTo('App\Candidate', 'president_id');
    }

    public function sec_candidate()
    {
        return $this->belongsTo('App\Candidate', 'secretary_id');
    }

    public function mp_candidate()
    {
        return $this->belongsTo('App\Candidate', 'mp_id');
    }
    
}
