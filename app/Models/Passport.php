<?php

namespace Minotaur\Models;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable = ['profile_id'];

    public function profile() {
        return $this->hasOne(Profile::class, 'passport_id');
    }
}
