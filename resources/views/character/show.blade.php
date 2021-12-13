@extends('layouts.app')
@section('title')
Show personnage
@endsection

@section('content')

    <div class="row justify-content-center p-4">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><p><strong>{{ $character->character_name }}</strong>
                    (<a href="{{ route('character.user.edit', $character->id) }}">
                     modifier / supprimer
                    </a>)</p>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-11">
                            


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


                            <style>
                                            .table td, .table th {
                                            font-size: 12px;
                                                            }
                            </style>
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
                                                <th scope="col" style="width: 5%; text-align: center;">Mental</th>                                                
                                                <th scope="col" style="width: 5%; text-align: center;">Réaction</th>                                                
                                            </tr>
                                        </thead>
                                            <tbody>                                             
                                            
                                        
                                            
                                            <tr>
                                                <th scope="row" style="width: 55%" height="35px">{{ $character->character_career_name }}</th>
                                                    <td style="width: 5%"; text-align: center; height="35px";> {{ $character->career_Phy_T }}</td>                                                  
                                                    <td style="width: 5%" height="35px">{{ $character->career_Ment_T }}</td>                                                    
                                                    <td style="width: 5%" height="35px">{{ $character->career_React_T  }}</td>                                                                                       
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded pt-3">
                                <div class="col-md-3">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Points de vie</th>                                                                                     
                                                
                                                
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>                                                
                                                    <td height="35px">
                                                                                    
                                                        {{ $character->life_G }} /                                                        
                                                        
                                                        <!-- calcul lifemax -->
                                                            @include('calculations.lifemax') 
                                                        <!-- end: calcul lifemax -->
                                                        
                                                                                    
                                                    </td>       
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            

                            
                                <div class="col-md-3">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Points de magie</th>  
                                                
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>                                              

                                                    <td  height="35px">
                                                    {{ $character->character_magic_point_game }}/                                                     
                                                    
                                                    <!-- calcul lifemax -->
                                                    @include('calculations.magicpointmax') 
                                                    <!-- end: calcul lifemax -->                                                  
                                                                                                   
                                                    </td>                                                                                                     
                                                    
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>                          

                            
                                <div class="col-md-3">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"> Force magique</th>
                                                                                                        <!-- calcul fmarcana -->
                                                <th scope="col" style=" text-align: center;">@include('calculations.fmnaturelle')</th>                                                
                                                                                                        <!-- end: calcul fmarcana -->
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"  height="35px">Sortilège</th>
                                                    <td style="text-align: center;" height="35px">
                                                    <!-- calcul fmarcana -->
                                                    @include('calculations.fmarcana') 
                                                    <!-- end: calcul fmarcana --> 
                                                    </td>                                                   
                                                    
                                            </tr>

                                            <tr>
                                                <th scope="row" height="35px">Sacrée</th>
                                                    <td style="text-align: center;" height="35px">
                                                    <!-- calcul fmholy -->
                                                    @include('calculations.fmholy') 
                                                    <!-- end: calcul fmholy --> 
                                                    </td>
                                                   
                                            </tr>

                                            <tr>
                                                <th scope="row"  height="35px">Maudite</th>
                                                    <td style="text-align: center;" height="35px">
                                                    <!-- calcul fmcursed -->
                                                    @include('calculations.fmcursed') 
                                                    <!-- end: calcul fmcursed --> 
                                                    </td>
                                                                                                   
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
                                    <div class="row">
                                        <div class="col-md-2 p-0">
                                            <table class="table table-bordered" >
                                                <thead class="thead-light">
                                                    <tr>

                                                        <th scope="col"  style="text-align: center;">Manuelle</th>
                                                        <th scope="col"  style="text-align: center;">P</th>                                               

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" height="35px">Alcool</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->alcool }}</td>
                                                            
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Artisanat</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->artsNcrafts }}</td>                                                
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" height="35px">Charpenterie</th>
                                                            <td  style="text-align: center;" height="35px">{{ $character->carpentry }}</td>                                                
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Chasse et pêche *</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->huntingNfishing }}</td>                                                
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" height="35px">Conduite</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->drive }}</td>                                                
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" height="35px">Corde</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->strings }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Course *</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->run }}</td>
                                                            
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" height="35px">Équilibre *</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->balanced }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Équitation</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->horseriding }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Escalade *</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->climbing }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Lutte *</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->fight }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Métallurgie</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->metallurgy }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Natation *</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->swimming }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Navigation</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->navigation }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Torture</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->torture }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"  height="35px">Dragonnerie **</th>
                                                            <td style="text-align: center;" height="35px">{{ $character->dragonry }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                    
                                    
                                        <div class="col-md-2 p-0">
                                        
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>

                                                        <th scope="col"  style="width: 8%; text-align: center;">Habileté</th>
                                                        <th scope="col"  style="width: 2%; text-align: center;">P</th>                                               

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <tr>
                                                    <th scope="row" height="35px">Acrobatie *</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->acrobatics }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Camouflage nature *</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->naturecamo }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Camouflage urbain *</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->urbancamo }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Crochetage</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->lockpicking }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Déguisement</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->disguise }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Démolition</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->demolition }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Discrétion nature *</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->discretnature }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Discrétion urbaine *</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->discreturban }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Dissimulation</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->concealment }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Médecine</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->medecine }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Piège</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->trap }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Précision</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->precision }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Technologie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->technology }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Thanatologie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->thanatology }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Vol à la tire *</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->pickpocketing }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Tatouage tribal **</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->tribaltattoo }}</td>
                                                        
                                                </tr>
                                                </tbody>
                                            </table>                                    
                                        </div>
                                        
                                        <div class="col-md-2 p-0">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>

                                                        <th scope="col"  style="width: 8%; text-align: center;">Sens</th>
                                                        <th scope="col"  style="width: 2%; text-align: center;">P</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row"  height="35px">Analyse</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->analysis }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Concentration *</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->concentration }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Cuisine</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->cook }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Détection</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->detection }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Dressage</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->dressage }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Écoute</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->listen }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Évaluation</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->evaluation }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Lecture labiale</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->lipreading }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Météorologie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->meteorology }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Observation</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->observation }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Odorat</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->smell }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Orientation</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->orientation }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Perception</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->perception }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Pistage</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->tracking }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Recherche</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->research }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">P.E.S **</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->pes }}</td>
                                                </tr>
                                                </tbody>
                                            </table>                                    
                                        </div>
                                        
                                        <div class="col-md-2 p-0">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>

                                                        <th scope="col-6"  style="width: 8%; text-align: center;">Sociale</th>
                                                        <th scope="col"  style="width: 2%; text-align: center;">P</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row" height="35px">Baratin</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->spiel }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Corruption</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->corruption }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Éloquence</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->eloquence }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Empathie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->empathy }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Faux papiers</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->counterfeiting }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Hypnotisme</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->hypnotism }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"  height="35px">Intimidation</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->intimidation }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Jargon secret</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->secretjargon }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Jeu</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->game }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Leadership</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->leadership }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Marchandage</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->bargaining }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Performance</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->performance }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Rumeur</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->rumors }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Séduction</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->seduction }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Ventriloquie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->ventriloquism }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" sheight="35px">Ignisalta **</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->ignisalta }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-2 p-0">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>

                                                        <th scope="col"  style="width: 12%; text-align: center;">Connaissance</th>
                                                        <th scope="col"  style="width: 2%; text-align: center;">P</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row" height="35px">Ancien culte</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->ancientcult }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Astronomie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->astronomy }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Bibliothèques</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->library }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Créatures</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->creature }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Géographie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->geography }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Histoire</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->history }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Identification</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->identification }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Maison</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->houses }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Nature</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->nature }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Occultisme</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->occultism }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Politique</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->politics }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Rituel du trépas</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->ritualofdeath }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Sortilèges</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->spell }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Tactiques</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->tactical }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Théologie</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->theology }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" height="35px">Rituel des étoiles **</th>
                                                        <td style="text-align: center;" height="35px">{{ $character->ritualofstars }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
