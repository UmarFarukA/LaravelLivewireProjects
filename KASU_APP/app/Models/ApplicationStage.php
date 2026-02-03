<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationStage extends Model
{
    protected $fillable = ['name', 'order'];

    public function applications()
    {
        return $this->belongsToMany(
            Application::class,
            'application_stage_status'
        )->withPivot('is_completed', 'completed_at');
    }
}
