<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIeltsTestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ielts_test_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id');
            $table->string('country');
            $table->date('test_date');
            $table->integer('test_report_no');
            $table->double('overall_score');
            $table->double('listening');
            $table->double('reading');
            $table->double('writing');
            $table->double('speaking');
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
        Schema::dropIfExists('ielts_test_details');
    }
}
