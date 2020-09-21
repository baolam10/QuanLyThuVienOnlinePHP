<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TEN_DOC_GIA');
            $table->string('DIA_CHI');
            $table->string('MA_SO_THE');
            $table->string('GIOI_TINH');
            $table->string('MAT_KHAU');
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
        Schema::dropIfExists('doc_gia');
    }
}
