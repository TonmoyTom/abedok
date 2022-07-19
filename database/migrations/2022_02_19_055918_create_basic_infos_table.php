<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('birth_date');
            $table->tinyInteger('gender');
            $table->string('height');
            $table->tinyInteger('religion');
            $table->tinyInteger('marital_status');
            $table->string('nid');
            $table->string('mobile');
            $table->string('email');
            $table->foreignId('quota_id')->constrained('quotas')->onDelete('cascade');
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
        Schema::dropIfExists('basic_infos');
    }
}
