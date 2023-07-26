<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Settings extends Migration
{
    public function up()
    {
        Schema::create('settings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('system_name', 100)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('youtube', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->string('google_pluse', 100)->nullable();
            $table->string('pinterest', 100)->nullable();
            $table->string('whatsapp', 100)->nullable();
            $table->string('insta', 100)->nullable();
            $table->string('currency', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('ntn', 100)->nullable();
            $table->string('strn', 100)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('logo', 500)->nullable();
            $table->string('ceo', 100)->nullable();
            $table->string('designation', 100)->nullable();
            $table->string('cell', 100)->nullable();
            $table->text('description')->nullable();
            $table->text('map')->nullable();
            $table->text('disclaimer')->nullable();
            $table->string('banner_image1')->nullable();
            $table->string('banner_image2')->nullable();
            $table->string('banner_image3')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
