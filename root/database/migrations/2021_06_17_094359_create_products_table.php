<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->string('name')->index();
            $table->string('sku')->nullable();
            $table->longText('description')->nullable();
            $table->longText('details')->nullable();
            $table->integer('brand_id');
            $table->integer('menu_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('model_no');
            $table->string('make');
            $table->string('type');
            $table->string('slug')->nullable();
            $table->integer('parent_id')->nullable();
            $table->decimal('new_price',8,2)->nullable();
            $table->decimal('new_sale_price',8,2)->nullable();
            $table->integer('new_warranty_days')->nullable();
            $table->integer('new_return_days')->nullable();
            $table->decimal('refurnished_price',8,2)->nullable();
            $table->decimal('refurnished_sale_price',8,2)->nullable();
            $table->integer('refurnished_warranty_days')->nullable();
            $table->integer('refurnished_return_days')->nullable();
            $table->string('attachment')->nullable();
            $table->decimal('width')->nullable();
            $table->decimal('height')->nullable();
            $table->decimal('depth')->nullable();
            $table->decimal('weight')->nullable();
            $table->integer('min_order')->nullable();
            $table->string('status')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
