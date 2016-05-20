<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->string('study_type');
            $table->string('study_name');
            $table->integer('from_month');
            $table->integer('from_year');
            $table->integer('to_month');
            $table->integer('to_year');
            $table->string('degree_awarded');
            $table->string('education_language');
            $table->string('institution_name');
            $table->string('institution_address');
            $table->string('institution_url');
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
        Schema::dropIfExists('education_details');
    }
}
