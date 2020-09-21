<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chitietphieumuon extends Model
{
     use SoftDeletes;
    protected $table = 'chi_tiet_phieu_muon'; 
}
