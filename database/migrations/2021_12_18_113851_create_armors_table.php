<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armors', function (Blueprint $table) {
            
            $table->Increments('id')->unique();
            $table->string('ArmorVersion')->unique();
            $table->string('ArmorCategory')->nullable();
            $table->string('ArmorName')->nullable();
            $table->integer('ArmorPiercing')->nullable();
            $table->integer('ArmorSharp')->nullable();
            $table->Integer('ArmorBlunt')->nullable();
            $table->Integer('ArmorFire')->nullable();
            $table->Integer('ArmorSpell')->nullable();
            $table->string('ArmorClutter')->nullable();
            $table->Integer('ArmorMagic')->nullable();  
            $table->string('ArmorProperty1')->nullable();
            $table->string('ArmorProperty2')->nullable();
            $table->Integer('ArmorCost')->nullable();
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
        Schema::dropIfExists('armors');
    }
}
