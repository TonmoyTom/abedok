<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * DB_CONNECTION=mysql


     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('min_age')->nullable();
            $table->string('max_age')->nullable();
            $table->string('sit')->nullable();
            $table->foreignId('post_id')->constrained('posts')->cascadeOnDelete();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->foreignId('examination_id')->nullable()->references('id')->on('examinations');
            $table->foreignId('subject_id')->nullable()->references('id')->on('subjects');
            $table->foreignId('grade_id')->constrained('grades')->onDelete('cascade');
            $table->foreignId('district_id')->nullable()->references('id')->on('districts');
            $table->foreignId('major_id')->nullable()->references('id')->on('majors');
            $table->tinyInteger('quota')->default(0);
            $table->foreignId('group_id')->nullable()->references('id')->on('groups');
            $table->string('skill')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->float('fee')->nullable();
            $table->string('experience')->nullable();
            $table->string('experience_details')->nullable();
            $table->date('start_time')->nullable();
            $table->float('service_fee');
            $table->date('end_time')->nullable();
            $table->string('description')->nullable();
            $table->string('link')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('maritial_status')->nullable();
            $table->tinyInteger('religion')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('quota_status_check')->default(0);

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
        Schema::dropIfExists('jobs');
    }
}
