<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'faculty_name'
    ];

    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
