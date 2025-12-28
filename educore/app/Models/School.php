<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
     use HasFactory;

    protected $fillable = [
        'name', 'address', 'email', 'phone', 'school_logo', 'status'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function staff()
    {
        return $this->hasMany(staff::class);
    }

    public function classes()
    {
        return $this->hasMany(ClassRoom::class);
    }
}
