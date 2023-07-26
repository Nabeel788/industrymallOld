<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('email', 100);
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('addres')->nullable();
            $table->string('gender')->nullable();
            $table->string('profession')->nullable();
            $table->string('type', 20)->nullable();
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('biller_id')->nullable();
            $table->string('role')->nullable();
            $table->string('ntn')->nullable();
            $table->string('strn')->nullable();
            $table->string('status')->nullable();
            $table->string('nation')->nullable();
            $table->integer('total_employees')->nullable();
            $table->string('established_in')->nullable();
            $table->string('deals_in')->nullable();
            $table->string('main_market')->nullable();
            $table->string('member_since')->nullable();
            $table->string('certifications')->nullable();
            $table->text('basic_information')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
