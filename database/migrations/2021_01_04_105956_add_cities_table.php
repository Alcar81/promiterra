<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cities', function (Blueprint $table) {

            $table->string('nextCity3')->nullable()->after('nextCity2');
            $table->string('nextCity4')->nullable()->after('nextCity3');
            $table->string('nextCity5')->nullable()->after('nextCity4');
            $table->string('nextCity6')->nullable()->after('nextCity5');

            $table->string('offer1NextCity3')->nullable()->after('offer2NextCity2');
            $table->string('offer2NextCity3')->nullable()->after('offer1NextCity3');
            $table->string('offer1NextCity4')->nullable()->after('offer2NextCity3');
            $table->string('offer2NextCity4')->nullable()->after('offer1NextCity4');
            $table->string('offer1NextCity5')->nullable()->after('offer2NextCity4');
            $table->string('offer2NextCity5')->nullable()->after('offer1NextCity5');
            $table->string('offer1NextCity6')->nullable()->after('offer2NextCity5');
            $table->string('offer2NextCity6')->nullable()->after('offer1NextCity6');

            $table->string('demand1NextCity3')->nullable()->after('demand2NextCity2');
            $table->string('demand2NextCity3')->nullable()->after('demand1NextCity3');
            $table->string('demand1NextCity4')->nullable()->after('demand2NextCity3');
            $table->string('demand2NextCity4')->nullable()->after('demand1NextCity4');
            $table->string('demand1NextCity5')->nullable()->after('demand2NextCity4');
            $table->string('demand2NextCity5')->nullable()->after('demand1NextCity5');
            $table->string('demand1NextCity6')->nullable()->after('demand2NextCity5');
            $table->string('demand2NextCity6')->nullable()->after('demand1NextCity6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cities', function (Blueprint $table) {
            //
        });
    }
}
