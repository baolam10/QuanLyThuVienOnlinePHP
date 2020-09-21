<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheThuViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_thu_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_SO_THE');
            $table->date('NGAY_BAT_DAU');
            $table->date('NGAY_HET_HAN');
            $table->string('GHI_CHU');
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
        Schema::dropIfExists('the_thu_vien');
    }
}
