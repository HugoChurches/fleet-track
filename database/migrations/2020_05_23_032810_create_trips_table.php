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
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            $table->unsignedDecimal('duration_hours');
            $table->string('destination');
            //Nullable / Can be left as empty
            $table->date('started_on')->nullable(); //These are yet to be implemented
            $table->date('ended_on')->nullable(); //
            $table->date('due_date');
            $table->mediumText('trip_notes')->nullable(); //
            $table->unsignedDecimal('pocket_expenses')->nullable(); //
            $table->unsignedDecimal('late_fee')->nullable(); //
            $table->unsignedDecimal('bonus')->nullable(); // 
            $table->unsignedDecimal('pay_rate')->nullable(); //
            $table->timestamps();
        });
        Schema::table('drivers', function (Blueprint $table) {
            $table->foreignId('trip_id')->nullable()->constrained();
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
