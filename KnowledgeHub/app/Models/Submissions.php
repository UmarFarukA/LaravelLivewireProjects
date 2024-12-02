<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Type\Integer;

class Submissions extends Model
{
    //
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $cast = [
        'status' => 'integer'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}