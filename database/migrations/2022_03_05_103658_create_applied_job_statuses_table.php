<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedJobStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_job_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applied_job_id')->constrained('applied_jobs')->onDelete('cascade');
            $table->string('description');
            $table->string('short_name');
            $table->tinyInteger('status');
            $table->tinyInteger('type');
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('applied_job_statuses');
    }
}
