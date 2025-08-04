<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tricycle extends Model
{
    protected $guarded = [];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function allocation(): HasMany
    {
        return $this->hasMany(Allocation::class);
    }

    public function currentAllocation(): HasOne
    {
        return $this->hasOne(Allocation::class)->where("allocated", 1);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
