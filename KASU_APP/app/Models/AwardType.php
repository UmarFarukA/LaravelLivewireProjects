<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AwardType extends Model
{
    protected $fillable = ['name', 'duration'];

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}
