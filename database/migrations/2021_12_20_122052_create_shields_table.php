<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shields', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('ShieldName')->nullable(); 
            $table->string('ShieldVersion')->unique();
            $table->integer('ShieldPhysic')->nullable();
            $table->integer('ShieldMinusFields')->nullable();            
            $table->integer('ShieldFace')->nullable();
            $table->integer('ShieldFlank')->nullable();
            $table->string('ShieldBack')->nullable();
            $table->string('ShieldProperty1')->nullable();
            $table->string('ShieldProperty2')->nullable();           
            $table->integer('ShieldCost')->nullable();
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
        Schema::dropIfExists('shields');
    }
}
