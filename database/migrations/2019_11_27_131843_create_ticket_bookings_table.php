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
            $table->string('customer_name_id')->default('No Data');
            $table->string('phone_id')->default('No Data');
            $table->string('bus_name_id')->default('No Data');
            $table->string('bus_chassis')->default('No Data');
            $table->string('destination_id')->default('No Data');
            $table->string('journey_date_id')->default('No Data');
            $table->string('departure_time_id')->default('No Data');
            $table->string('seat_no')->default('No Data');
            $table->string('total_seat')->default('No Data');
            $table->integer('terminal_id')->default(0);
            $table->string('ticket_price')->default('No Data');
            $table->string('total_price')->default('No Data');
            $table->integer('payment_status')->default(0);
            $table->string('ticket_token')->default('No Data');
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
