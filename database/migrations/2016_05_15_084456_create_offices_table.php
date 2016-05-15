<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function($table) {
            $table->increments('id');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('phone');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('postcode');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('offices');
    }
}
