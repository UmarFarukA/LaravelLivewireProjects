<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Submission extends Model
{
    //
    use HasFactory, Notifiable;

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
