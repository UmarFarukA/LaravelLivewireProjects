<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "gender",
        "dob",
        "parent_name",
        "parent_phone",
        "parent_email",
        "previous_school",
        "classroom_id",
        "school_id",
        'address',
    ];

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
