<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'application_number',
        'applicant_id',
        'programme_id',
        'application_form_id',
        'session_id',
        'status',
        'submitted_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function form()
    {
        return $this->belongsTo(ApplicationForm::class, 'application_form_id');
    }

    public function session()
    {
        return $this->belongsTo(AcademicSession::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function referees()
    {
        return $this->hasMany(Referee::class);
    }

    public function oLevelResults()
    {
        return $this->hasMany(OLevelResult::class);
    }

    public function aLevelResults()
    {
        return $this->hasMany(ALevelResult::class);
    }

    public function stages()
    {
        return $this->belongsToMany(
            ApplicationStage::class,
            'application_stage_status'
        )->withPivot('is_completed', 'completed_at');
    }
}
