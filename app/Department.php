<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

}
