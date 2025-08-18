<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvestorPayment extends Model
{
    /** @use HasFactory<\Database\Factories\InvestorPaymentFactory> */
    use HasFactory;

    protected $guarded = [];


    public function investor(): BelongsTo
    {
        return $this->belongsTo(Investor::class, foreignKey: "investor_id", ownerKey: "user_id");
    }
}
