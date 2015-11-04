<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    //
    public function faculty()
    {
        return $this->hasMany('app\faculty');
    }
    public function students()
    {
        return $this->hasMany('app\student');
    }
}
