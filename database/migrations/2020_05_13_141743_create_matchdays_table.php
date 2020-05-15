<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchdays', function (Blueprint $table) {
            $table->id();

            $table->date('gamedate')->nullable();
            $table->time('gametime')->nullable();
            $table->string('hometeam')->nullable();
            $table->string('awayteam')->nullable();
            $table->string('venue_street')->nullable();
            $table->string('venue_housenumber')->nullable();
            $table->integer('venue_zip')->nullable();
            $table->string('venue_city')->nullable();
            $table->integer('result_hometeam')->nullable();
            $table->integer('result_awayteam')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchdays');
    }
}
