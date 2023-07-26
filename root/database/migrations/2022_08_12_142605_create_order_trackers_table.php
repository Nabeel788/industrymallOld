<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTrackersTable extends Migration
{
    public function up()
    {
        Schema::create('order_trackers', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->dateTime('datetime');
            $table->string('status')->nullable();
            $table->string('direction')->nullable();
            $table->string('country')->nullable();
            $table->string('icon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_trackers');
    }
}
