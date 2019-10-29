<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businfos', function (Blueprint $table) {
            $table->bigIncrements('bus_info_id');
            $table->string('operator');
            $table->string('ac_nac');
            $table->string('departure');
            $table->string('duration');
            $table->string('distance');
            $table->string('arrival');
            $table->string('total_seat');
            $table->string('price');
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businfos');
    }
}
