<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /** @use HasFactory<\Database\Factories\AttendanceFactory> */
    use HasFactory;

     protected $fillable = [
        'school_id', 'class_room_id', 'subject_id',
        'attendance_date', 'taken_by'
    ];

    public function records()
    {
        return $this->hasMany(AttendanceRecord::class);
    }
}
