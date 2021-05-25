<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->binary('photo');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('contact');
            $table->string('address');
            $table->date('birthday');
            $table->enum('gender', [
                'Male', 'Female'
            ]);
            $table->string('designation');
            $table->string('rate');
            $table->unsignedBiginteger('departments_id')->index();
            $table->unsignedBiginteger('sss_id')->index();
            $table->unsignedBiginteger('pagibig_id')->index();
            $table->unsignedBiginteger('philhealth_id')->index();
            $table->unsignedBiginteger('tax_id')->index();
            $table->timestamps();

            $table->foreign('departments_id')->references('id')->on('departments');
            $table->foreign('sss_id')->references('id')->on('deductions');
            $table->foreign('pagibig_id')->references('id')->on('deductions');
            $table->foreign('tax_id')->references('id')->on('deductions');
            $table->foreign('philhealth_id')->references('id')->on('deductions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
