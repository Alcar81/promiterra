<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCannonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cannons', function (Blueprint $table) {
            
            $table->id()->unique();
            $table->string('CannonName')->nullable(); 
            $table->string('CannonVersion')->unique();
            $table->integer('CannonMovement')->nullable();
            $table->integer('CannonScope')->nullable();
            $table->integer('CannonRange')->nullable();            
            $table->integer('CannonDamage')->nullable();
            $table->integer('CannonTouch')->nullable();
            $table->integer('CannonTrouble')->nullable();
            $table->string('CannonCost')->nullable();
            $table->integer('CannonBallCost')->nullable(); 
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
        Schema::dropIfExists('cannons');
    }
}
