<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('ShipName')->nullable(); 
            $table->string('ShipVersion')->unique();
            $table->string('ShipType')->nullable();
            $table->integer('ShipHighsea')->nullable();
            $table->integer('ShipNbrCrew')->nullable();            
            $table->integer('ShipNbrPassenger')->nullable();
            $table->integer('ShipNbrCannon')->nullable();
            $table->integer('ShipNbrCargo')->nullable();
            $table->string('ShipArea')->nullable();
            $table->integer('ShipSpeed')->nullable(); 
            $table->integer('ShipManeuverability')->nullable(); 
            $table->integer('ShipPv')->nullable();
            $table->integer('ShipCost')->nullable();
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
        Schema::dropIfExists('ships');
    }
}
