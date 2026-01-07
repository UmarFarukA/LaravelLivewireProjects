<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    protected $guarded = [];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function classroom()
    {
        return $this->belongsTo(ClassRooms::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
