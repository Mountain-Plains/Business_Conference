<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected  $table=' schedules';
    protected $dates = ['EventDate'];
}