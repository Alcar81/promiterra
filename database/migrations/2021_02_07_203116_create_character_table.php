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
            $table->bigInteger('user_id');
            $table->string('character_name')->unique();
            $table->Integer('character_age');
            $table->string('character_title');
            $table->Integer('character_date_of_birth');
            $table->Integer('character_month_of_birth');
            $table->bigInteger('character_year_of_birth');
            $table->bigInteger('character_experience')->nullable();
            $table->bigInteger('character_essence_game')->nullable();
            $table->bigInteger('character_essence_total')->nullable();

            $table->string('character_house_name');
            $table->string('character_house_rank');
            $table->string('character_house_dogma');

            $table->string('character_guild_name');
            $table->string('character_guild_dogma');

            $table->string('character_career_name');

            $table->Integer('character_career_physic');
            $table->Integer('character_career_physic_bonus')->nullable();
            $table->Integer('character_career_physic_penalty')->nullable();

            $table->Integer('character_career_mental');
            $table->Integer('character_career_mental_bonus')->nullable();
            $table->Integer('character_career_mental_penalty')->nullable();

            $table->Integer('character_career_reaction');
            $table->Integer('character_career_reaction_bonus')->nullable();
            $table->Integer('character_career_reaction_penalty')->nullable();

            $table->bigInteger('character_life_point_max');
            $table->bigInteger('character_life_point_game');
            $table->bigInteger('character_life_point_bonus')->nullable();
            $table->bigInteger('character_life_point_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_point_max');
            $table->bigInteger('character_magic_point_game');
            $table->bigInteger('character_magic_point_bonus')->nullable();
            $table->bigInteger('character_magic_point_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_force_arcana_max');
            $table->bigInteger('character_magic_force_arcana_game');
            $table->bigInteger('character_magic_force_arcana_bonus')->nullable();
            $table->bigInteger('character_magic_force_arcana_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_force_holy_max');
            $table->bigInteger('character_magic_force_holy_game');
            $table->bigInteger('character_magic_force_holy_bonu')->nullable();
            $table->bigInteger('character_magic_force_holy_percentage_bonus')->nullable();

            $table->bigInteger('character_magic_force_cursed_max');
            $table->bigInteger('character_magic_force_cursed_game');
            $table->bigInteger('character_magic_force_cursed_bonus')->nullable();
            $table->bigInteger('character_magic_force_cursed_percentage_bonus')->nullable();

            $table->bigInteger('character_gold')->nullable();
            $table->bigInteger('character_bank')->nullable();
            $table->Integer('character_lap_speed');

            $table->Integer('character_movement');
            $table->Integer('character_movement_bonus_humanTerritory');
            $table->Integer('character_movement_bonus_inside');
            $table->Integer('character_movement_bonus_savageTerritory');
            $table->Integer('character_movement_bonus_naval');
            $table->Integer('character_movement_bonus_mount');

            $table->Integer('character_fields');
            $table->Integer('character_fields_bonus_spell');

            $table->string('character_weapon1_name');
            $table->string('character_weapon1_type');
            $table->Integer('character_weapon1_scope');
            $table->Integer('character_weapon1_attack');
            $table->Integer('character_weapon1_fumble');
            $table->Integer('character_weapon1_damage');
            $table->string('character_weapon1_dices');
            $table->bigInteger('character_weapon1_critic');
            $table->Integer('character_weapon1_face');
            $table->Integer('character_weapon1_flank');
            $table->Integer('character_weapon1_back');
            $table->bigInteger('character_weapon1_value');

            $table->string('character_weapon2_name');
            $table->string('character_weapon2_type');
            $table->Integer('character_weapon2_scope');
            $table->Integer('character_weapon2_attack');
            $table->Integer('character_weapon2_fumble');
            $table->Integer('character_weapon2_damage');
            $table->string('character_weapon2_dices');
            $table->bigInteger('character_weapon2_critic');
            $table->Integer('character_weapon2_face');
            $table->Integer('character_weapon2_flank');
            $table->Integer('character_weapon2_back');
            $table->bigInteger('character_weapon2_value');

            $table->string('character_weapon3_name');
            $table->string('character_weapon3_type');
            $table->Integer('character_weapon3_scope');
            $table->Integer('character_weapon3_attack');
            $table->Integer('character_weapon3_fumble');
            $table->Integer('character_weapon3_damage');
            $table->string('character_weapon3_dices');
            $table->bigInteger('character_weapon3_critic');
            $table->Integer('character_weapon3_face');
            $table->Integer('character_weapon3_flank');
            $table->Integer('character_weapon3_back');
            $table->bigInteger('character_weapon3_value');

            $table->string('character_weapon4_name');
            $table->string('character_weapon4_type');
            $table->Integer('character_weapon4_scope');
            $table->Integer('character_weapon4_attack');
            $table->Integer('character_weapon4_fumble');
            $table->Integer('character_weapon4_damage');
            $table->string('character_weapon4_dices');
            $table->bigInteger('character_weapon4_critic');
            $table->Integer('character_weapon4_face');
            $table->Integer('character_weapon4_flank');
            $table->Integer('character_weapon4_back');
            $table->bigInteger('character_weapon4_value');

            $table->string('character_weapon5_name');
            $table->string('character_weapon5_type');
            $table->Integer('character_weapon5_scope');
            $table->Integer('character_weapon5_attack');
            $table->Integer('character_weapon5_fumble');
            $table->Integer('character_weapon5_damage');
            $table->string('character_weapon5_dices');
            $table->bigInteger('character_weapon5_critic');
            $table->Integer('character_weapon5_face');
            $table->Integer('character_weapon5_flank');
            $table->Integer('character_weapon5_back');
            $table->bigInteger('character_weapon5_value');

            $table->string('character_armor1_name');
            $table->Integer('character_armor1_piercing');
            $table->Integer('character_armor1_edge');
            $table->Integer('character_armor1_blunt');
            $table->Integer('character_armor1_fire');
            $table->string('character_armor1_spell');
            $table->bigInteger('character_armor1_value');

            $table->string('character_armor2_name');
            $table->Integer('character_armor2_piercing');
            $table->Integer('character_armor2_edge');
            $table->Integer('character_armor2_blunt');
            $table->Integer('character_armor2_fire');
            $table->string('character_armor2_spell');
            $table->bigInteger('character_armor2_value');

            $table->string('character_armor3_name');
            $table->Integer('character_armor3_piercing');
            $table->Integer('character_armor3_edge');
            $table->Integer('character_armor3_blunt');
            $table->Integer('character_armor3_fire');
            $table->string('character_armor3_spell');
            $table->bigInteger('character_armor3_value');

            $table->string('character_shield_type');
            $table->Integer('character_shield_physic');
            $table->Integer('character_shield_field');
            $table->Integer('character_shield_face');
            $table->Integer('character_shield_flank');
            $table->Integer('character_shield_back');
            $table->bigInteger('character_shield_value');

            $table->string('character_equipped_spellbook');
            $table->bigInteger('character_equipped_spellbook_value');

            $table->string('character_equipped_symbol');
            $table->bigInteger('character_equipped_symbol_value');

            $table->bigInteger('character_tma_alcool');
            $table->Integer('character_tma_alcool_b');
            $table->bigInteger('character_tma_arts&crafts');
            $table->Integer('character_tma_arts&crafts_b');
            $table->bigInteger('character_tma_carpentry');
            $table->Integer('character_tma_carpentry_b');
            $table->bigInteger('character_tma_hunting&fishing');
            $table->Integer('character_tma_hunting&fishing_b');
            $table->bigInteger('character_tma_drive');
            $table->Integer('character_tma_drive_b');
            $table->bigInteger('character_tma_strings');
            $table->Integer('character_tma_strings_b');
            $table->bigInteger('character_tma_run');
            $table->Integer('character_tma_run_b');
            $table->bigInteger('character_tma_balanced');
            $table->Integer('character_tma_balanced_b');
            $table->bigInteger('character_tma_horseriding');
            $table->Integer('character_tma_horseriding_b');
            $table->bigInteger('character_tma_climbing');
            $table->Integer('character_tma_climbing_b');
            $table->bigInteger('character_tma_fight');
            $table->Integer('character_tma_fight_b');
            $table->bigInteger('character_tma_metallurgy');
            $table->Integer('character_tma_metallurgy_b');
            $table->bigInteger('character_tma_swimming');
            $table->Integer('character_tma_swimming_b');
            $table->bigInteger('character_tma_navigation');
            $table->Integer('character_tma_navigation_b');
            $table->bigInteger('character_tma_torture');
            $table->Integer('character_tma_torture_b');
            $table->bigInteger('character_tma_dragonry');
            $table->Integer('character_tma_dragonry_b');

            $table->bigInteger('character_tha_acrobatics');
            $table->Integer('character_tha_acrobatics_b');
            $table->bigInteger('character_tha_naturecamo');
            $table->Integer('character_tha_naturecamo_b');
            $table->bigInteger('character_tha_urbancamo');
            $table->Integer('character_tha_urbancamo_b');
            $table->bigInteger('character_tha_lockpicking');
            $table->Integer('character_tha_lockpicking_b');
            $table->bigInteger('character_tha_disguise');
            $table->Integer('character_tha_disguise_b');
            $table->bigInteger('character_tha_demolition');
            $table->Integer('character_tha_demolition_b');
            $table->bigInteger('character_tha_discretnature');
            $table->Integer('character_tha_discretnature_b');
            $table->bigInteger('character_tha_discreturban');
            $table->Integer('character_tha_discreturban_b');
            $table->bigInteger('character_tha_concealment');
            $table->Integer('character_tha_concealment_b');
            $table->bigInteger('character_tha_medecine');
            $table->Integer('character_tha_medecine_b');
            $table->bigInteger('character_tha_trap');
            $table->Integer('character_tha_trap_b');
            $table->bigInteger('character_tha_precision');
            $table->Integer('character_tha_precision_b');
            $table->bigInteger('character_tha_technology');
            $table->Integer('character_tha_technology_b');
            $table->bigInteger('character_tha_thanatology');
            $table->Integer('character_tha_thanatology_b');
            $table->bigInteger('character_tha_pickpocketing');
            $table->Integer('character_tha_pickpocketing_b');
            $table->bigInteger('character_tha_tribaltattoo');
            $table->Integer('character_tha_tribaltattoo_b');

            $table->bigInteger('character_tse_analysis');
            $table->Integer('character_tse_analysis_b');
            $table->bigInteger('character_tse_concentration');
            $table->Integer('character_tse_concentration_b');
            $table->bigInteger('character_tse_cook');
            $table->Integer('character_tse_cook_b');
            $table->bigInteger('character_tse_detection');
            $table->Integer('character_tse_detection_b');
            $table->bigInteger('character_tse_dressage');
            $table->Integer('character_tse_dressage_b');
            $table->bigInteger('character_tse_listen');
            $table->Integer('character_tse_listen_b');
            $table->bigInteger('character_tse_evaluation');
            $table->Integer('character_tse_evaluation_b');
            $table->bigInteger('character_tse_lipreading');
            $table->Integer('character_tse_lipreading_b');
            $table->bigInteger('character_tse_meteorology');
            $table->Integer('character_tse_meteorology_b');
            $table->bigInteger('character_tse_observation');
            $table->Integer('character_tse_observation_b');
            $table->bigInteger('character_tse_smell');
            $table->Integer('character_tse_smell_b');
            $table->bigInteger('character_tse_orientation');
            $table->Integer('character_tse_orientation_b');
            $table->bigInteger('character_tse_perception');
            $table->Integer('character_tse_perception_b');
            $table->bigInteger('character_tse_tracking');
            $table->Integer('character_tse_tracking_b');
            $table->bigInteger('character_tse_research');
            $table->Integer('character_tse_research_b');
            $table->bigInteger('character_tse_pes');
            $table->Integer('character_tse_pes_b');

            $table->bigInteger('character_tso_spiel');
            $table->Integer('character_tso_spiel_b');
            $table->bigInteger('character_tso_corruption');
            $table->Integer('character_tso_corruption_b');
            $table->bigInteger('character_tso_eloquence');
            $table->Integer('character_tso_eloquence_b');
            $table->bigInteger('character_tso_empathy');
            $table->Integer('character_tso_empathy_b');
            $table->bigInteger('character_tso_counterfeiting');
            $table->Integer('character_tso_counterfeiting_b');
            $table->bigInteger('character_tso_hypnotism');
            $table->Integer('character_tso_hypnotism_b');
            $table->bigInteger('character_tso_intimidation');
            $table->Integer('character_tso_intimidation_b');
            $table->bigInteger('character_tso_secretjargon');
            $table->Integer('character_tso_secretjargon_b');
            $table->bigInteger('character_tso_game');
            $table->Integer('character_tso_game_b');
            $table->bigInteger('character_tso_leadership');
            $table->Integer('character_tso_leadership_b');
            $table->bigInteger('character_tso_bargaining');
            $table->Integer('character_tso_bargaining_b');
            $table->bigInteger('character_tso_performance');
            $table->Integer('character_tso_performance_b');
            $table->bigInteger('character_tso_rumors');
            $table->Integer('character_tso_rumors_b');
            $table->bigInteger('character_tso_seduction');
            $table->Integer('character_tso_seduction_b');
            $table->bigInteger('character_tso_ventriloquism');
            $table->Integer('character_tso_ventriloquism_b');
            $table->bigInteger('character_tso_ignisalta');
            $table->Integer('character_tso_ignisalta_b');

            $table->bigInteger('character_tco_ancientcult');
            $table->Integer('character_tco_ancientcult_b');
            $table->bigInteger('character_tco_astronomy');
            $table->Integer('character_tco_astronomy_b');
            $table->bigInteger('character_tco_library');
            $table->Integer('character_tco_library_b');
            $table->bigInteger('character_tco_creature');
            $table->Integer('character_tco_creature_b');
            $table->bigInteger('character_tco_geography');
            $table->Integer('character_tco_geography_b');
            $table->bigInteger('character_tco_history');
            $table->Integer('character_tco_history_b');
            $table->bigInteger('character_tco_identification');
            $table->Integer('character_tco_identification_b');
            $table->bigInteger('character_tco_houses');
            $table->Integer('character_tco_houses_b');
            $table->bigInteger('character_tco_nature');
            $table->Integer('character_tco_nature_b');
            $table->bigInteger('character_tco_occultism');
            $table->Integer('character_tco_occultism_b');
            $table->bigInteger('character_tco_politics');
            $table->Integer('character_tco_politics_b');
            $table->bigInteger('character_tco_ritualofdeath');
            $table->Integer('character_tco_ritualofdeath_b');
            $table->bigInteger('character_tco_spell');
            $table->Integer('character_tco_spell_b');
            $table->bigInteger('character_tco_tactical');
            $table->Integer('character_tco_tactical_b');
            $table->bigInteger('character_tco_theology');
            $table->Integer('character_tco_theology_b');
            $table->bigInteger('character_tco_ritualofstars');
            $table->Integer('character_tco_ritualofstars_b');

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


            $table->string('character_background')->nullable();

            $table->string('character_injury1_name')->nullable();
            $table->string('character_injury1_descr')->nullable();
            $table->BigInteger('character_injury1_year')->nullable();
            $table->Integer('character_injury1_month')->nullable();
            $table->Integer('character_injury1_day')->nullable();

            $table->string('character_injury2_name')->nullable();
            $table->string('character_injury2_descr')->nullable();
            $table->BigInteger('character_injury2_year')->nullable();
            $table->Integer('character_injury2_month')->nullable();
            $table->Integer('character_injury2_day')->nullable();

            $table->string('character_injury3_name')->nullable();
            $table->string('character_injury3_descr')->nullable();
            $table->BigInteger('character_injury3_year')->nullable();
            $table->Integer('character_injury3_month')->nullable();
            $table->Integer('character_injury3_day')->nullable();

            $table->string('character_injury3_name')->nullable();
            $table->string('character_injury3_descr')->nullable();
            $table->BigInteger('character_injury3_year')->nullable();
            $table->Integer('character_injury3_month')->nullable();
            $table->Integer('character_injury3_day')->nullable();

            $table->string('character_injury4_name')->nullable();
            $table->string('character_injury4_descr')->nullable();
            $table->BigInteger('character_injury4_year')->nullable();
            $table->Integer('character_injury4_month')->nullable();
            $table->Integer('character_injury4_day')->nullable();

            $table->string('character_injury5_name')->nullable();
            $table->string('character_injury5_descr')->nullable();
            $table->BigInteger('character_injury5_year')->nullable();
            $table->Integer('character_injury5_month')->nullable();
            $table->Integer('character_injury5_day')->nullable();

            $table->string('character_injury6_name')->nullable();
            $table->string('character_injury6_descr')->nullable();
            $table->BigInteger('character_injury6_year')->nullable();
            $table->Integer('character_injury6_month')->nullable();
            $table->Integer('character_injury6_day')->nullable();

            $table->string('character_injury7_name')->nullable();
            $table->string('character_injury7_descr')->nullable();
            $table->BigInteger('character_injury7_year')->nullable();
            $table->Integer('character_injury7_month')->nullable();
            $table->Integer('character_injury7_day')->nullable();

            $table->string('character_injury8_name')->nullable();
            $table->string('character_injury8_descr')->nullable();
            $table->BigInteger('character_injury8_year')->nullable();
            $table->Integer('character_injury8_month')->nullable();
            $table->Integer('character_injury8_day')->nullable();

            $table->string('character_scar1_name')->nullable();
            $table->string('character_scar1_descr')->nullable();
            $table->BigInteger('character_scar1_year')->nullable();
            $table->Integer('character_scar1_month')->nullable();
            $table->Integer('character_scar1_day')->nullable();

            $table->string('character_scar2_name')->nullable();
            $table->string('character_scar2_descr')->nullable();
            $table->BigInteger('character_scar2_year')->nullable();
            $table->Integer('character_scar2_month')->nullable();
            $table->Integer('character_scar2_day')->nullable();

            $table->string('character_scar3_name')->nullable();
            $table->string('character_scar3_descr')->nullable();
            $table->BigInteger('character_scar3_year')->nullable();
            $table->Integer('character_scar3_month')->nullable();
            $table->Integer('character_scar3_day')->nullable();

            $table->string('character_scar4_name')->nullable();
            $table->string('character_scar4_descr')->nullable();
            $table->BigInteger('character_scar4_year')->nullable();
            $table->Integer('character_scar4_month')->nullable();
            $table->Integer('character_scar4_day')->nullable();

            $table->string('character_scar5_name')->nullable();
            $table->string('character_scar5_descr')->nullable();
            $table->BigInteger('character_scar5_year')->nullable();
            $table->Integer('character_scar5_month')->nullable();
            $table->Integer('character_scar5_day')->nullable();

            $table->string('character_scar6_name')->nullable();
            $table->string('character_scar6_descr')->nullable();
            $table->BigInteger('character_scar6_year')->nullable();
            $table->Integer('character_scar6_month')->nullable();
            $table->Integer('character_scar6_day')->nullable();

            $table->string('character_scar7_name')->nullable();
            $table->string('character_scar7_descr')->nullable();
            $table->BigInteger('character_scar7_year')->nullable();
            $table->Integer('character_scar7_month')->nullable();
            $table->Integer('character_scar7_day')->nullable();

            $table->string('character_scar8_name')->nullable();
            $table->string('character_scar8_descr')->nullable();
            $table->BigInteger('character_scar8_year')->nullable();
            $table->Integer('character_scar8_month')->nullable();
            $table->Integer('character_scar8_day')->nullable();

            $table->string('character_deco1_name')->nullable();
            $table->string('character_deco1_descr')->nullable();
            $table->BigInteger('character_deco1_year')->nullable();
            $table->Integer('character_deco1_month')->nullable();
            $table->Integer('character_deco1_day')->nullable();

            $table->string('character_deco2_name')->nullable();
            $table->string('character_deco2_descr')->nullable();
            $table->BigInteger('character_deco2_year')->nullable();
            $table->Integer('character_deco2_month')->nullable();
            $table->Integer('character_deco2_day')->nullable();

            $table->string('character_deco2_name')->nullable();
            $table->string('character_deco2_descr')->nullable();
            $table->BigInteger('character_deco2_year')->nullable();
            $table->Integer('character_deco2_month')->nullable();
            $table->Integer('character_deco2_day')->nullable();

            $table->string('character_deco3_name')->nullable();
            $table->string('character_deco3_descr')->nullable();
            $table->BigInteger('character_deco3_year')->nullable();
            $table->Integer('character_deco3_month')->nullable();
            $table->Integer('character_deco3_day')->nullable();

            $table->string('character_deco4_name')->nullable();
            $table->string('character_deco4_descr')->nullable();
            $table->BigInteger('character_deco4_year')->nullable();
            $table->Integer('character_deco4_month')->nullable();
            $table->Integer('character_deco4_day')->nullable();

            $table->string('character_deco5_name')->nullable();
            $table->string('character_deco5_descr')->nullable();
            $table->BigInteger('character_deco5_year')->nullable();
            $table->Integer('character_deco5_month')->nullable();
            $table->Integer('character_deco5_day')->nullable();

            $table->string('character_deco6_name')->nullable();
            $table->string('character_deco6_descr')->nullable();
            $table->BigInteger('character_deco6_year')->nullable();
            $table->Integer('character_deco6_month')->nullable();
            $table->Integer('character_deco6_day')->nullable();

            $table->string('character_deco7_name')->nullable();
            $table->string('character_deco7_descr')->nullable();
            $table->BigInteger('character_deco7_year')->nullable();
            $table->Integer('character_deco7_month')->nullable();
            $table->Integer('character_deco7_day')->nullable();

            $table->string('character_deco8_name')->nullable();
            $table->string('character_deco8_descr')->nullable();
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
