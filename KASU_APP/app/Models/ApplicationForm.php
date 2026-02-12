<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'start_date',
        'end_date',
        'is_active',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }

    public function stages()
    {
        return $this->belongsToMany(
            ApplicationStage::class,
            'application_form_stage'
        )
            ->withPivot('order')
            ->orderByPivot('order');
    }
}
