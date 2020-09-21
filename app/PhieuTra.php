<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhieuTra extends Model
{
    use SoftDeletes;
    protected $table = 'PHIEU_TRA'; 
}
