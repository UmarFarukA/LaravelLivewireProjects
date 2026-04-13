<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    public function applicant()
    {
        return $this->belongsToMany(Applicant::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
