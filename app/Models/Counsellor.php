<?php

namespace Minotaur\Models;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    
    public function users()
    {
        return $this->hasMany(Counsellor::class, 'counsellor_id');
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

}
