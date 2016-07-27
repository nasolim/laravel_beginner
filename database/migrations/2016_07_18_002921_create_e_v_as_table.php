<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEVAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kerbalnaut_id')->unsigned();
            $table->foreign('kerbalnaut_id')->references('id')->on('kerbalnauts');
            $table->integer('mission_id')->unsigned();
            $table->foreign('mission_id')->references('id')->on('missions');
            $table->integer('hrs')->unsigned();
            $table->integer('mins')->unsigned();
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
        Schema::drop('evas');
    }
}
