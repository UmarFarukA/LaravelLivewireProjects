<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $fillable = [
        'school_id', 'title', 'message',
        'target', 'published_by'
    ];
}
