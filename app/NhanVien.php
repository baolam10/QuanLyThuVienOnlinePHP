<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NhanVien extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'NHAN_VIEN'; 

    public function getPasswordAttribute()
    {
    	return $this->MAT_KHAU;
    }

}
