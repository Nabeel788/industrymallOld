<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductContactsTable extends Migration
{
    public function up()
    {
        Schema::create('product_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('make')->index();
            $table->integer('pro_id')->index()->nullable();
            $table->string('pro_name')->index()->nullable();
            $table->text('message');
            $table->string('model_no')->index();
            $table->string('brand_name')->index();
            $table->string('moq');
            $table->string('delivery_location')->index();
            $table->integer('vendor_id')->nullable()->index();
            $table->string('ptcl')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('company')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_contacts');
    }
}
