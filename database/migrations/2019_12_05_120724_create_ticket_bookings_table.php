<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name')->default('No Data');
            $table->string('phone')->default('No Data');
            $table->string('bus_name')->default('No Data');
            $table->string('gender')->default('No Data');
            $table->string('bus_type')->default('No Data');
            $table->string('bus_chassis')->default('No Data');
            $table->string('bus_route')->default('No Data');
            $table->string('departure')->default('No Data');
            $table->string('destination')->default('No Data');
            $table->string('journey_date')->default('No Data');
            $table->string('departure_time')->default('No Data');
            $table->string('seat_no')->default('No Data');
            $table->string('total_seat')->default('No Data');
            $table->string('terminal')->default('No Data');
            $table->string('ticket_price')->default(0);
            $table->string('total_price')->default('No Data');
            $table->integer('payment_status')->default(0);
            $table->string('ticket_token')->default('No Data');
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
        Schema::dropIfExists('ticket_bookings');
    }
}
