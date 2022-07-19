<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHigherGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('higher_graduates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->foreignId('universities_id')->constrained('universities')->onDelete('cascade');
            $table->string('roll_no');
            $table->string('registration_no');
            $table->string('result');
            $table->foreignId('major_id')->constrained('majors')->onDelete('cascade');
            $table->foreignId('passing_year_id')->constrained('passing_years')->onDelete('cascade');
            $table->foreignId('course_duration_id')->constrained('course_durations')->onDelete('cascade');
            $table->tinyInteger('type');
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
        Schema::dropIfExists('higher_graduates');
    }
}
