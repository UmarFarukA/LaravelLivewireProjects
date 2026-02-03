<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ALevelResult extends Model
{
    protected $fillable = [
        'application_id',
        'institution',
        'qualification',
        'date_completed',
    ];

    protected $casts = [
        'date_completed' => 'date',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
