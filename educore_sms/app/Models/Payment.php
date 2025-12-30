<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $fillable = [
        'invoice_id', 'payment_reference',
        'amount', 'payment_method', 'paid_at'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
