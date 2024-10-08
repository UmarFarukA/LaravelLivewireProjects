<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'description',
        'user_id'
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(
            related: Tag::class,
            table: 'bookmark_tag',
        );
    }
}
