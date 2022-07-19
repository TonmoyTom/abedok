<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('status')->default(1);
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');
            $table->foreignId('group_id')->nullable()->references('id')->on('groups');
            $table->date('application_start');
            $table->date('application_end');
            $table->date('exam_time')->nullable();
            $table->decimal('application_fee');
            $table->string('min_gpa')->nullable();
            $table->string('min_gpa_total')->nullable();
            $table->double('seat')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}
