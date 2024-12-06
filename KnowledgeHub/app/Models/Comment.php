<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
// use App\Mode

class Comment extends Model
{
    //
    use HasFactory, Notifiable;

    protected $guarded = [];

    public function submission(): BelongsTo
    {
        return $this->belongsTo(Submissions::class);
    }
}
