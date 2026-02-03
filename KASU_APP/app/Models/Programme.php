<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = [
        'department_id',
        'award_type_id',
        'application_form_id',
        'name',
        'code',
        'status',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function awardType()
    {
        return $this->belongsTo(AwardType::class);
    }

    public function applicationForm()
    {
        return $this->belongsTo(ApplicationForm::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
