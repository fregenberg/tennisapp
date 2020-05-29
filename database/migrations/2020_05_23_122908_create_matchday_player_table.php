<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchdayPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchday_player', function (Blueprint $table) {
            $table->id();

            $table->foreignId('matchday_id')->constrained()
                ->onDelete('cascade');
            $table->foreignId('player_id')->constrained()
                ->onDelete('cascade');
            $table->enum('player_availability', ['yes', 'no', 'maybe'])->nullable();

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
        Schema::dropIfExists('matchday_player');
    }
}
