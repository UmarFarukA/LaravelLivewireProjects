<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //
    protected $fillable = [
        'school_id', 'user_id', 'staff_number',
        'role', 'employment_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(
            Subject::class,
            'teacher_subjects'
        )->withPivot('class_room_id');
    }
}
