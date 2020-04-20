<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    //use SoftDeletes;

    protected $table = 'templates';
    protected $fillable =['name','headerColor','headerTextColor','backColor','primaryTextColor'];
}
