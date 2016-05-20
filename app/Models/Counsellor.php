<?php

namespace Akela\Models;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    
    public function users()
    {
        return $this->hasMany('Akela\Models\User', 'counsellor_id', 'id');
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

}
