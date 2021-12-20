<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
        
            $table->Increments('id')->unique();
            $table->string('WeaponVersion')->unique();
            $table->string('WeaponCategory')->nullable();
            $table->string('WeaponName')->nullable();
            $table->string('WeaponType1')->nullable();
            $table->string('WeaponType2')->nullable();
            $table->Integer('WeaponNumberHands')->nullable();
            $table->Integer('WeaponScope')->nullable();
            $table->Integer('WeaponAttack')->nullable();
            $table->Integer('WeaponCritical')->nullable();
            $table->Integer('WeaponFace')->nullable();
            $table->Integer('WeaponFlank')->nullable();
            $table->Integer('WeaponBack')->nullable();
            $table->Integer('WeaponCost')->nullable();
            $table->Integer('WeaponClumsiness')->nullable();
            $table->string('WeaponProperty1')->nullable();
            $table->string('WeaponProperty2')->nullable();
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
        Schema::dropIfExists('weapons');
    }
}
