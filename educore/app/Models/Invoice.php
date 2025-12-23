<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = [
        'student_id', 'fee_structure_id',
        'amount', 'status', 'due_date'
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
