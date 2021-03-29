<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'user_id',
        'character_name',
        'character_age',
        'character_title',
        'character_date_of_birth',
        'character_month_of_birth',
        'character_year_of_birth',
        'character_experience',
        'character_essence_game',
        'character_essence_total',
        'character_house_name',
        'character_house_rank',
        'character_house_dogma',
        'character_guild_name',
        'character_guild_dogma',
        'character_career_name',
        'character_career_physic',
        'character_career_physic_bonus',
        'character_career_physic_penalty',
        'character_career_mental',
        'character_career_mental_bonus',
        'character_career_mental_penalty',
        'character_career_reaction',
        'character_career_reaction_bonus',
        'character_career_reaction_penalty',
        'character_life_point_max',
        'character_life_point_game',
        'character_life_point_bonus',
        'character_life_point_percentage_bonus',
        'character_magic_point_max',
        'character_magic_point_game',
        'character_magic_point_bonus',
        'character_magic_point_percentage_bonus',
        'character_magic_force_arcana_max',
        'character_magic_force_arcana_game',
        'character_magic_force_arcana_bonus',
        'character_magic_force_arcana_percentage_bonus',
        'character_magic_force_holy_max',
        'character_magic_force_holy_game',
        'character_magic_force_holy_bonu',
        'character_magic_force_holy_percentage_bonus',
        'character_magic_force_cursed_max',
        'character_magic_force_cursed_game',
        'character_magic_force_cursed_bonus',
        'character_magic_force_cursed_percentage_bonus',
        'character_gold',
        'character_bank',
        'character_lap_speed',
        'character_movement',
        'character_movement_bonus_humanTerritory',
        'character_movement_bonus_inside',
        'character_movement_bonus_savageTerritory',
        'character_movement_bonus_naval',
        'character_movement_bonus_mount',
        'character_fields',
        'character_fields_bonus_spell',
        'character_weapon1_name',
        'character_weapon1_type',
        'character_weapon1_scope',
        'character_weapon1_attack',
        'character_weapon1_attack_b',
        'character_weapon1_fumble',
        'character_weapon1_damage',
        'character_weapon1_dices',
        'character_weapon1_critic',
        'character_weapon1_face',
        'character_weapon1_flank',
        'character_weapon1_back',
        'character_weapon1_value',
        'character_weapon2_name',
        'character_weapon2_type',
        'character_weapon2_scope',
        'character_weapon2_attack',
        'character_weapon2_attack_b',
        'character_weapon2_fumble',
        'character_weapon2_damage',
        'character_weapon2_dices',
        'character_weapon2_critic',
        'character_weapon2_face',
        'character_weapon2_flank',
        'character_weapon2_back',
        'character_weapon2_value',
        'character_weapon3_name',
        'character_weapon3_type',
        'character_weapon3_scope',
        'character_weapon3_attack',
        'character_weapon3_attack_b',
        'character_weapon3_fumble',
        'character_weapon3_damage',
        'character_weapon3_dices',
        'character_weapon3_critic',
        'character_weapon3_face',
        'character_weapon3_flank',
        'character_weapon3_back',
        'character_weapon3_value',
        'character_weapon4_name',
        'character_weapon4_type',
        'character_weapon4_scope',
        'character_weapon4_attack',
        'character_weapon4_attack_b',
        'character_weapon4_fumble',
        'character_weapon4_damage',
        'character_weapon4_dices',
        'character_weapon4_critic',
        'character_weapon4_face',
        'character_weapon4_flank',
        'character_weapon4_back',
        'character_weapon4_value',
        'character_weapon5_name',
        'character_weapon5_type',
        'character_weapon5_scope',
        'character_weapon5_attack',
        'character_weapon5_attack_b',
        'character_weapon5_fumble',
        'character_weapon5_damage',
        'character_weapon5_dices',
        'character_weapon5_critic',
        'character_weapon5_face',
        'character_weapon5_flank',
        'character_weapon5_back',
        'character_weapon5_value',
        'character_armor1_name',
        'character_armor1_piercing',
        'character_armor1_edge',
        'character_armor1_blunt',
        'character_armor1_fire',
        'character_armor1_spell',
        'character_armor1_clutter',
        'character_armor1_magic',
        'character_armor1_value',
        'character_armor2_name',
        'character_armor2_piercing',
        'character_armor2_edge',
        'character_armor2_blunt',
        'character_armor2_fire',
        'character_armor2_spell',
        'character_armor2_clutter',
        'character_armor2_magic',
        'character_armor2_value',
        'character_armor3_name',
        'character_armor3_piercing',
        'character_armor3_edge',
        'character_armor3_blunt',
        'character_armor3_fire',
        'character_armor3_spell',
        'character_armor3_clutter',
        'character_armor3_magic',
        'character_armor3_value',
        'character_shield_type',
        'character_shield_physic',
        'character_shield_field',
        'character_shield_face',
        'character_shield_flank',
        'character_shield_back',
        'character_shield_value',
        'character_equipped_spellbook',
        'character_equipped_spellbook_value',
        'character_equipped_symbol',
        'character_equipped_symbol_value',
        'character_tma_alcool',
        'character_tma_alcool_b',
        'character_tma_arts&crafts',
        'character_tma_arts&crafts_b',
        'character_tma_carpentry',
        'character_tma_carpentry_b',
        'character_tma_hunting&fishing',
        'character_tma_hunting&fishing_b',
        'character_tma_drive',
        'character_tma_drive_b',
        'character_tma_strings',
        'character_tma_strings_b',
        'character_tma_run',
        'character_tma_run_b',
        'character_tma_balanced',
        'character_tma_balanced_b',
        'character_tma_horseriding',
        'character_tma_horseriding_b',
        'character_tma_climbing',
        'character_tma_climbing_b',
        'character_tma_fight',
        'character_tma_fight_b',
        'character_tma_metallurgy',
        'character_tma_metallurgy_b',
        'character_tma_swimming',
        'character_tma_swimming_b',
        'character_tma_navigation',
        'character_tma_navigation_b',
        'character_tma_torture',
        'character_tma_torture_b',
        'character_tma_dragonry',
        'character_tma_dragonry_b',
        'character_tha_acrobatics',
        'character_tha_acrobatics_b',
        'character_tha_naturecamo',
        'character_tha_naturecamo_b',
        'character_tha_urbancamo',
        'character_tha_urbancamo_b',
        'character_tha_lockpicking',
        'character_tha_lockpicking_b',
        'character_tha_disguise',
        'character_tha_disguise_b',
        'character_tha_demolition',
        'character_tha_demolition_b',
        'character_tha_discretnature',
        'character_tha_discretnature_b',
        'character_tha_discreturban',
        'character_tha_discreturban_b',
        'character_tha_concealment',
        'character_tha_concealment_b',
        'character_tha_medecine',
        'character_tha_medecine_b',
        'character_tha_trap',
        'character_tha_trap_b',
        'character_tha_precision',
        'character_tha_precision_b',
        'character_tha_technology',
        'character_tha_technology_b',
        'character_tha_thanatology',
        'character_tha_thanatology_b',
        'character_tha_pickpocketing',
        'character_tha_pickpocketing_b',
        'character_tha_tribaltattoo',
        'character_tha_tribaltattoo_b',
        'character_tse_analysis',
        'character_tse_analysis_b',
        'character_tse_concentration',
        'character_tse_concentration_b',
        'character_tse_cook',
        'character_tse_cook_b',
        'character_tse_detection',
        'character_tse_detection_b',
        'character_tse_dressage',
        'character_tse_dressage_b',
        'character_tse_listen',
        'character_tse_listen_b',
        'character_tse_evaluation',
        'character_tse_evaluation_b',
        'character_tse_lipreading',
        'character_tse_lipreading_b',
        'character_tse_meteorology',
        'character_tse_meteorology_b',
        'character_tse_observation',
        'character_tse_observation_b',
        'character_tse_smell',
        'character_tse_smell_b',
        'character_tse_orientation',
        'character_tse_orientation_b',
        'character_tse_perception',
        'character_tse_perception_b',
        'character_tse_tracking',
        'character_tse_tracking_b',
        'character_tse_research',
        'character_tse_research_b',
        'character_tse_pes',
        'character_tse_pes_b',
        'character_tso_spiel',
        'character_tso_spiel_b',
        'character_tso_corruption',
        'character_tso_corruption_b',
        'character_tso_eloquence',
        'character_tso_eloquence_b',
        'character_tso_empathy',
        'character_tso_empathy_b',
        'character_tso_counterfeiting',
        'character_tso_counterfeiting_b',
        'character_tso_hypnotism',
        'character_tso_hypnotism_b',
        'character_tso_intimidation',
        'character_tso_intimidation_b',
        'character_tso_secretjargon',
        'character_tso_secretjargon_b',
        'character_tso_game',
        'character_tso_game_b',
        'character_tso_leadership',
        'character_tso_leadership_b',
        'character_tso_bargaining',
        'character_tso_bargaining_b',
        'character_tso_performance',
        'character_tso_performance_b',
        'character_tso_rumors',
        'character_tso_rumors_b',
        'character_tso_seduction',
        'character_tso_seduction_b',
        'character_tso_ventriloquism',
        'character_tso_ventriloquism_b',
        'character_tso_ignisalta',
        'character_tso_ignisalta_b',
        'character_tco_ancientcult',
        'character_tco_ancientcult_b',
        'character_tco_astronomy',
        'character_tco_astronomy_b',
        'character_tco_library',
        'character_tco_library_b',
        'character_tco_creature',
        'character_tco_creature_b',
        'character_tco_geography',
        'character_tco_geography_b',
        'character_tco_history',
        'character_tco_history_b',
        'character_tco_identification',
        'character_tco_identification_b',
        'character_tco_houses',
        'character_tco_houses_b',
        'character_tco_nature',
        'character_tco_nature_b',
        'character_tco_occultism',
        'character_tco_occultism_b',
        'character_tco_politics',
        'character_tco_politics_b',
        'character_tco_ritualofdeath',
        'character_tco_ritualofdeath_b',
        'character_tco_spell',
        'character_tco_spell_b',
        'character_tco_tactical',
        'character_tco_tactical_b',
        'character_tco_theology',
        'character_tco_theology_b',
        'character_tco_ritualofstars',
        'character_tco_ritualofstars_b',
        'character_influence_meraltor',
        'character_influence_aravas',
        'character_influence_clergy',
        'character_influence_berrouve',
        'character_influence_harlog',
        'character_influence_brotherhood',
        'character_influence_duloir',
        'character_influence_tiar',
        'character_influence_wolfcircle',
        'character_influence_arcadis',
        'character_influence_komeidai',
        'character_influence_savie',
        'character_influence_mortuterra',
        'character_influence_collectorsguild',
        'character_influence_total',
        'character_background',
        'character_injury1_name',
        'character_injury1_descr',
        'character_injury1_year',
        'character_injury1_month',
        'character_injury1_day',
        'character_injury2_name',
        'character_injury2_descr',
        'character_injury2_year',
        'character_injury2_month',
        'character_injury2_day',
        'character_injury3_name',
        'character_injury3_descr',
        'character_injury3_year',
        'character_injury3_month',
        'character_injury3_day',
        'character_injury4_name',
        'character_injury4_descr',
        'character_injury4_year',
        'character_injury4_month',
        'character_injury4_day',
        'character_injury5_name',
        'character_injury5_descr',
        'character_injury5_year',
        'character_injury5_month',
        'character_injury5_day',
        'character_injury6_name',
        'character_injury6_descr',
        'character_injury6_year',
        'character_injury6_month',
        'character_injury6_day',
        'character_injury7_name',
        'character_injury7_descr',
        'character_injury7_year',
        'character_injury7_month',
        'character_injury7_day',
        'character_injury8_name',
        'character_injury8_descr',
        'character_injury8_year',
        'character_injury8_month',
        'character_injury8_day',
        'character_scar1_name',
        'character_scar1_descr',
        'character_scar1_year',
        'character_scar1_month',
        'character_scar1_day',
        'character_scar2_name',
        'character_scar2_descr',
        'character_scar2_year',
        'character_scar2_month',
        'character_scar2_day',
        'character_scar3_name',
        'character_scar3_descr',
        'character_scar3_year',
        'character_scar3_month',
        'character_scar3_day',
        'character_scar4_name',
        'character_scar4_descr',
        'character_scar4_year',
        'character_scar4_month',
        'character_scar4_day',
        'character_scar5_name',
        'character_scar5_descr',
        'character_scar5_year',
        'character_scar5_month',
        'character_scar5_day',
        'character_scar6_name',
        'character_scar6_descr',
        'character_scar6_year',
        'character_scar6_month',
        'character_scar6_day',
        'character_scar7_name',
        'character_scar7_descr',
        'character_scar7_year',
        'character_scar7_month',
        'character_scar7_day',
        'character_scar8_name',
        'character_scar8_descr',
        'character_scar8_year',
        'character_scar8_month',
        'character_scar8_day',
        'character_deco1_name',
        'character_deco1_descr',
        'character_deco1_year',
        'character_deco1_month',
        'character_deco1_day',
        'character_deco2_name',
        'character_deco2_descr',
        'character_deco2_year',
        'character_deco2_month',
        'character_deco2_day',
        'character_deco3_name',
        'character_deco3_descr',
        'character_deco3_year',
        'character_deco3_month',
        'character_deco3_day',
        'character_deco4_name',
        'character_deco4_descr',
        'character_deco4_year',
        'character_deco4_month',
        'character_deco4_day',
        'character_deco5_name',
        'character_deco5_descr',
        'character_deco5_year',
        'character_deco5_month',
        'character_deco5_day',
        'character_deco6_name',
        'character_deco6_descr',
        'character_deco6_year',
        'character_deco6_month',
        'character_deco6_day',
        'character_deco7_name',
        'character_deco7_descr',
        'character_deco7_year',
        'character_deco7_month',
        'character_deco7_day',
        'character_deco8_name',
        'character_deco8_descr',
        'character_deco8_year',
        'character_deco8_month',
        'character_deco8_day',

    ];
}
