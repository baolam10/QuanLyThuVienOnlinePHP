<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_NHAN_VIEN');
            $table->string('HO_TEN');
            $table->string('CV');
            $table->date('NGAY_SINH');
            $table->string('MAT_KHAU');
            $table->string('GIOI_TINH');
            $table->integer('SO_DIEN_THOAI');
            $table->string('EMAIL');
            $table->date('NGAY_VAO_LAM');
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
        Schema::dropIfExists('nhan_vien');
    }
}
