<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('pp_photos')->nullable();
            $table->string('signature_photos')->nullable();
            $table->string('nid_photos')->nullable();
            $table->string('passport_photos')->nullable();
            $table->string('birth_certificate_photos')->nullable();
            $table->string('ssc_certificate_photos')->nullable();
            $table->string('hsc_certificate_photos')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('all_photos');
    }
}
