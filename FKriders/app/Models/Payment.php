<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Payment extends Model
{
    protected $fillable = [
        "user_id",
        "allocation_id",
        "tricycle_id",
        "amount",
        "payment_channel",
        "paid_at",
        "week_number",
        "payment_status",
        "has_completed",
        "paid_at",
        "expected_payment_date",
        "payment_reference",
    ];

    protected static function booted()
    {
        static::creating(function($payment){
            $payment->payment_reference = 'FRY-'. strtoupper(uniqid());
        });
    }

    public function allocation(): BelongsTo
    {
        return $this->belongsTo(Allocation::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
