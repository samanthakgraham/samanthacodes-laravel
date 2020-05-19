<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_description', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('position_idx', 10);
            $table->foreign('position_idx')->references('idx')->on('position');
            $table->text('task_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_description');
    }
}
