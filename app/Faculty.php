<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class Faculty extends Model
{
    protected $fillable = ['Faculty_Name'];

    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
