<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('bill_no')->nullable();
            $table->string('supplier_id')->nullable();
            $table->string('biller_id')->nullable();
            $table->string('status');
            $table->timestamps();
        });


        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_id')->nullable();
            $table->string('produc_id')->nullable();
            $table->string('unit_id')->nullable();
            $table->string('carat_id')->nullable();
            $table->string('quantity')->nullable();
            $table->string('quantity_out')->nullable();
            $table->string('cost')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
