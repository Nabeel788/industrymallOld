<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->text('slug')->nullable();
            $table->decimal('quantity')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('total')->nullable();
            $table->string('image')->nullable();
            $table->string('color')->nullable();
            $table->decimal('amount_old')->nullable();
            $table->decimal('amount_new')->nullable();
            $table->string('conditionType')->nullable();
            $table->decimal('ship_charges')->nullable();
            $table->string('locatedin')->nullable();
            $table->decimal('imp_charges')->nullable();
            $table->decimal('t_charges')->nullable();
            $table->decimal('oth_charges')->nullable();
            $table->decimal('ship_days')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('brand_logo')->nullable();
            $table->integer('vendor_id')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
