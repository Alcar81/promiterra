<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mounts', function (Blueprint $table) {
            $table->Increments('id')->unique();
            $table->string('MountName')->nullable();
            $table->string('MountVersion')->nullable();
            $table->integer('MountPv')->nullable();
            $table->string('MountShield')->nullable();
            $table->integer('MountPhysic')->nullable();
            $table->integer('MountMental')->nullable();
            $table->integer('MountReact')->nullable();
            $table->integer('MountMovement')->nullable();
            $table->integer('MountCost')->nullable();            
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
        Schema::dropIfExists('mounts');
    }
}
