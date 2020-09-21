<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TIEU_DE_TIN_TUC');
            $table->string('NOI_DUNG_GIOI_THIEU');
            $table->text('NOI_DUNG_CHINH');
            $table->string('TEN_HA');
            $table->string('THE_LOAI');
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
        Schema::dropIfExists('new');
    }
}
