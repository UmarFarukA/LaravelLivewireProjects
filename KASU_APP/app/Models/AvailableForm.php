<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvailableForm extends Model
{
    protected $fillable = [
        'application_form_id',
        'programme_id',
        'app_start_date',
        'app_close_date',
        'opend_by'
    ];
}
