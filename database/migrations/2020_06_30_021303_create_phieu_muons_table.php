<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuMuonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_muon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_PHIEU_MUON');
            $table->string('MA_SO_THE');
            $table->string('SO_LUONG');
            $table->date('NGAY_MUON');
            $table->date('HAN_TRA');
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
        Schema::dropIfExists('phieu_muon');
    }
}
