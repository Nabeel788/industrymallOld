<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorAlbumsTable extends Migration
{
    public function up()
    {
        Schema::create('vendor_albums', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->integer('vendor_id')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_albums');
    }
}
