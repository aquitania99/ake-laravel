<?php

namespace Akela\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function passport()
    {
        return $this->hasOne(Passport::class, 'profile_id');
    }
}
