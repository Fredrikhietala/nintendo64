<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarioKartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mario_karts', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->integer('player_id');
            $table->integer('year')->nullable();
            $table->integer('placing')->nullable();
            $table->integer('result')->nullable();
            $table->integer('points')->nullable();
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
        Schema::dropIfExists('mario_karts');
    }
}
