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
        'branch',
        'sections'
        ];
}
