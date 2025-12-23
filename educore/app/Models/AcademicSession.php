<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    use HasFactory;

    protected $fillable = ['school_id', 'name', 'is_active'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function terms()
    {
        return $this->hasMany(Term::class);
    }
}
