<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'latitude', 'longitude', 'tracker_id'
    ];
}
