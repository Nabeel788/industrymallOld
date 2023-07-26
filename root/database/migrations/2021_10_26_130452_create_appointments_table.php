<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('appoint_no')->nullable();
            $table->string('date')->nullable();;
            $table->string('designation')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('salary')->nullable();
            $table->string('status')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('image_f')->nullable();
            $table->string('image_b')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
