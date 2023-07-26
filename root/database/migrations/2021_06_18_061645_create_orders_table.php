<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date', 100)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('address_01', 300)->nullable();
            $table->string('address_02', 300)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('postal_code', 30)->nullable();
            $table->string('phone1', 100)->nullable();
            $table->string('phone2', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('comments', 500)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('status', 50)->nullable();
            $table->string('shipping', 50)->nullable();
            $table->string('updatedby', 100)->nullable();
            $table->integer('customer_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
