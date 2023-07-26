<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_category1')->nullable();
            $table->integer('blog_category2')->nullable();;
            $table->integer('blog_category3')->nullable();;
            $table->integer('blog_category4')->nullable();;
            $table->integer('blog_category5')->nullable();;
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
        Schema::dropIfExists('blogs_settings');
    }
}
