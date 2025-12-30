<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    /** @use HasFactory<\Database\Factories\AdmissionFactory> */
    use HasFactory;
    protected $fillable = [
        'school_id', 'student_id', 'academic_session_id',
        'status', 'approved_by'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
