<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_results', function (Blueprint $table) {
            $table->id();
            $table->integer('worker_id');
            $table->integer('course_id');
            $table->integer('correct');
            $table->integer('wrong');
            $table->integer('attempt');
            $table->integer('total');
            $table->string('grade');
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
        Schema::dropIfExists('course_results');
    }
}
