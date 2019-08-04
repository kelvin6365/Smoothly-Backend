<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleasePlanTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('release_plan_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('task_id')->nullable()->unsigned();
            $table->foreign('task_id')
                    ->references('id')->on('tasks')
                    ->onDelete('cascade');
            $table->bigInteger('release_plan_id')->nullable()->unsigned();
            $table->foreign('release_plan_id')
                    ->references('id')->on('release_plans')
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
        Schema::dropIfExists('release_plan_tasks');
    }
}
