<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerbalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herbales', function (Blueprint $table) {
            $table->Increments('id')->unique();
            $table->string('HerbaleName')->nullable();
            $table->string('HerbaleVersion')->nullable();
            $table->integer('HerbalePv')->nullable();
            $table->integer('HerbaleCost')->nullable();            
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
        Schema::dropIfExists('herbales');
    }
}
