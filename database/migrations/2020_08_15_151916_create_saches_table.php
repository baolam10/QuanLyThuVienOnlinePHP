<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_SACH');
            $table->string('TEN_SACH');
            $table->integer('MA_TAC_GIA')->unsigned();
            $table->integer('MA_THE_LOAI')->unsigned();
            $table->integer('MA_NXB')->unsigned();
            $table->string('MA_HA');
            $table->text('NOI_DUNG_GIOI_THIEU');
            $table->text('NOI_DUNG_CHINH');
            $table->Integer('NAM_XUAT_BAN');
            $table->Integer('SO_LUONG');
            $table->Integer('SO_LUONG_MUON');
            $table->string('TINH_TRANG');
            $table->foreign('MA_THE_LOAI')->references('id')->on('the_loai')->onDelete('cascade');
            $table->foreign('MA_NXB')->references('id')->on('nha_xuat_ban')->onDelete('cascade');
            $table->foreign('MA_TAC_GIA')->references('id')->on('tac_gia')->onDelete('cascade');
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
        Schema::dropIfExists('sach');
    }
}
