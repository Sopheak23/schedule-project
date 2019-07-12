<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'subject_id',
        'prof_dept_id',
        'total_students',
        'day_id',
        'start_time',
        'end_time'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function prof_dept()
    {
        return $this->belongsTo(Prof_Dept::class);
    }

    public function days()
    {
        return $this->belongsTo(Day::class);
    }

    public function time(){
        return $this->belongsTo(Time::class);
    }

    public function times()
    {
        return $this->belongsTo('times', 'start_time', 'end_time');
    }
}
