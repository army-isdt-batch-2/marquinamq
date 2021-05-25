<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping_records', function (Blueprint $table) {
            $table->id();
            $table->time('clock_in');
            $table->time('clock_out');
            $table->string('total');
            $table->unsignedBiginteger('employees_id')->index();
            $table->unsignedBiginteger('timekeeping_id')->index();
            $table->timestamps();

            $table->foreign('employees_id')->references('id')->on('employees');
            $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeeping_records');
    }
}
