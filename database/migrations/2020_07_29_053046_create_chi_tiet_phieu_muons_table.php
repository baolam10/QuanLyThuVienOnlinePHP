<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietPhieuMuonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_phieu_muon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_PHIEU_MUON');
            $table->string('MA_SACH');
            $table->string('SO_LUONG');
            $table->string('TINH_TRANG');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_phieu_muon');
    }
}
