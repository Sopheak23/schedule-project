<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'times';

    public function classes(){
        return $this->hasMany(Classes::class, 'start_time');
    }


}
