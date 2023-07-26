<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admission_date');
            $table->string('registration_no', 20)->unique();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->date('dob')->nullable();
            $table->string('father')->nullable();
            $table->string('father_cnic')->nullable();
            $table->string('mother')->nullable();
            $table->string('mother_cnic')->nullable();
            $table->string('cost')->nullable();
            $table->string('religion')->nullable();
            $table->string('mother_alive')->nullable();
            $table->date('death_date')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_status')->nullable();
            $table->string('guardian_cnic')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_postal')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('identical_symbol')->nullable();
            $table->string('birth_districk')->nullable();
            $table->string('simbling_name1')->nullable();
            $table->string('simbling_name2')->nullable();
            $table->string('simbling_name3')->nullable();
            $table->string('simbling_gender1')->nullable();
            $table->string('simbling_gender2')->nullable();
            $table->string('simbling_gender3')->nullable();
            $table->string('simbling_age1')->nullable();
            $table->string('simbling_age2')->nullable();
            $table->string('simbling_age3')->nullable();
            $table->string('physical_condition')->nullable();
            $table->string('mental_condition')->nullable();
            $table->string('class')->nullable();
            $table->string('other_needs')->nullable();
            $table->string('vaccine1')->nullable();
            $table->string('vaccine2')->nullable();
            $table->string('vaccine3')->nullable();
            $table->string('vaccine4')->nullable();
            $table->string('witness_name1')->nullable();
            $table->string('witness_name2')->nullable();
            $table->string('witness_address1')->nullable();
            $table->string('witness_address2')->nullable();
            $table->string('witness_cnic1')->nullable();
            $table->string('witness_cnic2')->nullable();
            $table->string('witness_phone1')->nullable();
            $table->string('witness_phone2')->nullable();
            $table->integer('biller_id')->unsigned()->nullable();
            $table->integer('shop_id')->unsigned()->nullable();
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
        //
    }
}
