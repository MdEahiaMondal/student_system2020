<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassScheduling extends Model
{
    protected  $guarded = [];

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

   public function classe()
    {
        return $this->belongsTo(Classe::class, 'class_id');
    }

   public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

   public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

   public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

   public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class, 'classroom_id');
    }

   public function day()
    {
        return $this->belongsTo(Day::class, 'day_id');
    }

   public function time()
    {
        return $this->belongsTo(Time::class, 'time_id');
    }

   public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

}
