<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Create table Students
      Schema::create('students', function(Blueprint $table){
        $table->increments('id');
        $table->string('name', 50);
        $table->string('surnames', 50);
        $table->date('birthdate');

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
      // Drop table Students
      Schema::drop('students');
    }
}
