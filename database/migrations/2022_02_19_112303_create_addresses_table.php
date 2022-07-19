<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('care_of');
            $table->string('details');
            $table->foreignId('district_id')->constrained('districts')->onDelete('cascade');
            $table->foreignId('upazila_id')->constrained('districts')->onDelete('cascade');
            $table->foreignId('post_office_id')->constrained('districts')->onDelete('cascade');
            $table->string('postal_code');
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
        Schema::dropIfExists('addresses');
    }
}
