<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->increments('application_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('address');
            $table->string('phone_no');
            $table->string('email');
            $table->string('plot_area');
            $table->string('floor_amount');
            $table->integer('status');
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
        //
    }
}
