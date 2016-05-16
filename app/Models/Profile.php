<?php

namespace Minotaur\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function passport()
    {
        return $this->hasOne(\Minotaur\Models\Profile::class, 'profile_id');
    }
}
