<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeaponsTableWeaponSubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('weapons', function (Blueprint $table) {
            $table->string('WeaponSubCategory')->nullable()->after('WeaponCategory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('weapons', function (Blueprint $table) {
            //
        });
    }
}
