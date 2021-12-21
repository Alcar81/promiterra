<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrimoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grimoires', function (Blueprint $table) {

            
            $table->Increments('id')->unique();
            $table->string('GrimoireName')->nullable();
            $table->string('GrimoireVersion')->nullable();
            $table->integer('GrimoireNoSymbol')->nullable();
            $table->integer('GrimoireHoly')->nullable();
            $table->integer('GrimoireDamn')->nullable();
            $table->integer('GrimoireCost')->nullable();
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
        Schema::dropIfExists('grimoires');
    }
}
