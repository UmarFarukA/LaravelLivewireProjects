<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'application_number',
        'applicant_id',
        'programme_id',
        'available_programme_id',
        'application_form_id',
        'academic_session',
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

    public function academic_session()
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

    public function availableProgramme()
    {
        return $this->belongsTo(AvailableProgramme::class);
    }

    protected static function booted()
    {
        static::created(function ($application) {

            $stages = ApplicationStage::orderBy('order')->get();

            $application->stages()->attach(
                $stages->mapWithKeys(fn($stage) => [
                    $stage->id => [
                        'is_completed' => false,
                    ]
                ])
            );
        });
    }
}
