<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSprintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jobboard_id')->unsigned();
            $table->foreign('jobboard_id')
                    ->references('id')->on('jobboards')
                    ->onDelete('cascade');
            $table->string('name');
            $table->bigInteger('sprint_type_id')->unsigned();
            $table->foreign('sprint_type_id')
                    ->references('id')->on('sprint_types')
                    ->onDelete('cascade');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('sprints');
    }
}
