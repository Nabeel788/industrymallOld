<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleProductInfosTable extends Migration
{
    public function up()
    {
        Schema::create('single_product_infos', function (Blueprint $table) {
            $table->id();
            $table->longText('shipping')->nullable();
            $table->longText('delivery')->nullable();
            $table->longText('returns')->nullable();
            $table->longText('payment_method')->nullable();
            $table->longText('disclaimer')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('single_product_infos');
    }
}
