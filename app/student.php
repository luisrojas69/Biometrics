<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable=[
        'name',
        'enid',
        'sem',
        'branch'
        ];
    
    public function faculty()
    {
        return $this->hasMany('app\faculty');
    }
    
    public function subjects()
    {
        return $this->hasMany('app\subject');
    }
    
    public function password()
    {
        return $this->hasOne(app\login);
    }
}
