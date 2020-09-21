<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DocGia extends Authenticatable 
{
    use SoftDeletes;
    protected $table = 'DOC_GIA'; 

    public function getPasswordAttribute()
    {
    	return $this->MAT_KHAU;
    }
}
