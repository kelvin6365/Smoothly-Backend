<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->bigInteger('sprint_id')->unsigned();
            $table->foreign('sprint_id')
                    ->references('id')->on('sprints')
                    ->onDelete('cascade');
            $table->bigInteger('hold_by')->unsigned();
            $table->foreign('hold_by')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->bigInteger('handle_by')->unsigned();
            $table->foreign('handle_by')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->bigInteger('tasktype_id')->unsigned();
            $table->foreign('tasktype_id')
                    ->references('id')->on('task_types')
                    ->onDelete('cascade');
            $table->bigInteger('taskstate_id')->unsigned();
            $table->foreign('taskstate_id')
                    ->references('id')->on('task_states')
                    ->onDelete('cascade');
            $table->bigInteger('tasktag_id')->unsigned();
            $table->foreign('tasktag_id')
                    ->references('id')->on('task_tags')
                    ->onDelete('cascade');
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')
                    ->references('id')->on('task_order_types')
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
        Schema::dropIfExists('tasks');
    }
}
