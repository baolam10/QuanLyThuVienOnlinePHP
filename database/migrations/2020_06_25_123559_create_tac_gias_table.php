<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tac_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MA_TAC_GIA');
            $table->string('TEN_TAC_GIA');
            $table->string('WEBSITE')->nullable();
            $table->string('GHI_CHU')->nullable();
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
        Schema::dropIfExists('tac_gia');
    }
}
