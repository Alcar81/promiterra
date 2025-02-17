<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {

           
            $table->Increments('id')->unique();
            $table->string('CareerVersion')->unique();

            $table->Integer('CareerIDClass')->unique();
            $table->string('CareerParent1Name')->nullable();
            $table->Integer('CareerIDParent1')->nullable();
            $table->string('CareerParent2Name')->nullable();
            $table->Integer('CareerIDParent2')->nullable();
            $table->string('CareerClassName')->nullable();
            $table->string('CareerImage')->nullable();
            $table->string('CareerImageArtist')->nullable();
            $table->text('CareerDescription')->nullable();
            $table->Integer('CareerPhysical')->nullable();
            $table->Integer('CareerMental')->nullable();
            $table->Integer('CareerReaction')->nullable();
            $table->string('CareerManual')->nullable();
            $table->string('CareerAbility')->nullable();
            $table->string('CareerSenses')->nullable();
            $table->string('CareerSocial')->nullable();
            $table->string('CareerKnowledge')->nullable();            
            $table->string('CareerAuchoix')->nullable();
            $table->string('CareerWeapons1')->nullable();
            $table->string('CareerWeapons2')->nullable();
            $table->string('CareerWeapons3')->nullable();
            $table->string('CareerWeapons4')->nullable();
            $table->string('CareerWeapons5')->nullable();
            $table->string('CareerWeapons6')->nullable();
            $table->string('CareerWeapons7')->nullable();
            $table->string('CareerWeapons8')->nullable();
            $table->string('CareerWeapons9')->nullable();
            $table->string('CareerArmors1')->nullable();
            $table->string('CareerArmors2')->nullable();
            $table->string('CareerArmors3')->nullable();
            $table->string('CareerSpecials1')->nullable();
            $table->string('CareerSpecials2')->nullable();
            $table->string('CareerSpecials3')->nullable();
            $table->string('CareerAction1Name')->nullable();
            $table->text('CareerAction1Desc')->nullable();
            $table->string('CareerAction2Name')->nullable();
            $table->text('CareerAction2Desc')->nullable();
            $table->string('CareerAction3Name')->nullable();
            $table->text('CareerAction3Desc')->nullable();
            $table->string('CareerAction4Name')->nullable();
            $table->text('CareerAction4Desc')->nullable();
            $table->string('CareerAction5Name')->nullable();
            $table->text('CareerAction5Desc')->nullable();
            $table->string('CareerAction6Name')->nullable();
            $table->text('CareerAction6Desc')->nullable();
            $table->string('CareerAction7Name')->nullable();
            $table->text('CareerAction7Desc')->nullable();
            $table->string('CareerAction8Name')->nullable();
            $table->text('CareerAction8Desc')->nullable();
            $table->string('CareerTalent1Name')->nullable();
            $table->text('CareerTalent1Desc')->nullable();
            $table->string('CareerTalent2Name')->nullable();
            $table->text('CareerTalent2Desc')->nullable();
            $table->string('CareerTalent3Name')->nullable();
            $table->text('CareerTalent3Desc')->nullable();
            $table->string('CareerTalent4Name')->nullable();
            $table->text('CareerTalent4Desc')->nullable();
            
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
        Schema::dropIfExists('careers');
    }
}
