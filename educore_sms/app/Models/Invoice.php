<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceFactory> */
    use HasFactory;

     protected $fillable = [
        'student_id', 'fee_structure_id',
        'amount', 'status', 'due_date'
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
