<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietPhieuTra extends Model
{
    use SoftDeletes;
    protected $table = 'chi_tiet_phieu_tra'; 
}
