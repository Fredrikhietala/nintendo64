<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totals', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->unsignedInteger('player_id')->index();
            $table->integer('year');
            $table->string('placing', 10);
            $table->unsignedTinyInteger('result');
            $table->unsignedTinyInteger('points');
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
        Schema::dropIfExists('totals');
    }
}
