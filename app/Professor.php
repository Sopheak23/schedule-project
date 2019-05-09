<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'professor_name'
    ];

    public function departments()
    {
        return $this->belongsToMany('App\Department', 'prof_dept', 'professor_id', 'department_id');
    }
}
