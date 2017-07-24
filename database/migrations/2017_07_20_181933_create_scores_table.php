<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('scores', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('student_id')->unsigned();
        $table->integer('subject_id')->unsigned();
        $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        $table->float('qualification');
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
        Schema::dropIfExists('scores');
    }
}
