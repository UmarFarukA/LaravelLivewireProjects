<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "salary",
        "requirements",
        "benefits",
        "address",
        "city",
        "state",
        "phone",
        "email",
        "employer_id"
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function applicants(): HasMany
    {
        return $this->hasMany(User::class);
    }
}