<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    protected $fillable = ['name', 'is_active'];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
