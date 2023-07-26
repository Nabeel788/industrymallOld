<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_no');
            $table->date('date')->index();
            $table->integer('pro_id')->index();
            $table->integer('unit_id')->index();
            $table->decimal('cost');
            $table->decimal('total');
            $table->string('type');
            $table->decimal('qty_in')->nullable();
            $table->decimal('qty_out')->nullable();
            $table->integer('biller_id')->nullable();
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
        Schema::dropIfExists('stocks');
    }
}
