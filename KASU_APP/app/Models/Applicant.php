<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Applicant extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'othernames',
        'surname',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'nationality_id',
        'state_id',
        'lga_id',
        'address',
        'password',
        'picture'
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }
}
