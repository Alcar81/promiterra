@extends('layouts.app')
@section('title')
Show personnage
@endsection

@section('content')

    <div class="row justify-content-center p-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p><strong>{{ $character->character_name }}</strong>
                    (<a href="{{ route('character.user.edit', $character->id) }}">
                     modifier / supprimer
                    </a>)</p>
                </div>

                <div class="card-body">

                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="m-b-40">


                            <div class="row p-4">
                                <div class="p-4" style="width: 50%" display="inline-block">
                                    <span class="lead">
                                        <p><strong>Date de naissance : </strong>{{ $character->character_date_of_birth }} / {{ $character->character_month_of_birth }} / {{ $character->character_year_of_birth }}</p>
                                        <p><strong>Âge : </strong>{{ $character->character_age }}</p>
                                        <p><strong>Titre : </strong>{{ $character->character_title }}</p>
                                        <p><strong>Expérience : </strong>{{ $character->character_experience }}</p>
                                        <p><strong>Essence restant : </strong>{{ $character->character_essence_game }}</p>
                                        <p><strong>Essence totale : </strong>{{ $character->character_essence_total }}</p>
                                    </span>
                                </div>

                                <div class="border p-4" style="width: 50%" height="500px">
                                    <span>Place pour futur image du personnage</span>
                                </div>
                            </div>



                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 25%">Maison</th>
                                                <th scope="col" style="width: 5%; text-align: center;">Rang</th>
                                                <th scope="col" style="width: 70%; text-align: center;">Dogma</th>

                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 25%" height="35px">{{ $character->character_house_name }}</th>
                                                    <td style="width: 5%" height="35px">{{ $character->character_house_rank }}</td>
                                                    <td style="width: 70%" height="35px">{{ $character->character_house_dogma }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 30%">Guilde</th>
                                                <th scope="col" style="width: 70%; text-align: center;">Dogma</th>

                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 30%" height="35px">{{ $character->character_guild_name }}</th>
                                                    <td style="width: 70%" height="35px">{{ $character->character_guild_dogma }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 55%">Carrière</th>
                                                <th scope="col" style="width: 5%; text-align: center;">Physique</th>
                                                <th scope="col" style="width: 5%; text-align: center;">PB</th>
                                                <th scope="col" style="width: 5%; text-align: center;">PM</th>
                                                <th scope="col" style="width: 5%; text-align: center;">Mental</th>
                                                <th scope="col" style="width: 5%; text-align: center;">MB</th>
                                                <th scope="col" style="width: 5%; text-align: center;">MM</th>
                                                <th scope="col" style="width: 5%; text-align: center;">Réaction</th>
                                                <th scope="col" style="width: 5%; text-align: center;">RB</th>
                                                <th scope="col" style="width: 5%; text-align: center;">RM</th>
                                            </tr>
                                        </thead>
                                            <tbody>                                             
                                                
                                               
                                            <tr>
                                                <th scope="row" style="width: 55%" height="35px">{{ $character->character_career_name }}</th>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_physic }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_physic_bonus }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_physic_penalty }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_mental }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_mental_bonus }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_mental_penalty }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_reaction }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_reaction_bonus }}</td>
                                                    <td style="width: 5%" height="35px">{{ $character->character_career_reaction_penalty }}</td>
                                            
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 20%">Points de vie</th>
                                                <th scope="col" style="width: 20%; text-align: center;">Max</th>
                                                <th scope="col" style="width: 20%; text-align: center;">En jeu</th>
                                                <th scope="col" style="width: 20%; text-align: center;">Bonus</th>
                                                <th scope="col" style="width: 20%; text-align: center;">% bonus</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px"></th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_life_point_max }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_life_point_game }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_life_point_bonus }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_life_point_percentage_bonus }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 20%">Points de magie</th>
                                                <th scope="col" style="width: 20%; text-align: center;">Max</th>
                                                <th scope="col" style="width: 20%; text-align: center;">En jeu</th>
                                                <th scope="col" style="width: 20%; text-align: center;">Bonus</th>
                                                <th scope="col" style="width: 20%; text-align: center;">% bonus</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px"></th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_point_max }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_point_game }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_point_bonus }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_point_percentage_bonus }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 20%">Force magique</th>
                                                <th scope="col" style="width: 20%; text-align: center;">Max</th>
                                                <th scope="col" style="width: 20%; text-align: center;">En jeu</th>
                                                <th scope="col" style="width: 20%; text-align: center;">Bonus</th>
                                                <th scope="col" style="width: 20%; text-align: center;">% bonus</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">Sortilège</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_arcana_max }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_arcana_game }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_arcana_bonus }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_arcana_percentage_bonus }}</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">Sacrée</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_holy_max }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_holy_game }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_holy_bonu }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_holy_percentage_bonus }}</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">Maudite</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_cursed_max }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_cursed_game }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_cursed_bonus }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_magic_force_cursed_percentage_bonus }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col" colspan= "2" style="width: 20%; text-align: center;">Richesse</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">Gold</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_gold }}</td>

                                            </tr>

                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">Banque</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_bank }}</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Initiative</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Vitesse de tour</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_init }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_lap_speed }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>



                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead  class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 25%">Mouvement</th>
                                                <th scope="col" style="width: 12.5%">Bonus territoire humain</th>
                                                <th scope="col" style="width: 12.5%">Bonus territoire intérieur</th>
                                                <th scope="col" style="width: 12.5%">Bonus territoire sauvage</th>
                                                <th scope="col" style="width: 12.5%">Bonus territoire naval</th>
                                                <th scope="col" style="width: 12.5%">Bonus avec monture</th>
                                            </tr>


                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" height="35px">{{ $character->character_movement }}</th>
                                                    <td  height="35px">{{ $character->character_movement_bonus_humanTerritory }}</td>
                                                    <td  height="35px">{{ $character->character_movement_bonus_inside }}</td>
                                                    <td  height="35px">{{ $character->character_movement_bonus_savageTerritory }}</td>
                                                    <td  height="35px">{{ $character->character_movement_bonus_naval }}</td>
                                                    <td  height="35px">{{ $character->character_movement_bonus_mount }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Champ d’action</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Bonus magique</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Bonus champ</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_fields }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_fields_bonus_spell }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_fields_bonus_singing }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <p>Équipements</p>
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Armes</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Type</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Portée</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Attaque</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Maladresse</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Dégâts</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Dés</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Critique</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Face</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Flanc</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Dos</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">$</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_weapon1_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_type }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_scope }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_attack }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_fumble }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_damage }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_dices }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_critic }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_face }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_flank }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_back }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon1_value }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_weapon2_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_type }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_scope }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_attack }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_fumble }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_damage }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_dices }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_critic }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_face }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_flank }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_back }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon2_value }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_weapon3_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_type }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_scope }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_attack }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_fumble }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_damage }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_dices }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_critic }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_face }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_flank }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_back }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon3_value }}</td>

                                            </tr>

                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_weapon4_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_type }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_scope }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_attack }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_fumble }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_damage }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_dices }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_critic }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_face }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_flank }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_back }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon4_value }}</td>

                                            </tr>

                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_weapon5_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_type }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_scope }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_attack }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_fumble }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_damage }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_dices }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_critic }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_face }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_flank }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_back }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_weapon5_value }}</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Armures</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Perçant</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Tranchant</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Contondant</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Feu</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Sortilège</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Encombrement</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Magie</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">$</th>
                                            </tr>
                                        </thead>

                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_armor1_name }}</th>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_piercing }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_edge }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_blunt }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_fire }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_spell }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_clutter }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_magic }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor1_value }}</td>

                                            </tr>

                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_armor2_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor2_piercing }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor2_edge }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor2_blunt }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor2_fire }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor2_spell }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor2_clutter }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor2_magic }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor2_value }}</td>

                                            </tr>

                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_armor3_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor3_piercing }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor3_edge }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor3_blunt }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor3_fire }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor3_spell }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor3_clutter }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_armor3_magic }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_armor3_value }}</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive" style="overflow-x:auto;">
                                    <p>Boucliers</p>
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"  style="width: 10%; text-align: center;">Type</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Physique requis</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Champ d’action</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Face</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Flanc</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Dos</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">$</th>
                                            </tr>
                                        </thead>

                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_shield_type }}</th>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_physic }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_field }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_face }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_flank }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_back }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_value }}</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive" style="overflow-x:auto;">
                                    <p>Livre magique</p>
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"  style="width: 10%; text-align: center;">Type</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Physique requis</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Champ d’action</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Face</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Flanc</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">Dos</th>
                                                <th scope="col"  style="width: 10%; text-align: center;">$</th>
                                            </tr>
                                        </thead>

                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_shield_type }}</th>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_physic }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_field }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_face }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_flank }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_back }}</td>
                                                    <td style="width: 10%" height="35px">{{ $character->character_shield_value }}</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>


                            </div>

                            <div class="container border rounded pt-4">
                                <p>Compétences</p>
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Manuelle</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Pts</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Bonus</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Alcool</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_alcool }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_alcool_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Artisanat</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_artsNcrafts }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_artsNcrafts_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Charpenterie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_carpentry }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_carpentry_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Chasse et pêche *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_huntingNfishing }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_huntingNfishing_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Conduite</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_drive }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_drive_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Corde</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_strings }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_strings_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Course *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_run }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_run_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Équilibre *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_balanced }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_balanced_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Équitation</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_horseriding }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_horseriding_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Escalade *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_climbing }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_climbing_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Lutte *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_fight }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_fight_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Métallurgie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_metallurgy }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_metallurgy_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Natation *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_swimming }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_swimming_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Navigation</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_navigation }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_navigation_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Torture</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_torture }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_torture_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Dragonnerie **</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_dragonry }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tma_dragonry_b }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Habileté</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Pts</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Bonus</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Acrobatie *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_acrobatics }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_acrobatics_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Camouflage nature *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_naturecamo }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_naturecamo_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Camouflage urbain *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_urbancamo }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_urbancamo_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Crochetage</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_lockpicking }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_lockpicking_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Déguisement</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_disguise }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_disguise_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Démolition</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_demolition }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_demolition_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Discrétion nature *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_discretnature }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_discretnature_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Discrétion urbaine *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_discreturban }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_discreturban_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Dissimulation</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_concealment }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_concealment_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Médecine</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_medecine }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_medecine_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Piège</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_trap }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_trap_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Précision</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_precision }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_precision_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Technologie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_technology }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_technology_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Thanatologie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_thanatology }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_thanatology_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Vol à la tire *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_pickpocketing }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_pickpocketing_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Tatouage tribal **</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_tribaltattoo }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tha_tribaltattoo_b }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Sens</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Pts</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Bonus</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Analyse</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_analysis }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_analysis_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Concentration *</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_concentration }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_concentration_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Cuisine</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_cook }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_cook_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Détection</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_detection }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_detection_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Dressage</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_dressage }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_dressage_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Écoute</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_listen }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_listen_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Évaluation</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_evaluation }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_evaluation_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Lecture labiale</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_lipreading }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_lipreading_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Météorologie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_meteorology }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_meteorology_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Observation</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_observation }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_observation_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Odorat</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_smell }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_smell_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Orientation</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_orientation }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_orientation_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Perception</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_perception }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_perception_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Pistage</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_tracking }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_tracking_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Recherche</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_research }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_research_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">P.E.S **</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_pes }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tse_pes_b }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Sociale</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Pts</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Bonus</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Baratin</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_spiel }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_spiel_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Corruption</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_corruption }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_corruption_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Éloquence</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_eloquence }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_eloquence_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Empathie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_empathy }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_empathy_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Faux papiers</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_counterfeiting }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_counterfeiting_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Hypnotisme</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_hypnotism }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_hypnotism_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Intimidation</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_intimidation }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_intimidation_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Jargon secret</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_secretjargon }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_secretjargon_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Jeu</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_game }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_game_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Leadership</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_leadership }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_leadership_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Marchandage</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_bargaining }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_bargaining_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Performance</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_performance }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_performance_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Rumeur</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_rumors }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_rumors_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Séduction</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_seduction }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_seduction_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Ventriloquie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_ventriloquism }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_ventriloquism_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Ignisalta **</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_ignisalta }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tso_ignisalta_b }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Connaissance</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Pts</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Bonus</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Ancien culte</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_ancientcult }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_ancientcult_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Astronomie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_astronomy }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_astronomy_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Bibliothèques</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_library }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_library_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Créatures</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_creature }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_creature_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Géographie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_geography }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_geography_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Histoire</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_history }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_history_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Identification</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_identification }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_identification_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Maison</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_houses }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_houses_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Nature</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_nature }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_nature_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Occultisme</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_occultism }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_occultism_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Politique</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_politics }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_politics_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Rituel du trépas</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_ritualofdeath }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_ritualofdeath_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Sortilèges</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_spell }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_spell_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Tactiques</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_tactical }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_tactical_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Théologie</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_theology }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_theology_b }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Rituel des étoiles **</th>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_ritualofstars }}</td>
                                                <td style="width: 20%" height="35px">{{ $character->character_tco_ritualofstars_b }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Blessures</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Description</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Date</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury1_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury1_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury1_year }} / {{ $character->character_injury1_month }} / {{ $character->character_injury1_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury2_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury2_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury2_year }} / {{ $character->character_injury2_month }} / {{ $character->character_injury2_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury3_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury3_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury3_year }} / {{ $character->character_injury3_month }} / {{ $character->character_injury3_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury4_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury4_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury4_year }} / {{ $character->character_injury4_month }} / {{ $character->character_injury4_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury5_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury5_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury5_year }} / {{ $character->character_injury5_month }} / {{ $character->character_injury5_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury6_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury6_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury6_year }} / {{ $character->character_injury6_month }} / {{ $character->character_injury6_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury7_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury7_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury7_year }} / {{ $character->character_injury7_month }} / {{ $character->character_injury7_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_injury8_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury8_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_injury8_year }} / {{ $character->character_injury8_month }} / {{ $character->character_injury8_day }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Cicatrices</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Description</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Date</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar1_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar1_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar1__year }} / {{ $character->character_scar1__month }} / {{ $character->character_scar1__day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar2_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar2_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar2_year }} / {{ $character->character_scar2_month }} / {{ $character->character_scar2_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar3_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar3_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar3_year }} / {{ $character->character_scar3_month }} / {{ $character->character_scar3_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar4_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar4_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar4_year }} / {{ $character->character_scar4_month }} / {{ $character->character_scar4_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar5_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar5_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar5_year }} / {{ $character->character_scar5_month }} / {{ $character->character_scar5_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar6_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar6_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar6_year }} / {{ $character->character_scar6_month }} / {{ $character->character_scar6_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar7_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar7_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar7_year }} / {{ $character->character_scar7_month }} / {{ $character->character_scar7_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_scar8_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar8_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_scar8_year }} / {{ $character->character_scar8_month }} / {{ $character->character_scar8_day }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-4">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>

                                                <th scope="col"  style="width: 20%; text-align: center;">Décorations</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Description</th>
                                                <th scope="col"  style="width: 20%; text-align: center;">Date</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco1_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco1_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco1__year }} / {{ $character->character_deco1__month }} / {{ $character->character_deco1__day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco2_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco2_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco2_year }} / {{ $character->character_deco2_month }} / {{ $character->character_deco2_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco3_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco3_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco3_year }} / {{ $character->character_deco3_month }} / {{ $character->character_deco3_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco4_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco4_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco4_year }} / {{ $character->character_deco4_month }} / {{ $character->character_deco4_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco5_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco5_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco5_year }} / {{ $character->character_deco5_month }} / {{ $character->character_deco5_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco6_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco6_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco6_year }} / {{ $character->character_deco6_month }} / {{ $character->character_deco6_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco7_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco7_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco7_year }} / {{ $character->character_deco7_month }} / {{ $character->character_deco7_day }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%" height="35px">{{ $character->character_deco8_name }}</th>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco8_descr }}</td>
                                                    <td style="width: 20%" height="35px">{{ $character->character_deco8_year }} / {{ $character->character_deco8_month }} / {{ $character->character_deco8_day }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <span class="lead">
                                    <p><strong>Histoire du personnage</strong></p>
                                    <p>
                                        {!! $character->character_background !!}
                                    </p>
                                </span>
                            </div>

                            <div class="row p-4">

                                <span class="lead">
                                    <p>Version :</p>
                                    <p>chapitre :</p>
                                </span>
                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>

@endsection
