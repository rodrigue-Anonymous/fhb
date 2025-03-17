<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('my_class_id');
            $table->unsignedInteger('section_id');
            $table->unsignedInteger('exam_id');
            $table->float('t1')->nullable();
            $table->float('t2')->nullable();
            $table->float('t3')->nullable();
            $table->float('t4')->nullable();
            $table->float('tca')->nullable();
            $table->float('exm')->nullable();
            $table->float('tex1')->nullable();
            $table->float('tex2')->nullable();
            $table->float('tex3')->nullable();
            $table->tinyInteger('sub_pos')->nullable();
            $table->float('cum')->nullable();
            $table->string('cum_ave')->nullable();
            $table->unsignedInteger('grade_id')->nullable();
            $table->string('year');
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
        Schema::dropIfExists('marks');
    }
}
