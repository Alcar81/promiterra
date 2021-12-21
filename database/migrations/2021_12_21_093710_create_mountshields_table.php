<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMountshieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mountshields', function (Blueprint $table) {
            
            $table->Increments('id')->unique();
            $table->string('MountShieldName')->nullable();
            $table->string('MountShieldVersion')->nullable();
            $table->string('MountShieldType')->nullable();
            $table->integer('MountShieldPiercing')->nullable();
            $table->integer('MountShieldSharp')->nullable();
            $table->integer('MountShieldBlunt')->nullable();
            $table->integer('MountShieldFire')->nullable();
            $table->integer('MountShieldSpell')->nullable();
            $table->integer('MountShieldCost')->nullable();
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
        Schema::dropIfExists('mountshields');
    }
}
