<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    //
    protected $fillable = [
        'school_id', 'class_room_id', 'term_id',
        'amount', 'description'
    ];
}
