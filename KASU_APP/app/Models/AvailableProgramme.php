<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvailableProgramme extends Model
{
    protected $fillable = [
        'application_form_id',
        'programme_id',
        'academic_session',
        'application_fee',
        'app_start_date',
        'app_close_date',
        'opend_by',
    ];

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

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
