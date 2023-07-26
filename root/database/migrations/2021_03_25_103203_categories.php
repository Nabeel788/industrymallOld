<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu_id', 10);
            $table->string('name');
            $table->string('img')->nullable();
            $table->string('commission')->nullable();
            $table->string('biller');
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
