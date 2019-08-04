<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleasePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('release_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->dateTime('release_date')->nullable();
            $table->string('tag');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->bigInteger('jobboard_id')->unsigned();
            $table->foreign('jobboard_id')
                    ->references('id')->on('jobboards')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('release_plan');
    }
}
