<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'school_id', 'user_id', 'admission_number',
        'student_name', 'gender',
        'dob', 'current_class_id', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function classRoom()
    {
        return $this->belongsTo(ClassRooms::class, 'current_class_id');
    }

    public function guardians()
    {
        return $this->hasMany(StudentGuardian::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function attendanceRecords()
    {
        return $this->hasMany(Attendance::class);
    }

    public function application()
    {
        return $this->belongsTo(applications::class, 'application_id');
    }
}
