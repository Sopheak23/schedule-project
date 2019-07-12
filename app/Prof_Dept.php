<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof_Dept extends Model
{
    protected $table = 'prof_dept';

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
