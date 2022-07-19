<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_admission_id')->constrained('user_admissions')->cascadeOnDelete();
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
        Schema::dropIfExists('admission_statuses');
    }
}
