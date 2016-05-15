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
            $table->integer('user_id');
            $table->string('native_language');
            $table->integer('passport_id');
            $table->integer('address_id');
            $table->integer('employment_id');
            $table->integer('education_id');
            $table->integer('aussie_visa_id');
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
