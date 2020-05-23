<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            $table->unsignedDecimal('duration_hours');
            $table->string('destination');
            $table->dateTime('started_on');
            $table->dateTime('ended_on');
            $table->dateTime('due_date');
            $table->mediumText('trip_notes');
            $table->unsignedDecimal('pocket_expenses');
            $table->unsignedDecimal('late_fee');
            $table->unsignedDecimal('bonus');
            $table->unsignedDecimal('pay_rate');
            $table->timestamps();
        });
        Schema::table('drivers', function (Blueprint $table) {
            $table->foreignId('trip_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
