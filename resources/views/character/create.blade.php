@extends('layouts.app')
@section('title')
Création personnage
@endsection

@section('content')

    <div class="row justify-content-center p-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création d’un personnage</div>

                <div class="card-body">
                    <form class="form-floating" action="{{ route('character.character.store') }}" method="POST">

                        @csrf


                        <div class="container border rounded p-4">

                            <div class="row g-3">

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_name">{{ __('Nom') }}</label>
                                        <input type="text" class="form-control" id="character_name" placeholder="" value="" name="character_name">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_title">{{ __('Titre') }}</label>
                                        <input type="text" class="form-control" id="character_title" placeholder="" value="" name="character_title">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_age">{{ __('Âge') }}</label>
                                        <input type="text" class="form-control" id="character_age" placeholder="" value="" name="character_age">
                                    </div>
                                </div>

                            </div>

                            <div class="row g-3">

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_date_of_birth">{{ __('Date de naissance') }}</label>
                                        <select class="form-select" id="character_date_of_birth" aria-label="Floating label select example" name="character_date_of_birth">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_month_of_birth">{{ __('Mois') }}</label>
                                        <select class="form-select" id="character_month_of_birth" aria-label="Floating label select example" name="character_month_of_birth">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_year_of_birth">{{ __('Année') }}</label>
                                        <input type="text" class="form-control" id="character_year_of_birth" placeholder="" value="" name="character_year_of_birth">
                                    </div>
                                </div>

                            </div>

                            <div class="row g-3">

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_experience">{{ __('Expérience') }}</label>
                                        <input type="text" class="form-control" id="character_experience" placeholder="" value="" name="character_experience">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_essence_game">{{ __('Essence') }}</label>
                                        <input type="text" class="form-control" id="character_essence_game" placeholder="" value="" name="character_essence_game">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_essence_total">{{ __('Essence totale') }}</label>
                                        <input type="text" class="form-control" id="character_essence_total" placeholder="" value="" name="character_essence_total">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="container border rounded p-4">

                            <div class="row g-2">

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_house_name">{{ __('Maison') }} <a href="">(créer)</a></label>
                                        <input type="text" class="form-control" id="character_house_name" placeholder="" value="" name="character_house_name">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_house_rank">{{ __('Rang') }}</label>
                                        <input type="text" class="form-control" id="character_house_rank" placeholder="" value="" name="character_house_rank">
                                    </div>
                                </div>
                            </div>

                                    <div class="form-floating pt-2">
                                        <label for="character_house_dogma">{{ __('Dogma') }}</label>
                                        <input type="text" class="form-control" id="character_house_dogma" placeholder="" value="" name="character_house_dogma">
                                    </div>

                        </div>

                        <div class="container border rounded p-4">

                            <div class="form-floating">
                                <label for="character_guild_name">{{ __('Guilde') }} <a href="">(créer)</a></label>
                                <input type="text" class="form-control" id="character_guild_name" placeholder="" value="" name="character_guild_name">
                            </div>

                            <div class="form-floating pt-2">
                                <label for="character_guild_dogma">{{ __('Dogma') }}</label>
                                <input type="text" class="form-control" id="character_guild_dogma" placeholder="" value="" name="character_guild_dogma">
                            </div>
                        </div>

                        <div class="container border rounded p-4">

                            <div class="form-floating">
                                <label for="character_career_name">{{ __('Carrière') }}</label>
                                <input type="text" class="form-control" id="character_career_name" placeholder="" value="" name="character_career_name">
                            </div>

                            <div class="row g-3 p-2">

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_physic">{{ __('Physique') }}</label>
                                        <select class="form-select" id="character_career_physic" aria-label="Floating label select example" name="character_career_physic">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_physic_bonus">{{ __('Bonus physique') }}</label>
                                        <select class="form-select" id="character_career_physic_bonus" aria-label="Floating label select example" name="character_career_physic_bonus">
                                            <option selected>0</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_physic_penalty">{{ __('Malus physique') }}</label>
                                        <select class="form-select" id="character_career_physic_penalty" aria-label="Floating label select example" name="character_career_physic_penalty">
                                            <option selected>0</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 p-2">

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_mental">{{ __('Mental') }}</label>
                                        <select class="form-select" id="character_career_mental" aria-label="Floating label select example" name="character_career_mental">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_mental_bonus">{{ __('Bonus mental') }}</label>
                                        <select class="form-select" id="character_career_mental_bonus" aria-label="Floating label select example" name="character_career_mental_bonus">
                                            <option selected>0</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_mental_penalty">{{ __('Malus mental') }}</label>
                                        <select class="form-select" id="character_career_mental_penalty" aria-label="Floating label select example" name="character_career_mental_penalty">
                                            <option selected>0</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 p-2">

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_reaction">{{ __('Réaction') }}</label>
                                        <select class="form-select" id="character_career_reaction" aria-label="Floating label select example" name="character_career_reaction">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_reaction_bonus">{{ __('Bonus réaction') }}</label>
                                        <select class="form-select" id="character_career_reaction_bonus" aria-label="Floating label select example" name="character_career_reaction_bonus">
                                            <option selected>0</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_reaction_penalty">{{ __('Malus réaction') }}</label>
                                        <select class="form-select" id="character_career_reaction_penalty" aria-label="Floating label select example" name="character_career_reaction_penalty">
                                            <option selected>0</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>




                            <div class="container border rounded p-4">
                                <p>Points de vie</p>
                                <div class="row g-4">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_life_point_max">{{ __('Max') }}</label>
                                            <input type="text" class="form-control" id="character_life_point_max" placeholder="" value="" name="character_life_point_max">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_life_point_game">{{ __('Point de vie') }}</label>
                                            <input type="text" class="form-control" id="character_life_point_game" placeholder="" value="" name="character_life_point_game">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_life_point_bonus">{{ __('Bonus') }}</label>
                                            <input type="text" class="form-control" id="character_life_point_bonus" placeholder="" value="" name="character_life_point_bonus">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_life_point_percentage_bonus">{{ __('% de bonus') }}</label>
                                            <input type="text" class="form-control" id="character_life_point_percentage_bonus" placeholder="" value="" name="character_life_point_percentage_bonus">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <p>Points de magie</p>
                                <div class="row g-4">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_point_max">{{ __('Max') }}</label>
                                            <input type="text" class="form-control" id="character_magic_point_max" placeholder="" value="" name="character_magic_point_max">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_point_game">{{ __('Point de magie') }}</label>
                                            <input type="text" class="form-control" id="character_magic_point_game" placeholder="" value="" name="character_magic_point_game">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_point_bonus">{{ __('Bonus') }}</label>
                                            <input type="text" class="form-control" id="character_magic_point_bonus" placeholder="" value="" name="character_magic_point_bonus">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_point_percentage_bonus">{{ __('% de bonus') }}</label>
                                            <input type="text" class="form-control" id="character_magic_point_percentage_bonus" placeholder="" value="" name="character_magic_point_percentage_bonus">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <p>Forces magiques</p>
                                <div class="row g-4">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_arcana_max">{{ __('Naturelle max') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_arcana_max" placeholder="" value="" name="character_magic_force_arcana_max">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_arcana_game">{{ __('Naturelle') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_arcana_game" placeholder="" value="" name="character_magic_force_arcana_game">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="magic_force_arcana_bonus">{{ __('Bonus naturelle') }}</label>
                                            <input type="text" class="form-control" id="magic_force_arcana_bonus" placeholder="" value="" name="magic_force_arcana_bonus">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_arcana_percentage_bonus">{{ __('% bonus naturelle') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_arcana_percentage_bonus" placeholder="" value="" name="character_magic_force_arcana_percentage_bonus">
                                        </div>
                                    </div>
                                </div>


                                <div class="row g-4">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_holy_max">{{ __('Sacrée max') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_holy_max" placeholder="" value="" name="character_magic_force_holy_max">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_holy_game">{{ __('Sacrée') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_holy_game" placeholder="" value="" name="character_magic_force_holy_game">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_holy_bonus">{{ __('Bonus sacrée') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_holy_bonu" placeholder="" value="" name="character_magic_force_holy_bonus">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_holy_percentage_bonus">{{ __('% bonus sacrée') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_holy_percentage_bonus" placeholder="" value="" name="character_magic_force_holy_percentage_bonus">
                                        </div>
                                    </div>

                                </div>

                                <div class="row g-4">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_cursed_max">{{ __('Maudite max') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_cursed_max" placeholder="" value="" name="character_magic_force_cursed_max">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_cursed_game">{{ __('Maudite') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_cursed_game" placeholder="" value="" name="character_magic_force_cursed_game">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_cursed_bonus">{{ __('Bonus Maudite') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_cursed_bonus" placeholder="" value="" name="character_magic_force_cursed_bonus">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_magic_force_cursed_percentage_bonus">{{ __('% bonus maudite') }}</label>
                                            <input type="text" class="form-control" id="character_magic_force_cursed_percentage_bonus" placeholder="" value="" name="character_magic_force_cursed_percentage_bonus">
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="container border rounded p-4">

                                <div class="row g-2">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_gold">{{ __('Or') }}</label>
                                            <input type="text" class="form-control" id="character_gold" placeholder="" value="" name="character_gold">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_bank">{{ __('Réserve') }}</label>
                                            <input type="text" class="form-control" id="character_bank" placeholder="" value="" name="character_bank">
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_lap_speed">{{ __('Vitesse de tour') }}</label>
                                            <input type="text" class="form-control" id="character_lap_speed" placeholder="" value="" name="character_lap_speed">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <p>Mouvement</p>
                                <div class="row g-2">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_movement">{{ __('Normal') }}</label>
                                            <input type="text" class="form-control" id="character_movement" placeholder="" value="" name="character_movement">
                                        </div>
                                    </div>


                                </div>
                                <div class="container border rounded p-4">
                                    <p>Bonus de mouvement</p>
                                    <div class="row g-2">


                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_humanTerritory">{{ __('(route, ville, champ)') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_humanTerritory" placeholder="" value="" name="character_movement_bonus_humanTerritory">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_inside">{{ __('(grotte, donjon, maison)') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_inside" placeholder="" value="" name="character_movement_bonus_inside">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_savageTerritory">{{ __('(forêt, montagne, désert)') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_savageTerritory" placeholder="" value="" name="character_movement_bonus_savageTerritory">
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_naval">{{ __('navale') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_naval" placeholder="" value="" name="character_movement_bonus_naval">
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_mount">{{ __('monture') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_mount" placeholder="" value="" name="character_movement_bonus_mount">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <p>Champs d’action</p>
                                <div class="row g-2">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_fields">{{ __('Normal') }}</label>
                                            <input type="text" class="form-control" id="character_fields" placeholder="" value="" name="character_fields">
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_fields_bonus_spell">{{ __('Sortilège') }}</label>
                                            <input type="text" class="form-control" id="character_fields_bonus_spell" placeholder="" value="" name="character_fields_bonus_spell">
                                        </div>
                                    </div>


                                </div>
                            </div>



                            <div class="container border rounded p-4">
                                <p>Équipements</p>
                                <div class="table-responsive">
                                    <div class="form-floating">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Armes</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Portée</th>
                                                    <th scope="col">Attaque</th>
                                                    <th scope="col">Maladr.</th>
                                                    <th scope="col">Dégâts</th>
                                                    <th scope="col">Dés</th>
                                                    <th scope="col">Critique</th>
                                                    <th scope="col">Face</th>
                                                    <th scope="col">Flanc</th>
                                                    <th scope="col">Dos</th>
                                                    <th scope="col">Valeur</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_weapon1_name" placeholder="" value="" name="character_weapon1_name">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_type" placeholder="" value="" name="character_weapon1_type">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_scope" placeholder="" value="" name="character_weapon1_scope">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_attack" placeholder="" value="" name="character_weapon1_attack">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_fumble" placeholder="" value="" name="character_weapon1_fumble">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_damage" placeholder="" value="" name="character_weapon1_damage">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_dices" placeholder="" value="" name="character_weapon1_dices">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_critic" placeholder="" value="" name="character_weapon1_critic">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_face" placeholder="" value="" name="character_weapon1_face">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_flank" placeholder="" value="" name="character_weapon1_flank">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_back" placeholder="" value="" name="character_weapon1_back">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon1_value" placeholder="" value="" name="character_weapon1_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_weapon2_name" placeholder="" value="" name="character_weapon2_name">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_type" placeholder="" value="" name="character_weapon2_type">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_scope" placeholder="" value="" name="character_weapon2_scope">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_attack" placeholder="" value="" name="character_weapon2_attack">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_fumble" placeholder="" value="" name="character_weapon2_fumble">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_damage" placeholder="" value="" name="character_weapon2_damage">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_dices" placeholder="" value="" name="character_weapon2_dices">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_critic" placeholder="" value="" name="character_weapon2_critic">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_face" placeholder="" value="" name="character_weapon2_face">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_flank" placeholder="" value="" name="character_weapon2_flank">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_back" placeholder="" value="" name="character_weapon2_back">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon2_value" placeholder="" value="" name="character_weapon2_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_weapon3_name" placeholder="" value="" name="character_weapon3_name">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_type" placeholder="" value="" name="character_weapon3_type">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_scope" placeholder="" value="" name="character_weapon3_scope">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_attack" placeholder="" value="" name="character_weapon3_attack">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_fumble" placeholder="" value="" name="character_weapon3_fumble">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_damage" placeholder="" value="" name="character_weapon3_damage">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_dices" placeholder="" value="" name="character_weapon3_dices">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_critic" placeholder="" value="" name="character_weapon3_critic">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_face" placeholder="" value="" name="character_weapon3_face">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_flank" placeholder="" value="" name="character_weapon3_flank">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_back" placeholder="" value="" name="character_weapon3_back">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon3_value" placeholder="" value="" name="character_weapon3_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_weapon4_name" placeholder="" value="" name="character_weapon4_name">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_type" placeholder="" value="" name="character_weapon4_type">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_scope" placeholder="" value="" name="character_weapon4_scope">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_attack" placeholder="" value="" name="character_weapon4_attack">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_fumble" placeholder="" value="" name="character_weapon4_fumble">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_damage" placeholder="" value="" name="character_weapon4_damage">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_dices" placeholder="" value="" name="character_weapon4_dices">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_critic" placeholder="" value="" name="character_weapon4_critic">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_face" placeholder="" value="" name="character_weapon4_face">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_flank" placeholder="" value="" name="character_weapon4_flank">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_back" placeholder="" value="" name="character_weapon4_back">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon4_value" placeholder="" value="" name="character_weapon4_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_weapon5_name" placeholder="" value="" name="character_weapon5_name">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_type" placeholder="" value="" name="character_weapon5_type">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_scope" placeholder="" value="" name="character_weapon5_scope">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_attack" placeholder="" value="" name="character_weapon5_attack">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_fumble" placeholder="" value="" name="character_weapon5_fumble">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_damage" placeholder="" value="" name="character_weapon5_damage">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_dices" placeholder="" value="" name="character_weapon5_dices">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_critic" placeholder="" value="" name="character_weapon5_critic">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_face" placeholder="" value="" name="character_weapon5_face">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_flank" placeholder="" value="" name="character_weapon5_flank">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_back" placeholder="" value="" name="character_weapon5_back">
                                                    </td>
                                                    <td style="width: 6.25%;">
                                                        <input type="text" class="form-control" id="character_weapon5_value" placeholder="" value="" name="character_weapon5_value">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <div class="form-floating">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Armure</th>
                                                    <th scope="col">Perçant</th>
                                                    <th scope="col">Tranchant</th>
                                                    <th scope="col">Contondant</th>
                                                    <th scope="col">Feu</th>
                                                    <th scope="col">Sortilège</th>
                                                    <th scope="col">Valeur</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_armor1_name" placeholder="" value="" name="character_armor1_name">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_piercing" placeholder="" value="" name="character_armor1_piercin">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_edge" placeholder="" value="" name="character_armor1_edge">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_blunt" placeholder="" value="" name="character_armor1_blunt">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_fire" placeholder="" value="" name="character_armor1_fire">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_spell" placeholder="" value="" name="character_armor1_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_value" placeholder="" value="" name="character_armor1_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_armor2_name" placeholder="" value="" name="character_armor2_name">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_piercing" placeholder="" value="" name="character_armor2_piercing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_edge" placeholder="" value="" name="character_armor2_edge">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_blunt" placeholder="" value="" name="character_armor2_blunt">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_fire" placeholder="" value="" name="character_armor2_fire">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_spell" placeholder="" value="" name="character_armor2_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_value" placeholder="" value="" name="character_armor2_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 37.5%;" >
                                                        <input type="text" class="form-control" id="character_armor3_name" placeholder="" value="" name="character_armor3_name">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_piercing" placeholder="" value="" name="character_armor3_piercing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_edge" placeholder="" value="" name="character_armor3_sharp">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_blunt" placeholder="" value="" name="character_armor3_blunt">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_fire" placeholder="" value="" name="character_armor3_fire">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_spell" placeholder="" value="" name="character_armor3_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_value" placeholder="" value="" name="character_armor3_value">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <div class="form-floating">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" colspan="2">Bouclier</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Type</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_type" placeholder="" value="" name="character_shield_type">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Physique</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_physic" placeholder="" value="" name="character_shield_physic">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Champs d’action</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_field" placeholder="" value="" name="character_shield_field">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Face</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_face" placeholder="" value="" name="character_shield_face">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Flanc</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_flank" placeholder="" value="" name="character_shield_flank">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dos</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_back" placeholder="" value="" name="character_shield_back">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valeur</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_value" placeholder="" value="" name="character_shield_value">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <div class="form-floating">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" colspan="2">{{ __('Livre d’incantation') }}</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Nom</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_equipped_spellbook" placeholder="" value="" name="character_equipped_spellbook">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valeur</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_equipped_spellbook_value" placeholder="" value="" name="character_equipped_spellbook_value">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <div class="form-floating">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" colspan="2">{{ __('Symbole') }}</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Type</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_equipped_symbol" placeholder="" value="" name="character_equipped_symbol">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valeur</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_equipped_symbol_value" placeholder="" value="" name="character_equipped_symbol_value">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="container border rounded p-4">

                                <p>Talents</p>
                                <div class="row g-5">

                                    <div class="col-md">

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Manuelle</th>
                                                    <th scope="col">Pts</th>
                                                    <th scope="col">Bonus</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Alcool</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_alcool" placeholder="" value="" name="character_tma_alcool">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_alcool_b" placeholder="" value="" name="character_tma_alcool_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Artisanat</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_arts&crafts" placeholder="" value="" name="character_tma_arts&crafts">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_arts&crafts_b" placeholder="" value="" name="character_tma_arts&crafts_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Charpenterie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_carpentry" placeholder="" value="" name="character_tma_carpentry">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_carpentry_b" placeholder="" value="" name="character_tma_carpentry_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chasse et pêche</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_hunting&fishing" placeholder="" value="" name="character_tma_hunting&fishing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_hunting&fishing_b" placeholder="" value="" name="character_tma_hunting&fishing_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Conduite</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_drive" placeholder="" value="" name="character_tma_drive">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_drive_b" placeholder="" value="" name="character_tma_drive_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cordes</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_strings" placeholder="" value="" name="character_tma_strings">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_strings_b" placeholder="" value="" name="character_tma_strings_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Course</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_run" placeholder="" value="" name="character_tma_run">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_run_b" placeholder="" value="" name="character_tma_run_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Équilibre</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_balanced" placeholder="" value="" name="character_tma_balanced">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_balanced_b" placeholder="" value="" name="character_tma_balanced_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Équitation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_horseriding" placeholder="" value="" name="character_tma_horseriding">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_horseriding_b" placeholder="" value="" name="character_tma_horseriding_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Escalade</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_climbing" placeholder="" value="" name="character_tma_climbing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_climbing_b" placeholder="" value="" name="character_tma_climbing_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Lutte</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_fight" placeholder="" value="" name="character_tma_fight">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_fight_b" placeholder="" value="" name="character_tma_fight_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Métallurgie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_metallurgy" placeholder="" value="" name="character_tma_metallurgy">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_metallurgy_b" placeholder="" value="" name="character_tma_metallurgy_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Natation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_swimming" placeholder="" value="" name="character_tma_swimming">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_swimming_b" placeholder="" value="" name="character_tma_swimming_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Navigation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_navigation" placeholder="" value="" name="character_tma_navigation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_navigation_b" placeholder="" value="" name="character_tma_navigation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Torture</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_torture" placeholder="" value="" name="character_tma_torture">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_torture_b" placeholder="" value="" name="character_tma_torture_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dragonnerie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_dragonry" placeholder="" value="" name="character_tma_dragonry">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_dragonry_b" placeholder="" value="" name="character_tma_dragonry_b">
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Habileté</th>
                                                    <th scope="col">Pts</th>
                                                    <th scope="col">Bonus</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Acrobatie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_acrobatics" placeholder="" value="" name="character_tha_acrobatics">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_acrobatics_b" placeholder="" value="" name="character_tha_acrobatics_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Camouflage nature</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_naturecamo" placeholder="" value="" name="character_tha_naturecamo">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_naturecamo_b" placeholder="" value="" name="character_tha_naturecamo_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Camouflage urbain</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_urbancamo" placeholder="" value="" name="character_tha_urbancamo">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_urbancamo_b" placeholder="" value="" name="character_tha_urbancamo_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Crochetage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_lockpicking" placeholder="" value="" name="character_tha_lockpicking">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_lockpicking_b" placeholder="" value="" name="character_tha_lockpicking_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Déguisement</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_disguise" placeholder="" value="" name="character_tha_disguise">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_disguise_b" placeholder="" value="" name="character_tha_disguise_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Démolition</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_demolition" placeholder="" value="" name="character_tha_demolition">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_demolition_b" placeholder="" value="" name="character_tha_demolition_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Discrétion nature</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discretnature" placeholder="" value="" name="character_tha_discretnature">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discretnature_b" placeholder="" value="" name="character_tha_discretnature_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Discrétion urbaine</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discreturban" placeholder="" value="" name="character_tha_discreturban">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discreturban_b" placeholder="" value="" name="character_tha_discreturban_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dissimulation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_concealment" placeholder="" value="" name="character_tha_concealment">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_concealment_b" placeholder="" value="" name="character_tha_concealment_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Médecine</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_medecine" placeholder="" value="" name="character_tha_medecine">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_medecine_b" placeholder="" value="" name="character_tha_medecine_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pièges</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_trap" placeholder="" value="" name="character_tha_trap">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_trap_b" placeholder="" value="" name="character_tha_trap_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Précision</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_precision" placeholder="" value="" name="character_tha_precision">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_precision_b" placeholder="" value="" name="character_tha_precision_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Technologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_technology" placeholder="" value="" name="character_tha_technology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_technology_b" placeholder="" value="" name="character_tha_technology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Thanatologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_thanatology" placeholder="" value="" name="character_tha_thanatology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_thanatology_b" placeholder="" value="" name="character_tha_thanatology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Vol à la tire</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_pickpocketing" placeholder="" value="" name="character_tha_pickpocketing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_pickpocketing_b" placeholder="" value="" name="character_tha_pickpocketing_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tatouage tribal</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_tribaltattoo" placeholder="" value="" name="character_tha_tribaltattoo">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_tribaltattoo_b" placeholder="" value="" name="character_tha_tribaltattoo_b">
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Sens</th>
                                                    <th scope="col">Pts</th>
                                                    <th scope="col">Bonus</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Analyse</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_analysis" placeholder="" value="" name="character_tse_analysis">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_analysis_b" placeholder="" value="" name="character_tse_analysis_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Concentration</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_concentration" placeholder="" value="" name="character_tse_concentration">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_concentration_b" placeholder="" value="" name="character_tse_concentration_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cuisine</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_cook" placeholder="" value="" name="character_tse_cook">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_cook_b" placeholder="" value="" name="character_tse_cook_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Détection</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_detection" placeholder="" value="" name="character_tse_detection">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_detection_b" placeholder="" value="" name="character_tse_detection_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dressage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_dressage" placeholder="" value="" name="character_tse_dressage">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_dressage_b" placeholder="" value="" name="character_tse_dressage_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Écoute</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_listen" placeholder="" value="" name="character_tse_listen">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_listen_b" placeholder="" value="" name="character_tse_listen_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Évaluation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_evaluation" placeholder="" value="" name="character_tse_evaluation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_evaluation_b" placeholder="" value="" name="character_tse_evaluation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Lecture labiale</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_lipreading" placeholder="" value="" name="character_tse_lipreading">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_lipreading_b" placeholder="" value="" name="character_tse_lipreading_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Météorologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_meteorology" placeholder="" value="" name="character_tse_meteorology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_meteorology_b" placeholder="" value="" name="character_tse_meteorology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Observation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_observation" placeholder="" value="" name="character_tse_observation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_observation_b" placeholder="" value="" name="character_tse_observation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Odorat</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_smell" placeholder="" value="" name="character_tse_smell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_smell_b" placeholder="" value="" name="character_tse_smell_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Orientation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_orientation" placeholder="" value="" name="character_tse_orientation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_orientation_b" placeholder="" value="" name="character_tse_orientation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Perception</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_perception" placeholder="" value="" name="character_tse_perception">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_perception_b" placeholder="" value="" name="character_tse_perception_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pistage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_tracking" placeholder="" value="" name="character_tse_tracking">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_tracking_b" placeholder="" value="" name="character_tse_tracking_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Recherche</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_research" placeholder="" value="" name="character_tse_research">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_research_b" placeholder="" value="" name="character_tse_research_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">P.E.S</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_pes" placeholder="" value="" name="character_tse_pes">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_pes_b" placeholder="" value="" name="character_tse_pes_b">
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Sociale</th>
                                                    <th scope="col">Pts</th>
                                                    <th scope="col">Bonus</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Baratin</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_spiel" placeholder="" value="" name="character_tso_spiel">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_spiel_b" placeholder="" value="" name="character_tso_spiel_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Corruption</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_corruption" placeholder="" value="" name="character_tso_corruption">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_corruption_b" placeholder="" value="" name="character_tso_corruption_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Éloquence</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_eloquence" placeholder="" value="" name="character_tso_eloquence">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_eloquence_b" placeholder="" value="" name="character_tso_eloquence_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Empathie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_empathy" placeholder="" value="" name="character_tso_empathy">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_empathy_b" placeholder="" value="" name="character_tso_empathy_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Faux papiers</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_counterfeiting" placeholder="" value="" name="character_tso_counterfeiting">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_counterfeiting_b" placeholder="" value="" name="character_tso_counterfeiting_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hypnoptisme</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_hypnotism" placeholder="" value="" name="character_tso_hypnotism">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_hypnotism_b" placeholder="" value="" name="character_tso_hypnotism_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Intimidation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_intimidation" placeholder="" value="" name="character_tso_intimidation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_intimidation_b" placeholder="" value="" name="character_tso_intimidation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jargon secret</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_secretjargon" placeholder="" value="" name="character_tso_secretjargon">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_secretjargon_b" placeholder="" value="" name="character_tso_secretjargon_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jeu</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_game" placeholder="" value="" name="character_tso_game">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_game_b" placeholder="" value="" name="character_tso_game_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Leadership</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_leadership" placeholder="" value="" name="character_tso_leadership">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_leadership_b" placeholder="" value="" name="character_tso_leadership_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Marchandage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_bargaining" placeholder="" value="" name="character_tso_bargaining">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_bargaining_b" placeholder="" value="" name="character_tso_bargaining_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Performance</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_performance" placeholder="" value="" name="character_tso_performance">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_performance_b" placeholder="" value="" name="character_tso_performance_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rumeurs</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_rumors" placeholder="" value="" name="character_tso_rumors">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_rumors_b" placeholder="" value="" name="character_tso_rumors_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Séduction</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_seduction" placeholder="" value="" name="character_tso_seduction">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_seduction_b" placeholder="" value="" name="character_tso_seduction_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ventriloquie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ventriloquism" placeholder="" value="" name="character_tso_ventriloquism">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ventriloquism_b" placeholder="" value="" name="character_tso_ventriloquism_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ignisalta</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ignisalta" placeholder="" value="" name="character_tso_ignisalta">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ignisalta_b" placeholder="" value="" name="character_tso_ignisalta_b">
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Connaissance</th>
                                                    <th scope="col">Pts</th>
                                                    <th scope="col">Bonus</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">Ancien culte</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ancientcult" placeholder="" value="" name="character_tco_ancientcult">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ancientcult_b" placeholder="" value="" name="character_tco_ancientcult_b">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Astronomie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_astronomy" placeholder="" value="" name="character_tco_astronomy">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_astronomy_b" placeholder="" value="" name="character_tco_astronomy_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bibliothèques</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_library" placeholder="" value="" name="character_tco_library">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_library_b" placeholder="" value="" name="character_tco_library_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Créatures</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_creature" placeholder="" value="" name="character_tco_creature">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_creature_b" placeholder="" value="" name="character_tco_creature_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Géographie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_geography" placeholder="" value="" name="character_tco_geography">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_geography_b" placeholder="" value="" name="character_tco_geography_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Histoire</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_history" placeholder="" value="" name="character_tco_history">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_history_b" placeholder="" value="" name="character_tco_history_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Identification</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_identification" placeholder="" value="" name="character_tco_identification">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_identification_b" placeholder="" value="" name="character_tco_identification_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Maisons</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_houses" placeholder="" value="" name="character_tco_houses">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_houses_b" placeholder="" value="" name="character_tco_houses_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nature</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_nature" placeholder="" value="" name="character_tco_nature">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_nature_b" placeholder="" value="" name="character_tco_nature_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Occultisme</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_occultism" placeholder="" value="" name="character_tco_occultism">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_occultism_b" placeholder="" value="" name="character_tco_occultism_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Politique</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_politics" placeholder="" value="" name="character_tco_politics">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_politics_b" placeholder="" value="" name="character_tco_politics_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rituel du trépas</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofdeath" placeholder="" value="" name="character_tco_ritualofdeath">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofdeath_b" placeholder="" value="" name="character_tco_ritualofdeath_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sortilèges</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_spell" placeholder="" value="" name="character_tco_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_spell_b" placeholder="" value="" name="character_tco_spell_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tactiques</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_tactical" placeholder="" value="" name="character_tco_tactical">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_tactical_b" placeholder="" value="" name="character_tco_tactical_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Théologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_theology" placeholder="" value="" name="character_tco_theology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_theology_b" placeholder="" value="" name="character_tco_theology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rituel des étoiles</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofstars" placeholder="" value="" name="character_tco_ritualofstars">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofstars_b" placeholder="" value="" name="character_tco_ritualofstars_b">
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                            <div class="container border rounded p-4">

                                <p>Influences</p>
                                <div class="row g-5">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_meraltor">{{ __('Méraltor') }}</label>
                                            <input type="text" class="form-control" id="character_influence_meraltor" placeholder="" value="" name="character_influence_meraltor">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_aravas">{{ __('Aravas') }}</label>
                                            <input type="text" class="form-control" id="character_influence_aravas" placeholder="" value="" name="character_influence_aravas">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_clergy">{{ __('Clergé') }}</label>
                                            <input type="text" class="form-control" id="character_influence_clergy" placeholder="" value="" name="character_influence_clergy">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_berrouve">{{ __('Berrouve') }}</label>
                                            <input type="text" class="form-control" id="character_influence_berrouve" placeholder="" value="" name="character_influence_berrouve">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_harlog">{{ __('Harlog') }}</label>
                                            <input type="text" class="form-control" id="character_influence_harlog" placeholder="" value="" name="character_influence_harlog">
                                        </div>
                                    </div>
                                </div>


                                <div class="row g-5">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_brotherhood">{{ __('Confrérie') }}</label>
                                            <input type="text" class="form-control" id="character_influence_brotherhood" placeholder="" value="" name="character_influence_brotherhood">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_duloir">{{ __('Duloir') }}</label>
                                            <input type="text" class="form-control" id="character_influence_duloir" placeholder="" value="" name="character_influence_duloir">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_tiar">{{ __('Tiar') }}</label>
                                            <input type="text" class="form-control" id="character_influence_tiar" placeholder="" value="" name="character_influence_tiar">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_wolfcircle">{{ __('Cercle des Loups') }}</label>
                                            <input type="text" class="form-control" id="character_influence_wolfcircle" placeholder="" value="" name="character_influence_wolfcircle">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_arcadis">{{ __('Arcadis') }}</label>
                                            <input type="text" class="form-control" id="character_influence_arcadis" placeholder="" value="" name="character_influence_arcadis">
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-5">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_komeidai">{{ __('Komeidai') }}</label>
                                            <input type="text" class="form-control" id="character_influence_komeidai" placeholder="" value="" name="character_influence_komeidai">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_savie">{{ __('Savie') }}</label>
                                            <input type="text" class="form-control" id="character_influence_savie" placeholder="" value="" name="character_influence_savie">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_mortuterra">{{ __('Mortuterra') }}</label>
                                            <input type="text" class="form-control" id="character_influence_mortuterra" placeholder="" value="" name="character_influence_mortuterra">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_collectorsguild">{{ __('Guilde des collectionneurs') }}</label>
                                            <input type="text" class="form-control" id="character_influence_collectorsguild" placeholder="" value="" name="character_influence_collectorsguild">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_total">{{ __('Total') }}</label>
                                            <input type="text" class="form-control" id="character_influence_total" placeholder="" value="" name="character_influence_total">
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="character_background">{{ __('Histoire du personnage') }}</label>
                                    <textarea class="form-control" placeholder="Écrivez l'histoire ici" id="summernote" style="height: 100px" name="character_background"></textarea>
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">

                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width :20%">Blessures</th>
                                                <th scope="col">Description</th>
                                                <th scope="col" style="width :10%">Année</th>
                                                <th scope="col" style="width :10%">Mois</th>
                                                <th scope="col" style="width :10%">Jours</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury1_name" placeholder="" value="" name="character_injury1_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury1_descr" placeholder="" value="" name="character_injury1_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury1_year" placeholder="" value="" name="character_injury1_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury1_month" aria-label="Floating label select example" name="character_injury1_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury1_day" aria-label="Floating label select example" name="character_injury1_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury2_name" placeholder="" value="" name="character_injury2_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury2_descr" placeholder="" value="" name="character_injury2_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury2_year" placeholder="" value="" name="character_injury2_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury2_month" aria-label="Floating label select example" name="character_injury2_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury2_day" aria-label="Floating label select example" name="character_injury2_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury3_name" placeholder="" value="" name="character_injury3_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury3_descr" placeholder="" value="" name="character_injury3_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury3_year" placeholder="" value="" name="character_injury3_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury3_month" aria-label="Floating label select example" name="character_injury3_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury3_day" aria-label="Floating label select example" name="character_injury3_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury4_name" placeholder="" value="" name="character_injury4_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury4_descr" placeholder="" value="" name="character_injury4_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury4_year" placeholder="" value="" name="character_injury4_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury4_month" aria-label="Floating label select example" name="character_injury4_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury4_day" aria-label="Floating label select example" name="character_injury4_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury5_name" placeholder="" value="" name="character_injury5_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury5_descr" placeholder="" value="" name="character_injury5_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury5_year" placeholder="" value="" name="character_injury5_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury5_month" aria-label="Floating label select example" name="character_injury5_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury5_day" aria-label="Floating label select example" name="character_injury5_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury6_name" placeholder="" value="" name="character_injury6_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury6_descr" placeholder="" value="" name="character_injury6_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury6_year" placeholder="" value="" name="character_injury6_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury6_month" aria-label="Floating label select example" name="character_injury6_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury6_day" aria-label="Floating label select example" name="character_injury6_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury7_name7" placeholder="" value="" name="character_injury7_name7">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury7_descr" placeholder="" value="" name="character_injury7_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury7_year" placeholder="" value="" name="character_injury7_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury7_month" aria-label="Floating label select example" name="character_injury7_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury7_day" aria-label="Floating label select example" name="character_injury7_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury8_name" placeholder="" value="" name="character_injury8_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury8_descr" placeholder="" value="" name="character_injury8_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury8_year" placeholder="" value="" name="character_injury8_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury8_month" aria-label="Floating label select example" name="character_injury8_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury8_day" aria-label="Floating label select example" name="character_injury8_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">

                                    <table class="table table-bordered">
                                        <thead class="thead-light">

                                            <tr>
                                                <th scope="col" style="width :20%">Cicatrices</th>
                                                <th scope="col">Description</th>
                                                <th scope="col" style="width :10%">Année</th>
                                                <th scope="col" style="width :10%">Mois</th>
                                                <th scope="col" style="width :10%">Jours</th>
                                            </tr>

                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar1_name" placeholder="" value="" name="character_scar1_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar1_descr" placeholder="" value="" name="character_scar1_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar1_year" placeholder="" value="" name="character_scar1_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar1_month" aria-label="Floating label select example" name="character_scar1_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar_day1" aria-label="Floating label select example" name="character_scar_day1">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar2_name" placeholder="" value="" name="character_scar2_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar2_descr" placeholder="" value="" name="character_scar2_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar2_year" placeholder="" value="" name="character_scar2_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar2_month" aria-label="Floating label select example" name="character_scar2_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar2_day" aria-label="Floating label select example" name="character_scar2_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar3_name" placeholder="" value="" name="character_scar3_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar3_descr" placeholder="" value="" name="character_scar3_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar3_year" placeholder="" value="" name="character_scar3_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar3_month" aria-label="Floating label select example" name="character_scar3_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar_day3" aria-label="Floating label select example" name="character_scar_day3">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar4_name" placeholder="" value="" name="character_scar4_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar4_descr" placeholder="" value="" name="character_scar4_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar4_year" placeholder="" value="" name="character_scar4_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar4_month" aria-label="Floating label select example" name="character_scar4_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar4_day" aria-label="Floating label select example" name="character_scar4_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar5_name" placeholder="" value="" name="character_scar5_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar5_descr" placeholder="" value="" name="character_scar5_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar5_year" placeholder="" value="" name="character_scar5_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar5_month" aria-label="Floating label select example" name="character_scar5_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar5_day" aria-label="Floating label select example" name="character_scar5_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar6_name" placeholder="" value="" name="character_scar6_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar6_descr" placeholder="" value="" name="character_scar6_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar6_year" placeholder="" value="" name="character_scar6_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar6_month" aria-label="Floating label select example" name="character_scar6_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar6_day" aria-label="Floating label select example" name="character_scar6_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar7_name" placeholder="" value="" name="character_scar7_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar7_descr" placeholder="" value="" name="character_scar7_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar7_year" placeholder="" value="" name="character_scar7_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar7_month" aria-label="Floating label select example" name="character_scar7_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar7_day" aria-label="Floating label select example" name="character_scar7_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar8_name" placeholder="" value="" name="character_scar8_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar8_descr" placeholder="" value="" name="character_scar8_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar8_year" placeholder="" value="" name="character_scar8_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar8_month" aria-label="Floating label select example" name="character_scar8_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar_day8" aria-label="Floating label select example" name="character_scar_day8">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">

                                    <table class="table table-bordered">
                                        <thead class="thead-light">

                                            <tr>
                                                <th scope="col" style="width :20%">Décorations</th>
                                                <th scope="col">Description</th>
                                                <th scope="col" style="width :10%">Année</th>
                                                <th scope="col" style="width :10%">Mois</th>
                                                <th scope="col" style="width :10%">Jours</th>
                                            </tr>


                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco1_name" placeholder="" value="" name="character_deco1_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco1_descr" placeholder="" value="" name="character_deco1_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco1_year" placeholder="" value="" name="character_deco1_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco1_month" aria-label="Floating label select example" name="character_deco1_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco1_day" aria-label="Floating label select example" name="character_deco1_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco2_name" placeholder="" value="" name="character_deco2_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco2_descr" placeholder="" value="" name="character_deco2_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco2_year" placeholder="" value="" name="character_deco2_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco2_month" aria-label="Floating label select example" name="character_deco2_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco2_day" aria-label="Floating label select example" name="character_deco2_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco3_name" placeholder="" value="" name="character_deco3_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco3_descr" placeholder="" value="" name="character_deco3_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco3_year" placeholder="" value="" name="character_deco3_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco3_month" aria-label="Floating label select example" name="character_deco3_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco3_day" aria-label="Floating label select example" name="character_deco3_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco4_name" placeholder="" value="" name="character_deco4_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco4_descr" placeholder="" value="" name="character_deco4_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco4_year" placeholder="" value="" name="character_deco4_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco4_month" aria-label="Floating label select example" name="character_deco4_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco4_day" aria-label="Floating label select example" name="character_deco4_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco5_name" placeholder="" value="" name="character_deco5_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco5_descr" placeholder="" value="" name="character_deco5_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco5_year" placeholder="" value="" name="character_deco5_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco5_month" aria-label="Floating label select example" name="character_deco5_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco5_day" aria-label="Floating label select example" name="character_deco5_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco6_name" placeholder="" value="" name="character_deco6_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco6_descr" placeholder="" value="" name="character_deco6_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco6_year" placeholder="" value="" name="character_deco6_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco6_month" aria-label="Floating label select example" name="character_deco6_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco6_day" aria-label="Floating label select example" name="character_deco6_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco7_name" placeholder="" value="" name="character_deco7_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco7_descr" placeholder="" value="" name="character_deco7_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco7_year" placeholder="" value="" name="character_deco7_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco7_month" aria-label="Floating label select example" name="character_deco7_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco7_day" aria-label="Floating label select example" name="character_deco7_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco8_name" placeholder="" value="" name="character_deco8_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco8_descr" placeholder="" value="" name="character_deco8_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="deco8_year" placeholder="" value="" name="deco8_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco8_month" aria-label="Floating label select example" name="character_deco8_month">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco8_day" aria-label="Floating label select example" name="character_deco8_day">
                                                        <option selected></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        <div class="container pt-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                        </div>

                    </form>



                </div>

            </div>

        </div>
    </div>

@endsection
