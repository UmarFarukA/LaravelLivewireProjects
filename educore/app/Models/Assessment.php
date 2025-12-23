<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    //
    protected $fillable = [
        'school_id', 'term_id', 'subject_id',
        'class_room_id', 'assessment_type', 'max_score'
    ];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
