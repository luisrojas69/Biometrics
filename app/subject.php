<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
     protected $fillable=[
        'name',
        'desc',
        'code',
        'branch',
        'sem'
        ];
    public function faculty()
    {
        return $this->hasMany('app\faculty');
    }
    public function students()
    {
        return $this->hasMany('app\student');
    }
}
