<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OlevelResult extends Model
{
    protected $fillable = [
        'application_id',
        'exam_type',
        'exam_number',
        'exam_year',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function subjects()
    {
        return $this->hasMany(OLevelSubject::class);
    }
}
