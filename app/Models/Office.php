<?php

namespace Akela\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function counsellors()
    {
        return $this->hasMany(Counsellor::class);
    }

}
