<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBombsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bombs', function (Blueprint $table) {
            
            $table->id()->unique();
            $table->string('BombName')->nullable(); 
            $table->string('BombVersion')->unique();
            $table->string('BombType1')->nullable();
            $table->string('BombType2')->nullable();
            $table->integer('BombR1')->nullable();            
            $table->integer('BombR2')->nullable();
            $table->integer('BombR3')->nullable();
            $table->integer('BombR4')->nullable();
            $table->integer('BombR5')->nullable();
            $table->integer('BombClumsiness')->nullable();
            $table->integer('BombCost')->nullable(); 
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
        Schema::dropIfExists('bombs');
    }
}
