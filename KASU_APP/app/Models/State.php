<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }

    public function applicant()
    {
        return $this->belongsToMany(Applicant::class);
    }
}
