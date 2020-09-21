<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuPhatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_phat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_PHIEU_PHAT');
            $table->string('MA_DOC_GIA');
            $table->date('NGAY_MUON');
            $table->date('NGAY_TRA');
            $table->string('LY_DO');
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
        Schema::dropIfExists('phieu_phat');
    }
}
