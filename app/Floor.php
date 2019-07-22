<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = [
        'name',
        'building_id',
    ];

    public function building()
    {
        return $this->belongsTo('App\Building');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
