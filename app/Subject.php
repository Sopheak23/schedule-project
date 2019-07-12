<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable = [
        'subject_name'
    ];

    public function classes(){
        return $this->hasMany(Classes::class);
    }

}
