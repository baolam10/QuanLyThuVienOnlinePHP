<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slides extends Model
{
     use SoftDeletes;
    protected $table = 'slide';
}
