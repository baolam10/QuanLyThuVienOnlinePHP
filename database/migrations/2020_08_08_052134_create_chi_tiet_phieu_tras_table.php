<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietPhieuTrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_phieu_tra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_PHIEU_TRA');
            $table->string('MA_SACH');
            $table->integer('SO_LUONG');
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
        Schema::dropIfExists('chi_tiet_phieu_tra');
    }
}
