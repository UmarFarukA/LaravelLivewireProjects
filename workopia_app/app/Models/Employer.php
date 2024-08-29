<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function jobs()
    {
        return $this->hasMany(JobListing::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
