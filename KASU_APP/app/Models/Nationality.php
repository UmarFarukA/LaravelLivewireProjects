<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    public function applicant()
    {
        return $this->belongsToMany(Applicant::class);
    }

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
