<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('native_language');
            $table->integer('passport_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('employment_id')->unsigned();
            $table->integer('education_id')->unsigned();
            $table->integer('aussie_visa_id')->unsigned();
            $table->char('has_ielts_test');
            $table->integer('ielts_id');
            $table->string('status'); // married, single, de facto, divorced, widowed
            $table->char('dependants');
            $table->char('partner');
            $table->char('children');
            $table->text('notes');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('profiles');
    }
}
