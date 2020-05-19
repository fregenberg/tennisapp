<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->integer('ranking')->nullable();
            $table->string('performance_class')->nullable();
            $table->integer('dtb_id')->nullable();
            $table->string('firstname');
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('tel_private')->nullable();
            $table->string('tel_mobile')->nullable();
            $table->date('birthday')->nullable();
            $table->boolean('core_team')->nullable();
            $table->string('role')->nullable();

            $table->string('email');
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
        Schema::dropIfExists('players');
    }
}
