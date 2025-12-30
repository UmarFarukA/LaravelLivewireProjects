<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    /** @use HasFactory<\Database\Factories\TermFactory> */
    use HasFactory;

    protected $fillable = [
        'academic_session_id', 'name', 'start_date', 'end_date'
    ];

    public function academicSession()
    {
        return $this->belongsTo(AcademicSession::class);
    }
}
