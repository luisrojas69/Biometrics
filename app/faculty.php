<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    //
    public function subjects()
    {
        return $this->hasMany('app\subject');
    }
    public function students()
    {
        return $this->hasMany('app\student');
    }
}
