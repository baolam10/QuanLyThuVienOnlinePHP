<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class TacGia extends Model
{
    use SoftDeletes;
    protected $table = 'TAC_GIA'; 

    public function sachs()
    {
        return $this->hasMany('App\Sach');
    }

    public function TacGia()
    {
        return $this->belongsTo('App\TacGia');
    }
}
