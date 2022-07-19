<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('job_id')->nullable()->constrained('jobs')->onDelete('cascade');
            $table->foreignId('admission_id')->nullable()->constrained('admissions')->onDelete('cascade');
            $table->tinyInteger('methods');
            $table->string('transation_number')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->double('balance')->default(0);
            $table->string('marchent_name')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
