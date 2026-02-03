<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OlevelSubject extends Model
{
    protected $fillable = ['o_level_result_id', 'subject', 'grade'];

    public function result()
    {
        return $this->belongsTo(OLevelResult::class);
    }
}
