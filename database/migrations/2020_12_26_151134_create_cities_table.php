<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('year')->nullable();
            $table->string('house')->nullable();;
            $table->bigInteger('yearfoundation')->nullable();;
            $table->string('size')->nullable();;
            $table->string('weather')->nullable();;
            $table->string('accent1')->nullable();
            $table->string('accent2')->nullable();
            $table->string('localSpeciality');
            $table->string('mayor')->nullable();
            $table->bigInteger('urbanPopulation')->nullable();;
            $table->bigInteger('ruralPopulation')->nullable();;
            $table->bigInteger('tradeMax')->nullable();;
            $table->string('localDrink')->nullable();;
            $table->string('education')->nullable();;
            $table->string('fortification')->nullable();;
            $table->string('lawAndOrder')->nullable();;
            $table->string('technology')->nullable();;
            $table->string('wealth')->nullable();;
            $table->string('economy1')->nullable();
            $table->string('economy2')->nullable();
            $table->string('economy3')->nullable();
            $table->string('economy4')->nullable();
            $table->string('economy5')->nullable();
            $table->string('economy6')->nullable();
            $table->string('economy7')->nullable();
            $table->string('economy8')->nullable();
            $table->string('economy9')->nullable();
            $table->string('economy10')->nullable();
            $table->string('offer1')->nullable();
            $table->string('offer2')->nullable();
            $table->string('nextCity1')->nullable();
            $table->string('nextCity2')->nullable();
            $table->string('offer1NextCity1')->nullable();
            $table->string('offer2NextCity1')->nullable();
            $table->string('offer1NextCity2')->nullable();
            $table->string('offer2NextCity2')->nullable();
            $table->string('demand1')->nullable();
            $table->string('demand2')->nullable();
            $table->string('demand1NextCity1')->nullable();
            $table->string('demand2NextCity1')->nullable();
            $table->string('demand1NextCity2')->nullable();
            $table->string('demand2NextCity2')->nullable();
            $table->text('story')->nullable();
            $table->string('version')->nullable();
            $table->Integer('chapter')->nullable();
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
        Schema::dropIfExists('cities');
    }
}
