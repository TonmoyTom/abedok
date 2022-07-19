<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone');
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('otp');
            $table->tinyInteger('status')->default(0);
            $table->text('photo')->nullable();
            $table->double('balance')->default(0);
            $table->double('profile_strength')->default(0);
            $table->tinyInteger('type')->default(1);
            $table->dateTime('expiry_otp')->default(Carbon\Carbon::now());
            $table->double('service_fee')->default(0);
            $table->double('profit')->default(0);
            $table->double('commission')->nullable();
            $table->tinyInteger('notify_type')->default(1);
            $table->tinyInteger('notify_fav_type')->default(1);
            $table->tinyInteger('notify_hired_type')->default(1);
            $table->tinyInteger('notify_unemployed_type')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
