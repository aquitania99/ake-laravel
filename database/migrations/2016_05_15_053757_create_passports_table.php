<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function($table) {
            $table->increments('id');
            $table->integer('profile_id');
            $table->string('passport_number');
            $table->date('passport_issue_date');
            $table->date('passport_expiry_date');
            $table->integer('passport_issuing_authority');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('passports');
    }
}
