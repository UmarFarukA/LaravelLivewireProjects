<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Qualification extends Model
{
    /** @use HasFactory<\Database\Factories\QualificationFactory> */
    use HasFactory;

    protected $fillable = ["name"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
