<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSchedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_schedulings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('shift_id');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('time_id');
            $table->unsignedBigInteger('semester_id');
            $table->date('start_time');
            $table->date('end_time');
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('class_schedulings');
    }
}
