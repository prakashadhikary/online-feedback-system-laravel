<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblStudentFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_student_feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->unsignedBigInteger('faculty_id');
            $table->foreign('faculty_id')->references('id')->on('tbl_faculty');
            $table->unsignedBigInteger('answer_id');
            $table->foreign('answer_id')->references('id')->on('tbl_feedback');
            $table->integer('rating')->nullable();
            $table->text('shortDescription')->nullable();
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
        Schema::dropIfExists('tbl_student_feedback');
    }
}
