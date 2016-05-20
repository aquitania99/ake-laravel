<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('counsellor_id')->unsigned();
            $table->integer('passport_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('profile_id')->unsigned();
            $table->enum('type',['admin', 'manager', 'counsellor', 'user'] );
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('mobile');
            $table->char('gender');
            $table->string('nationality');
            $table->date('dob');
            $table->string('birth_country');
            $table->string('birth_city');
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
