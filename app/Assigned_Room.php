<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned_Room extends Model
{
    protected $table = 'assigned_rooms';

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function assigned_start_time(){
        return $this->belongsTo(Time::class, 'start_time', 'id');
    }

    public function day(){
        return $this->belongsTo(Day::class);
    }

}
