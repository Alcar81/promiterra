<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('characters', function (Blueprint $table) {

            $table->bigIncrements('id');
            Schema::disableForeignKeyConstraints();
            
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('restrict')->onUpdate('restrict');

            

            $table->string('character_name')->unique();
            $table->Integer('character_age')->nullable();
            $table->string('character_title')->nullable();
            $table->Integer('character_date_of_birth')->nullable();
            $table->Integer('character_month_of_birth')->nullable();
            $table->bigInteger('character_year_of_birth')->nullable();
            $table->bigInteger('character_experience')->nullable();
            $table->bigInteger('character_essence_game')->nullable();
            $table->bigInteger('character_essence_total')->nullable();

            $table->string('character_house_name')->nullable();
            $table->string('character_house_rank')->nullable();
            $table->string('character_house_dogma')->nullable();

            $table->string('character_guild_name')->nullable();
            $table->string('character_guild_dogma')->nullable();

            $table->string('character_career_name')->nullable();

            $table->Integer('character_career_physic')->nullable();
            $table->Integer('character_career_physic_bonus')->nullable();
            $table->Integer('character_career_physic_penalty')->nullable();

            $table->Integer('character_career_mental')->nullable();
            $table->Integer('character_career_mental_bonus')->nullable();
            $table->Integer('character_career_mental_penalty')->nullable();

            $table->Integer('character_career_reaction')->nullable();
            $table->Integer('character_career_reaction_bonus')->nullable();
            $table->Integer('character_career_reaction_penalty')->nullable();

            $table->bigInteger('character_life_point_max')->nullable();
            $table->bigInteger('character_life_point_game')->nullable();
            $table->bigInteger('character_life_point_bonus')->nullable();
            $table->bigInteger('character_life_point_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_point_max')->nullable();
            $table->bigInteger('character_magic_point_game')->nullable();
            $table->bigInteger('character_magic_point_bonus')->nullable();
            $table->bigInteger('character_magic_point_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_force_arcana_max')->nullable();
            $table->bigInteger('character_magic_force_arcana_game')->nullable();
            $table->bigInteger('character_magic_force_arcana_bonus')->nullable();
            $table->bigInteger('character_magic_force_arcana_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_force_holy_max')->nullable();
            $table->bigInteger('character_magic_force_holy_game')->nullable();
            $table->bigInteger('character_magic_force_holy_bonu')->nullable();
            $table->bigInteger('character_magic_force_holy_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_force_cursed_max')->nullable();
            $table->bigInteger('character_magic_force_cursed_game')->nullable();
            $table->bigInteger('character_magic_force_cursed_bonus')->nullable();
            $table->bigInteger('character_magic_force_cursed_percentage_bonus')->nullable();

            $table->bigInteger('character_gold')->nullable();
            $table->bigInteger('character_bank')->nullable();
            $table->Integer('character_lap_speed')->nullable();
            $table->Integer('character_init')->nullable();

            $table->Integer('character_movement')->nullable();
            $table->Integer('character_movement_bonus_humanTerritory')->nullable();
            $table->Integer('character_movement_bonus_inside')->nullable();
            $table->Integer('character_movement_bonus_savageTerritory')->nullable();
            $table->Integer('character_movement_bonus_naval')->nullable();
            $table->Integer('character_movement_bonus_mount')->nullable();

            $table->Integer('character_fields')->nullable();
            $table->Integer('character_fields_bonus_spell')->nullable();
            $table->Integer('character_fields_bonus_singing')->nullable();

            $table->string('character_weapon1_name')->nullable();
            $table->string('character_weapon1_type')->nullable();
            $table->Integer('character_weapon1_scope')->nullable();
            $table->Integer('character_weapon1_attack')->nullable();
            $table->Integer('character_weapon1_attack_b')->nullable();
            $table->Integer('character_weapon1_fumble')->nullable();
            $table->Integer('character_weapon1_damage')->nullable();
            $table->string('character_weapon1_dices')->nullable();
            $table->bigInteger('character_weapon1_critic')->nullable();
            $table->Integer('character_weapon1_face')->nullable();
            $table->Integer('character_weapon1_flank')->nullable();
            $table->Integer('character_weapon1_back')->nullable();
            $table->bigInteger('character_weapon1_value')->nullable();

            $table->string('character_weapon2_name')->nullable();
            $table->string('character_weapon2_type')->nullable();
            $table->Integer('character_weapon2_scope')->nullable();
            $table->Integer('character_weapon2_attack')->nullable();
            $table->Integer('character_weapon2_attack_b')->nullable();
            $table->Integer('character_weapon2_fumble')->nullable();
            $table->Integer('character_weapon2_damage')->nullable();
            $table->string('character_weapon2_dices')->nullable();
            $table->bigInteger('character_weapon2_critic')->nullable();
            $table->Integer('character_weapon2_face')->nullable();
            $table->Integer('character_weapon2_flank')->nullable();
            $table->Integer('character_weapon2_back')->nullable();
            $table->bigInteger('character_weapon2_value')->nullable();

            $table->string('character_weapon3_name')->nullable();
            $table->string('character_weapon3_type')->nullable();
            $table->Integer('character_weapon3_scope')->nullable();
            $table->Integer('character_weapon3_attack')->nullable();
            $table->Integer('character_weapon3_attack_b')->nullable();
            $table->Integer('character_weapon3_fumble')->nullable();
            $table->Integer('character_weapon3_damage')->nullable();
            $table->string('character_weapon3_dices')->nullable();
            $table->bigInteger('character_weapon3_critic')->nullable();
            $table->Integer('character_weapon3_face')->nullable();
            $table->Integer('character_weapon3_flank')->nullable();
            $table->Integer('character_weapon3_back')->nullable();
            $table->bigInteger('character_weapon3_value')->nullable();

            $table->string('character_weapon4_name')->nullable();
            $table->string('character_weapon4_type')->nullable();
            $table->Integer('character_weapon4_scope')->nullable();
            $table->Integer('character_weapon4_attack')->nullable();
            $table->Integer('character_weapon4_attack_b')->nullable();
            $table->Integer('character_weapon4_fumble')->nullable();
            $table->Integer('character_weapon4_damage')->nullable();
            $table->string('character_weapon4_dices')->nullable();
            $table->bigInteger('character_weapon4_critic')->nullable();
            $table->Integer('character_weapon4_face')->nullable();
            $table->Integer('character_weapon4_flank')->nullable();
            $table->Integer('character_weapon4_back')->nullable();
            $table->bigInteger('character_weapon4_value')->nullable();

            $table->string('character_weapon5_name')->nullable();
            $table->string('character_weapon5_type')->nullable();
            $table->Integer('character_weapon5_scope')->nullable();
            $table->Integer('character_weapon5_attack')->nullable();
            $table->Integer('character_weapon5_attack_b')->nullable();
            $table->Integer('character_weapon5_fumble')->nullable();
            $table->Integer('character_weapon5_damage')->nullable();
            $table->string('character_weapon5_dices')->nullable();
            $table->bigInteger('character_weapon5_critic')->nullable();
            $table->Integer('character_weapon5_face')->nullable();
            $table->Integer('character_weapon5_flank')->nullable();
            $table->Integer('character_weapon5_back')->nullable();
            $table->bigInteger('character_weapon5_value')->nullable();

            $table->string('character_armor1_name')->nullable();
            $table->Integer('character_armor1_piercing')->nullable();
            $table->Integer('character_armor1_edge')->nullable();
            $table->Integer('character_armor1_blunt')->nullable();
            $table->Integer('character_armor1_fire')->nullable();
            $table->Integer('character_armor1_spell')->nullable();
            $table->Integer('character_armor1_clutter')->nullable();
            $table->Integer('character_armor1_magic')->nullable();
            $table->bigInteger('character_armor1_value')->nullable();

            $table->string('character_armor2_name')->nullable();
            $table->Integer('character_armor2_piercing')->nullable();
            $table->Integer('character_armor2_edge')->nullable();
            $table->Integer('character_armor2_blunt')->nullable();
            $table->Integer('character_armor2_fire')->nullable();
            $table->Integer('character_armor2_spell')->nullable();
            $table->Integer('character_armor2_clutter')->nullable();
            $table->Integer('character_armor2_magic')->nullable();
            $table->bigInteger('character_armor2_value')->nullable();

            $table->string('character_armor3_name')->nullable();
            $table->Integer('character_armor3_piercing')->nullable();
            $table->Integer('character_armor3_edge')->nullable();
            $table->Integer('character_armor3_blunt')->nullable();
            $table->Integer('character_armor3_fire')->nullable();
            $table->Integer('character_armor3_spell')->nullable();
            $table->Integer('character_armor3_clutter')->nullable();
            $table->Integer('character_armor3_magic')->nullable();
            $table->bigInteger('character_armor3_value')->nullable();

            $table->string('character_shield_type')->nullable();
            $table->Integer('character_shield_physic')->nullable();
            $table->Integer('character_shield_field')->nullable();
            $table->Integer('character_shield_face')->nullable();
            $table->Integer('character_shield_flank')->nullable();
            $table->Integer('character_shield_back')->nullable();
            $table->bigInteger('character_shield_value')->nullable();

            $table->string('character_equipped_spellbook')->nullable();
            $table->bigInteger('character_equipped_spellbook_value')->nullable();

            $table->string('character_equipped_symbol')->nullable();
            $table->bigInteger('character_equipped_symbol_value')->nullable();

            $table->bigInteger('character_tma_alcool')->nullable();
            $table->Integer('character_tma_alcool_b')->nullable();
            $table->bigInteger('character_tma_artsNcrafts')->nullable();
            $table->Integer('character_tma_artsNcrafts_b')->nullable();
            $table->bigInteger('character_tma_carpentry')->nullable();
            $table->Integer('character_tma_carpentry_b')->nullable();
            $table->bigInteger('character_tma_huntingNfishing')->nullable();
            $table->Integer('character_tma_huntingNfishing_b')->nullable();
            $table->bigInteger('character_tma_drive')->nullable();
            $table->Integer('character_tma_drive_b')->nullable();
            $table->bigInteger('character_tma_strings')->nullable();
            $table->Integer('character_tma_strings_b')->nullable();
            $table->bigInteger('character_tma_run')->nullable();
            $table->Integer('character_tma_run_b')->nullable();
            $table->bigInteger('character_tma_balanced')->nullable();
            $table->Integer('character_tma_balanced_b')->nullable();
            $table->bigInteger('character_tma_horseriding')->nullable();
            $table->Integer('character_tma_horseriding_b')->nullable();
            $table->bigInteger('character_tma_climbing')->nullable();
            $table->Integer('character_tma_climbing_b')->nullable();
            $table->bigInteger('character_tma_fight')->nullable();
            $table->Integer('character_tma_fight_b')->nullable();
            $table->bigInteger('character_tma_metallurgy')->nullable();
            $table->Integer('character_tma_metallurgy_b')->nullable();
            $table->bigInteger('character_tma_swimming')->nullable();
            $table->Integer('character_tma_swimming_b')->nullable();
            $table->bigInteger('character_tma_navigation')->nullable();
            $table->Integer('character_tma_navigation_b')->nullable();
            $table->bigInteger('character_tma_torture')->nullable();
            $table->Integer('character_tma_torture_b')->nullable();
            $table->bigInteger('character_tma_dragonry')->nullable();
            $table->Integer('character_tma_dragonry_b')->nullable();

            $table->bigInteger('character_tha_acrobatics')->nullable();
            $table->Integer('character_tha_acrobatics_b')->nullable();
            $table->bigInteger('character_tha_naturecamo')->nullable();
            $table->Integer('character_tha_naturecamo_b')->nullable();
            $table->bigInteger('character_tha_urbancamo')->nullable();
            $table->Integer('character_tha_urbancamo_b')->nullable();
            $table->bigInteger('character_tha_lockpicking')->nullable();
            $table->Integer('character_tha_lockpicking_b')->nullable();
            $table->bigInteger('character_tha_disguise')->nullable();
            $table->Integer('character_tha_disguise_b')->nullable();
            $table->bigInteger('character_tha_demolition')->nullable();
            $table->Integer('character_tha_demolition_b')->nullable();
            $table->bigInteger('character_tha_discretnature')->nullable();
            $table->Integer('character_tha_discretnature_b')->nullable();
            $table->bigInteger('character_tha_discreturban')->nullable();
            $table->Integer('character_tha_discreturban_b')->nullable();
            $table->bigInteger('character_tha_concealment')->nullable();
            $table->Integer('character_tha_concealment_b')->nullable();
            $table->bigInteger('character_tha_medecine')->nullable();
            $table->Integer('character_tha_medecine_b')->nullable();
            $table->bigInteger('character_tha_trap')->nullable();
            $table->Integer('character_tha_trap_b')->nullable();
            $table->bigInteger('character_tha_precision')->nullable();
            $table->Integer('character_tha_precision_b')->nullable();
            $table->bigInteger('character_tha_technology')->nullable();
            $table->Integer('character_tha_technology_b')->nullable();
            $table->bigInteger('character_tha_thanatology')->nullable();
            $table->Integer('character_tha_thanatology_b')->nullable();
            $table->bigInteger('character_tha_pickpocketing')->nullable();
            $table->Integer('character_tha_pickpocketing_b')->nullable();
            $table->bigInteger('character_tha_tribaltattoo')->nullable();
            $table->Integer('character_tha_tribaltattoo_b')->nullable();

            $table->bigInteger('character_tse_analysis')->nullable();
            $table->Integer('character_tse_analysis_b')->nullable();
            $table->bigInteger('character_tse_concentration')->nullable();
            $table->Integer('character_tse_concentration_b')->nullable();
            $table->bigInteger('character_tse_cook')->nullable();
            $table->Integer('character_tse_cook_b')->nullable();
            $table->bigInteger('character_tse_detection')->nullable();
            $table->Integer('character_tse_detection_b')->nullable();
            $table->bigInteger('character_tse_dressage')->nullable();
            $table->Integer('character_tse_dressage_b')->nullable();
            $table->bigInteger('character_tse_listen')->nullable();
            $table->Integer('character_tse_listen_b')->nullable();
            $table->bigInteger('character_tse_evaluation')->nullable();
            $table->Integer('character_tse_evaluation_b')->nullable();
            $table->bigInteger('character_tse_lipreading')->nullable();
            $table->Integer('character_tse_lipreading_b')->nullable();
            $table->bigInteger('character_tse_meteorology')->nullable();
            $table->Integer('character_tse_meteorology_b')->nullable();
            $table->bigInteger('character_tse_observation')->nullable();
            $table->Integer('character_tse_observation_b')->nullable();
            $table->bigInteger('character_tse_smell')->nullable();
            $table->Integer('character_tse_smell_b')->nullable();
            $table->bigInteger('character_tse_orientation')->nullable();
            $table->Integer('character_tse_orientation_b')->nullable();
            $table->bigInteger('character_tse_perception')->nullable();
            $table->Integer('character_tse_perception_b')->nullable();
            $table->bigInteger('character_tse_tracking')->nullable();
            $table->Integer('character_tse_tracking_b')->nullable();
            $table->bigInteger('character_tse_research')->nullable();
            $table->Integer('character_tse_research_b')->nullable();
            $table->bigInteger('character_tse_pes')->nullable();
            $table->Integer('character_tse_pes_b')->nullable();

            $table->bigInteger('character_tso_spiel')->nullable();
            $table->Integer('character_tso_spiel_b')->nullable();
            $table->bigInteger('character_tso_corruption')->nullable();
            $table->Integer('character_tso_corruption_b')->nullable();
            $table->bigInteger('character_tso_eloquence')->nullable();
            $table->Integer('character_tso_eloquence_b')->nullable();
            $table->bigInteger('character_tso_empathy')->nullable();
            $table->Integer('character_tso_empathy_b')->nullable();
            $table->bigInteger('character_tso_counterfeiting')->nullable();
            $table->Integer('character_tso_counterfeiting_b')->nullable();
            $table->bigInteger('character_tso_hypnotism')->nullable();
            $table->Integer('character_tso_hypnotism_b')->nullable();
            $table->bigInteger('character_tso_intimidation')->nullable();
            $table->Integer('character_tso_intimidation_b')->nullable();
            $table->bigInteger('character_tso_secretjargon')->nullable();
            $table->Integer('character_tso_secretjargon_b')->nullable();
            $table->bigInteger('character_tso_game')->nullable();
            $table->Integer('character_tso_game_b')->nullable();
            $table->bigInteger('character_tso_leadership')->nullable();
            $table->Integer('character_tso_leadership_b')->nullable();
            $table->bigInteger('character_tso_bargaining')->nullable();
            $table->Integer('character_tso_bargaining_b')->nullable();
            $table->bigInteger('character_tso_performance')->nullable();
            $table->Integer('character_tso_performance_b')->nullable();
            $table->bigInteger('character_tso_rumors')->nullable();
            $table->Integer('character_tso_rumors_b')->nullable();
            $table->bigInteger('character_tso_seduction')->nullable();
            $table->Integer('character_tso_seduction_b')->nullable();
            $table->bigInteger('character_tso_ventriloquism')->nullable();
            $table->Integer('character_tso_ventriloquism_b')->nullable();
            $table->bigInteger('character_tso_ignisalta')->nullable();
            $table->Integer('character_tso_ignisalta_b')->nullable();

            $table->bigInteger('character_tco_ancientcult')->nullable();
            $table->Integer('character_tco_ancientcult_b')->nullable();
            $table->bigInteger('character_tco_astronomy')->nullable();
            $table->Integer('character_tco_astronomy_b')->nullable();
            $table->bigInteger('character_tco_library')->nullable();
            $table->Integer('character_tco_library_b')->nullable();
            $table->bigInteger('character_tco_creature')->nullable();
            $table->Integer('character_tco_creature_b')->nullable();
            $table->bigInteger('character_tco_geography')->nullable();
            $table->Integer('character_tco_geography_b')->nullable();
            $table->bigInteger('character_tco_history')->nullable();
            $table->Integer('character_tco_history_b')->nullable();
            $table->bigInteger('character_tco_identification')->nullable();
            $table->Integer('character_tco_identification_b')->nullable();
            $table->bigInteger('character_tco_houses')->nullable();
            $table->Integer('character_tco_houses_b')->nullable();
            $table->bigInteger('character_tco_nature')->nullable();
            $table->Integer('character_tco_nature_b')->nullable();
            $table->bigInteger('character_tco_occultism')->nullable();
            $table->Integer('character_tco_occultism_b')->nullable();
            $table->bigInteger('character_tco_politics')->nullable();
            $table->Integer('character_tco_politics_b')->nullable();
            $table->bigInteger('character_tco_ritualofdeath')->nullable();
            $table->Integer('character_tco_ritualofdeath_b')->nullable();
            $table->bigInteger('character_tco_spell')->nullable();
            $table->Integer('character_tco_spell_b')->nullable();
            $table->bigInteger('character_tco_tactical')->nullable();
            $table->Integer('character_tco_tactical_b')->nullable();
            $table->bigInteger('character_tco_theology')->nullable();
            $table->Integer('character_tco_theology_b')->nullable();
            $table->bigInteger('character_tco_ritualofstars')->nullable();
            $table->Integer('character_tco_ritualofstars_b')->nullable();

            $table->bigInteger('character_influence_meraltor')->nullable();
            $table->bigInteger('character_influence_aravas')->nullable();
            $table->bigInteger('character_influence_clergy')->nullable();
            $table->bigInteger('character_influence_berrouve')->nullable();
            $table->bigInteger('character_influence_harlog')->nullable();
            $table->bigInteger('character_influence_brotherhood')->nullable();
            $table->bigInteger('character_influence_duloir')->nullable();
            $table->bigInteger('character_influence_tiar')->nullable();
            $table->bigInteger('character_influence_wolfcircle')->nullable();
            $table->bigInteger('character_influence_arcadis')->nullable();
            $table->bigInteger('character_influence_komeidai')->nullable();
            $table->bigInteger('character_influence_savie')->nullable();
            $table->bigInteger('character_influence_mortuterra')->nullable();
            $table->bigInteger('character_influence_collectorsguild')->nullable();
            $table->bigInteger('character_influence_total')->nullable();


            $table->TEXT('character_background')->nullable();

            $table->string('character_injury1_name')->nullable();
            $table->TEXT('character_injury1_descr')->nullable();
            $table->BigInteger('character_injury1_year')->nullable();
            $table->Integer('character_injury1_month')->nullable();
            $table->Integer('character_injury1_day')->nullable();

            $table->string('character_injury2_name')->nullable();
            $table->TEXT('character_injury2_descr')->nullable();
            $table->BigInteger('character_injury2_year')->nullable();
            $table->Integer('character_injury2_month')->nullable();
            $table->Integer('character_injury2_day')->nullable();

            $table->string('character_injury3_name')->nullable();
            $table->TEXT('character_injury3_descr')->nullable();
            $table->BigInteger('character_injury3_year')->nullable();
            $table->Integer('character_injury3_month')->nullable();
            $table->Integer('character_injury3_day')->nullable();

            $table->string('character_injury4_name')->nullable();
            $table->TEXT('character_injury4_descr')->nullable();
            $table->BigInteger('character_injury4_year')->nullable();
            $table->Integer('character_injury4_month')->nullable();
            $table->Integer('character_injury4_day')->nullable();

            $table->string('character_injury5_name')->nullable();
            $table->TEXT('character_injury5_descr')->nullable();
            $table->BigInteger('character_injury5_year')->nullable();
            $table->Integer('character_injury5_month')->nullable();
            $table->Integer('character_injury5_day')->nullable();

            $table->string('character_injury6_name')->nullable();
            $table->TEXT('character_injury6_descr')->nullable();
            $table->BigInteger('character_injury6_year')->nullable();
            $table->Integer('character_injury6_month')->nullable();
            $table->Integer('character_injury6_day')->nullable();

            $table->string('character_injury7_name')->nullable();
            $table->TEXT('character_injury7_descr')->nullable();
            $table->BigInteger('character_injury7_year')->nullable();
            $table->Integer('character_injury7_month')->nullable();
            $table->Integer('character_injury7_day')->nullable();

            $table->string('character_injury8_name')->nullable();
            $table->TEXT('character_injury8_descr')->nullable();
            $table->BigInteger('character_injury8_year')->nullable();
            $table->Integer('character_injury8_month')->nullable();
            $table->Integer('character_injury8_day')->nullable();

            $table->string('character_scar1_name')->nullable();
            $table->TEXT('character_scar1_descr')->nullable();
            $table->BigInteger('character_scar1_year')->nullable();
            $table->Integer('character_scar1_month')->nullable();
            $table->Integer('character_scar1_day')->nullable();

            $table->string('character_scar2_name')->nullable();
            $table->TEXT('character_scar2_descr')->nullable();
            $table->BigInteger('character_scar2_year')->nullable();
            $table->Integer('character_scar2_month')->nullable();
            $table->Integer('character_scar2_day')->nullable();

            $table->string('character_scar3_name')->nullable();
            $table->TEXT('character_scar3_descr')->nullable();
            $table->BigInteger('character_scar3_year')->nullable();
            $table->Integer('character_scar3_month')->nullable();
            $table->Integer('character_scar3_day')->nullable();

            $table->string('character_scar4_name')->nullable();
            $table->TEXT('character_scar4_descr')->nullable();
            $table->BigInteger('character_scar4_year')->nullable();
            $table->Integer('character_scar4_month')->nullable();
            $table->Integer('character_scar4_day')->nullable();

            $table->string('character_scar5_name')->nullable();
            $table->TEXT('character_scar5_descr')->nullable();
            $table->BigInteger('character_scar5_year')->nullable();
            $table->Integer('character_scar5_month')->nullable();
            $table->Integer('character_scar5_day')->nullable();

            $table->string('character_scar6_name')->nullable();
            $table->TEXT('character_scar6_descr')->nullable();
            $table->BigInteger('character_scar6_year')->nullable();
            $table->Integer('character_scar6_month')->nullable();
            $table->Integer('character_scar6_day')->nullable();

            $table->string('character_scar7_name')->nullable();
            $table->TEXT('character_scar7_descr')->nullable();
            $table->BigInteger('character_scar7_year')->nullable();
            $table->Integer('character_scar7_month')->nullable();
            $table->Integer('character_scar7_day')->nullable();

            $table->string('character_scar8_name')->nullable();
            $table->TEXT('character_scar8_descr')->nullable();
            $table->BigInteger('character_scar8_year')->nullable();
            $table->Integer('character_scar8_month')->nullable();
            $table->Integer('character_scar8_day')->nullable();

            $table->string('character_deco1_name')->nullable();
            $table->TEXT('character_deco1_descr')->nullable();
            $table->BigInteger('character_deco1_year')->nullable();
            $table->Integer('character_deco1_month')->nullable();
            $table->Integer('character_deco1_day')->nullable();

            $table->string('character_deco2_name')->nullable();
            $table->TEXT('character_deco2_descr')->nullable();
            $table->BigInteger('character_deco2_year')->nullable();
            $table->Integer('character_deco2_month')->nullable();
            $table->Integer('character_deco2_day')->nullable();

            $table->string('character_deco3_name')->nullable();
            $table->TEXT('character_deco3_descr')->nullable();
            $table->BigInteger('character_deco3_year')->nullable();
            $table->Integer('character_deco3_month')->nullable();
            $table->Integer('character_deco3_day')->nullable();

            $table->string('character_deco4_name')->nullable();
            $table->TEXT('character_deco4_descr')->nullable();
            $table->BigInteger('character_deco4_year')->nullable();
            $table->Integer('character_deco4_month')->nullable();
            $table->Integer('character_deco4_day')->nullable();

            $table->string('character_deco5_name')->nullable();
            $table->TEXT('character_deco5_descr')->nullable();
            $table->BigInteger('character_deco5_year')->nullable();
            $table->Integer('character_deco5_month')->nullable();
            $table->Integer('character_deco5_day')->nullable();

            $table->string('character_deco6_name')->nullable();
            $table->TEXT('character_deco6_descr')->nullable();
            $table->BigInteger('character_deco6_year')->nullable();
            $table->Integer('character_deco6_month')->nullable();
            $table->Integer('character_deco6_day')->nullable();

            $table->string('character_deco7_name')->nullable();
            $table->TEXT('character_deco7_descr')->nullable();
            $table->BigInteger('character_deco7_year')->nullable();
            $table->Integer('character_deco7_month')->nullable();
            $table->Integer('character_deco7_day')->nullable();

            $table->string('character_deco8_name')->nullable();
            $table->TEXT('character_deco8_descr')->nullable();
            $table->BigInteger('character_deco8_year')->nullable();
            $table->Integer('character_deco8_month')->nullable();
            $table->Integer('character_deco8_day')->nullable();

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

        Schema::dropIfExists('characters');
    }
}
