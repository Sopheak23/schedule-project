<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'total_students',
        'floor_id',
    ];

    public function floor()
    {
        return $this->belongsTo('App\Floor');
    }
}
