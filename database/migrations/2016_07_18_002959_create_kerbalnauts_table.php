<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKerbalnautsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerbalnauts', function (Blueprint $table) {
            $table->increments('id');               
            $table->string('last_name');            
            $table->string('first_name');           
            $table->binary('gender');           //0 - female 1 - male
            $table->string('role');             // Pilot, Scientist, Engineer
            $table->date('hire_date');          
            $table->integer('mission_status');     // Ready for Mission , On Mission, Unavailable
            $table->binary('is_alive');         // 0 - dead 1 - alive
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
        Schema::drop('kerbalnauts');
    }
}
