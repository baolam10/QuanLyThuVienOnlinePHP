<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhaXuatBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nha_xuat_ban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_NXB');
            $table->string('TEN_NXB');
            $table->string('DIA_CHI');
            $table->string('EMAIL');
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
        Schema::dropIfExists('nha_xuat_ban');
    }
}
