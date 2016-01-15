<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
     protected $fillable=[
        'name',
        'email',
        'fid',
        'sem',
        'branch'
        ];
    public function subjects()
    {
        return $this->hasMany('app\subject');
    }
    public function students()
    {
        return $this->hasMany('app\student');
    }
}
