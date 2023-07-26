<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('image')->nullable();
            $table->text('description');
            $table->text('specification');
            $table->integer('training_category_id')->index();
            $table->string('intructor_id');
            $table->string('slug')->nullable();
            $table->string('language')->nullable();
            $table->string('students')->nullable();
            $table->string('lectures')->nullable();
            $table->string('quizzes')->nullable();
            $table->string('duration')->nullable();
            $table->string('skill_level')->nullable();
            $table->string('certificate')->nullable();
            $table->string('assessments')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('trainings');
    }
}
