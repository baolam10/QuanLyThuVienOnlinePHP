<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheLoai extends Model
{
    use SoftDeletes;
    protected $table = 'THE_LOAI'; 
    protected $guarded = [];

    public function sachs()
    {
        return $this->hasMany('App\SACH', 'MA_THE_LOAI');
    }
}
