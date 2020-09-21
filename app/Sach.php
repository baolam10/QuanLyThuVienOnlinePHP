<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sach extends Model
{
    use SoftDeletes;
    protected $table = 'Sach'; 
    protected $guarded = [];

    public function TheLoai()
    {
        return $this->belongsTo("App\TheLoai",'MA_THE_LOAI','id')->whereNotNull('MA_THE_LOAI');
    }

    public function NhaXuatBan()
    {
        return $this->belongsTo("App\NhaXuatBan",'MA_NXB','id')->whereNotNull('MA_NXB');
    }

    public function TacGia()
    {
        return $this->belongsTo("App\TacGia",'MA_TAC_GIA','id')->whereNotNull('MA_TAC_GIA');
    }

}
