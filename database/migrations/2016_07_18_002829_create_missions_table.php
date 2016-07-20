<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('origin');
            $table->string('target');
            $table->date('launch_date');
            $table->date('return_date');
            $table->integer('flight_hrs')->unsigned();
            $table->integer('flight_mins')->unsigned();
            $table->integer('status')->unsigned();       // 0 - Planning   1 - Active   2 - Accomplished 3 - Cancelled 4 - Failed
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
        Schema::drop('missions');
    }
}
