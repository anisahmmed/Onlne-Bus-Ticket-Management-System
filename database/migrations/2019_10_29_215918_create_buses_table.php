<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('date_id');
            $table->integer('operator_name_id');
            $table->string('chassis_no_id')->unique();
            $table->integer('bus_type_id');
            $table->integer('bus_route_id');
            $table->integer('departure_id');
            $table->integer('departure_time_id');
            $table->integer('destination_id');
            $table->integer('total_seat_id');
            $table->integer('ticket_price_id');
            $table->softDeletes();
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
        Schema::dropIfExists('buses');
    }
}
