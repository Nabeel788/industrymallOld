<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('category1')->nullable();
            $table->string('category1_image')->nullable();
            $table->integer('category2')->nullable();
            $table->string('category2_image')->nullable();
            $table->string('center_image1')->nullable();
            $table->string('center_image2')->nullable();
            $table->integer('category3')->nullable();
            $table->string('category3_image')->nullable();
            $table->integer('category4')->nullable();
            $table->string('category4_image')->nullable();
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
        Schema::dropIfExists('home_settings');
    }
}
