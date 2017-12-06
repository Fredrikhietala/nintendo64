<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarioPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mario_parties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id', false, true)->nullable();
            $table->integer('year')->nullable();
            $table->string('placing', 10)->nullable();
            $table->tinyInteger('result')->nullable();
            $table->tinyInteger('points')->nullable();
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
        Schema::dropIfExists('mario_parties');
    }
}