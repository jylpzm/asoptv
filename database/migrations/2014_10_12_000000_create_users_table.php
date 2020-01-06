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
            $table->increments('id');
            $table->string('user_id');             
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact_num')->nullable();
            $table->string('occupation')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->default('https://www.medaid.co.uk/wp-content/uploads/2019/04/default.jpg');
            $table->integer('age')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->unique();
            $table->integer('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
