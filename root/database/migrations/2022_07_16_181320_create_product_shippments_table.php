<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductShippmentsTable extends Migration
{
    public function up()
    {
        Schema::create('product_shippments', function (Blueprint $table) {
            $table->id();
            $table->integer('pro_id');
            $table->integer('location_id');
            $table->string('shipping_days')->nullable();
            $table->string('shipping_charges')->nullable();
            $table->string('import_charges')->nullable();
            $table->string('tax_charges')->nullable();
            $table->string('other_charges')->nullable();
            $table->integer('new_price')->nullable();
            $table->integer('new_sale_price')->nullable();
            $table->integer('new_warranty_days')->nullable();
            $table->integer('refurnished_price')->nullable();
            $table->integer('refurnished_sale_price')->nullable();
            $table->integer('refurnished_warranty_days')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_shippments');
    }
}
