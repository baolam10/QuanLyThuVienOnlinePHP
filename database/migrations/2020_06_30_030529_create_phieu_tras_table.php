<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuTrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_tra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_PHIEU_TRA');
            $table->string('MA_PHIEU_MUON');
            $table->date('NGAY_TRA');
            $table->string('MA_NHAN_VIEN');
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
        Schema::dropIfExists('phieu_tra');
    }
}
