@extends('layouts.app')
@section('title')
Modification personnage
@endsection

@section('content')

    <div class="row justify-content-center p-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p>Modification du personnage <strong>{{ $character->character_name }}</strong></p></div>

                <div class="card-body">
                    <form class="form-floating" action="{{ route('character.user.update', $character->id) }}" method="POST">

                        @csrf
                        <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id">

                        <div class="container border rounded p-4">

                            <div class="row g-3">

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_name">{{ __('Nom') }}</label>
                                        <input type="text" class="form-control" id="character_name" placeholder="" value="{{ old('character_name') ?? $character->character_name }}" name="character_name">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_title">{{ __('Titre') }}</label>
                                        <input type="text" class="form-control" id="character_title" placeholder="" value="{{ old('character_title') ?? $character->character_title }}" name="character_title">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_age">{{ __('Âge') }}</label>
                                        <input type="text" class="form-control" id="character_age" placeholder="" value="{{ old('character_age') ?? $character->character_age }}" name="character_age">
                                    </div>
                                </div>

                            </div>

                            <div class="row g-3">

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_date_of_birth">{{ __('Date de naissance') }}</label>
                                        <select class="form-select" id="character_date_of_birth" aria-label="Floating label select example" name="character_date_of_birth">
                                            <option selected>{{ old('character_date_of_birth') ?? $character->character_date_of_birth }}</option>
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
                                            <option selected>{{ old('character_month_of_birth') ?? $character->character_month_of_birth }}</option></option>
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
                                        <input type="text" class="form-control" id="character_year_of_birth" placeholder="" value="{{ old('character_year_of_birth') ?? $character->character_year_of_birth }}" name="character_year_of_birth">
                                    </div>
                                </div>

                            </div>

                            <div class="row g-3">

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_experience">{{ __('Expérience') }}</label>
                                        <input type="text" class="form-control" id="character_experience" placeholder="" value="{{ old('character_experience') ?? $character->character_experience }}" name="character_experience">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_essence_game">{{ __('Essence') }}</label>
                                        <input type="text" class="form-control" id="character_essence_game" placeholder="" value="{{ old('character_essence_game') ?? $character->character_essence_game }}" name="character_essence_game">
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating">
                                        <label for="character_essence_total">{{ __('Essence totale') }}</label>
                                        <input type="text" class="form-control" id="character_essence_total" placeholder="" value="{{ old('character_essence_total') ?? $character->character_essence_total }}" name="character_essence_total">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="container border rounded p-4">

                            <div class="row g-2">

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_house_name">{{ __('Maison') }} <a href="">(créer)</a></label>
                                        <input type="text" class="form-control" id="character_house_name" placeholder="" value="{{ old('character_house_name') ?? $character->character_house_name }}" name="character_house_name">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_house_rank">{{ __('Rang') }}</label>
                                        <input type="text" class="form-control" id="character_house_rank" placeholder="" value="{{ old('character_house_rank') ?? $character->character_house_rank }}" name="character_house_rank">
                                    </div>
                                </div>
                            </div>

                                    <div class="form-floating pt-2">
                                        <label for="character_house_dogma">{{ __('Dogma') }}</label>
                                        <input type="text" class="form-control" id="character_house_dogma" placeholder="" value="{{ old('character_house_dogma') ?? $character->character_house_dogma }}" name="character_house_dogma">
                                    </div>

                        </div>

                        <div class="container border rounded p-4">

                            <div class="form-floating">
                                <label for="character_guild_name">{{ __('Guilde') }} <a href="">(créer)</a></label>
                                <input type="text" class="form-control" id="character_guild_name" placeholder="" value="{{ old('character_guild_name') ?? $character->character_guild_name }}" name="character_guild_name">
                            </div>

                            <div class="form-floating pt-2">
                                <label for="character_guild_dogma">{{ __('Dogma') }}</label>
                                <input type="text" class="form-control" id="character_guild_dogma" placeholder="" value="{{ old('character_guild_dogma') ?? $character->character_guild_dogma }}" name="character_guild_dogma">
                            </div>
                        </div>

                        <div class="container border rounded p-4">

                            <div class="form-floating">
                                <label for="character_career_name">{{ __('Carrière') }}</label>
                                <input type="text" class="form-control" id="character_career_name" placeholder="" value="{{ old('character_career_name') ?? $character->character_career_name }}" name="character_career_name">
                            </div>

                            <div class="row g-3 p-2">

                                <div class="col-3">
                                    <div class="form-floating">
                                        <label for="character_career_physic">{{ __('Physique') }}</label>
                                        <select class="form-select" id="character_career_physic" aria-label="Floating label select example" name="character_career_physic">
                                            <option selected>{{ old('character_career_physic') ?? $character->character_career_physic }}</option>
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
                                            <option selected>{{ old('character_career_physic_bonus') ?? $character->character_career_physic_bonus }}</option>
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
                                            <option selected>{{ old('character_career_physic_penalty') ?? $character->character_career_physic_penalty }}</option>
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
                                            <option selected>{{ old('character_career_mental') ?? $character->character_career_mental }}</option>
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
                                            <option selected>{{ old('character_career_mental_bonus') ?? $character->character_career_mental_bonus }}</option>
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
                                            <option selected>{{ old('character_career_mental_penalty') ?? $character->character_career_mental_penalty }}</option>
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
                                            <option selected>{{ old('character_career_reaction') ?? $character->character_career_reaction }}</option>
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
                                            <option selected>{{ old('character_career_reaction_bonus') ?? $character->character_career_reaction_bonus }}</option>
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
                                            <option selected>{{ old('character_career_reaction_penalty') ?? $character->character_career_reaction_penalty }}</option>
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




                            
                            <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 20%">{{ __('Points de vie') }}</th>
                                                <th scope="col" style="width: 20%">{{ __('Pv Max') }}</th>                                                                                    
                                                <th scope="col" style="width: 20%">{{ __('Bonus') }}</th>
												<th scope="col" style="width: 20%">{{ __('% de bonus') }}</th>
                                                
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>                                                
                                                    <td style="width: 20%" height="35px">
                                                        <div class="col-md">
															<div class="form-floating">
                                                                <div>                                                                    
                                                                    <input type="text" class="form-control" id="character_life_point_game" placeholder="" value="{{ old('character_life_point_game') ?? $character->character_life_point_game }}" name="character_life_point_game">
                                                                </div>   
                                                            </div>
														</div>  
                                                    </td>
                                                    <td style="width: 20%" height="35px">
                                                        <div class="col-md">
															<div class="form-floating">
                                                                <div>                                                                  
                                                                                    
                                                                    <!-- calcul lifemax -->
                                                                        @include('calculations.lifemax') 
                                                                    <!-- end: calcul lifemax -->
                                                                </div>   
                                                            </div>
														</div>  
                                                    </td>



													<td style="width: 20%" height="35px">
														<div class="col-md">
															<div class="form-floating">																
																<input type="text" class="form-control" id="character_life_point_bonus" placeholder="" value="{{ old('character_life_point_bonus') ?? $character->character_life_point_bonus }}" name="character_life_point_bonus">
															</div>
														</div>
													</td>
													<td style="width: 20%" height="35px">
														<div class="col-md">
															<div class="form-floating">																
																<input type="text" class="form-control" id="character_life_point_percentage_bonus" placeholder="" value="{{ old('character_life_point_percentage_bonus') ?? $character->character_life_point_percentage_bonus }}" name="character_life_point_percentage_bonus">
															</div>
														</div>
													</td>
													
                                            </tr>

                                        </tbody>
                                    </table>
                                
                            </div>

                            
                            <div class="table-responsive" style="overflow-x:auto;">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 20%">{{ __('Points de magie') }}</th>
                                                <th scope="col" style="width: 20%">{{ __('Pm Max') }}</th>                                                                                    
                                                <th scope="col" style="width: 20%">{{ __('Bonus') }}</th>
                                                <th scope="col" style="width: 20%">{{ __('% de bonus') }}</th>
                                                
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>                                                
                                                    <td style="width: 20%" height="35px">
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <div>                                                                    
                                                                    <input type="text" class="form-control" id="character_magic_point_game" placeholder="" value="{{ old('character_magic_point_game') ?? $character->character_magic_point_game }}" name="character_magic_point_game">
                                                                </div>   
                                                            </div>
                                                        </div>  
                                                    </td>
                                                    <td style="width: 20%" height="35px">
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <div>                                                                  
                                                                                    
                                                                    <!-- calcul magicpointmax -->
                                                                        @include('calculations.magicpointmax') 
                                                                    <!-- end: calcul magicpointmax -->
                                                                </div>   
                                                            </div>
                                                        </div>  
                                                    </td>



                                                    <td style="width: 20%" height="35px">
                                                        <div class="col-md">
                                                            <div class="form-floating">																
                                                                <input type="text" class="form-control" id="character_magic_point_bonus" placeholder="" value="{{ old('character_magic_point_bonus') ?? $character->character_magic_point_bonus }}" name="character_magic_point_bonus">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="width: 20%" height="35px">
                                                        <div class="col-md">
                                                            <div class="form-floating">																
                                                                <input type="text" class="form-control" id="character_magic_point_percentage_bonus" placeholder="" value="{{ old('character_magic_point_percentage_bonus') ?? $character->character_magic_point_percentage_bonus }}" name="character_magic_point_percentage_bonus">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                            </tr>

                                        </tbody>
                                    </table>
                                
                            </div>
                            
                            <div class="table-responsive" style="overflow-x:auto;">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" style="width: 20%">Naturelle
                                            <!-- calcul fmarcana -->
                                            (@include('calculations.fmnaturelle')) 
                                                <!-- end: calcul fmarcana -->
                                            </th>
                                            <th scope="col" style="width: 20%; text-align: center;">Force magique</th>                                                
                                            <th scope="col" style="width: 20%; text-align: center;">Bonus</th>
                                            <th scope="col" style="width: 20%; text-align: center;">% bonus</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Sortilège</th>
                                                <td style="width: 20%" height="35px">
                                                <!-- calcul fmarcana -->
                                                @include('calculations.fmarcana') 
                                                <!-- end: calcul fmarcana --> 
                                                </td>

                                                
                                                <td style="width: 20%" height="35px"><input type="text" class="form-control" id="magic_force_arcana_bonus" placeholder="" value="{{ old('magic_force_arcana_bonus') ?? $character->magic_force_arcana_bonus }}" name="magic_force_arcana_bonus"></td>
                                                <td style="width: 20%" height="35px"><input type="text" class="form-control" id="character_magic_force_arcana_percentage_bonus" placeholder="" value="{{ old('character_magic_force_arcana_percentage_bonus') ?? $character->character_magic_force_arcana_percentage_bonus }}" name="character_magic_force_arcana_percentage_bonus"></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Sacrée</th>
                                                <td style="width: 20%" height="35px">
                                                <!-- calcul fmholy -->
                                                @include('calculations.fmholy') 
                                                <!-- end: calcul fmholy --> 
                                                </td>
                                                
                                                <td style="width: 20%" height="35px"><input type="text" class="form-control" id="character_magic_force_holy_bonu" placeholder="" value="{{ old('character_magic_force_holy_bonu') ?? $character->character_magic_force_holy_bonu }}" name="character_magic_force_holy_bonus"></td>
                                                <td style="width: 20%" height="35px"><input type="text" class="form-control" id="character_magic_force_holy_percentage_bonus" placeholder="" value="{{ old('character_magic_force_holy_percentage_bonus') ?? $character->character_magic_force_holy_percentage_bonus }}" name="character_magic_force_holy_percentage_bonus"></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">Maudite</th>
                                                <td style="width: 20%" height="35px">
                                                <!-- calcul fmcursed -->
                                                @include('calculations.fmcursed') 
                                                <!-- end: calcul fmcursed --> 
                                                </td>
                                                
                                                <td style="width: 20%" height="35px"><input type="text" class="form-control" id="character_magic_force_cursed_bonus" placeholder="" value="{{ old('character_magic_force_cursed_bonus') ?? $character->character_magic_force_cursed_bonus }}" name="character_magic_force_cursed_bonus"></td>
                                                <td style="width: 20%" height="35px"><input type="text" class="form-control" id="character_magic_force_cursed_percentage_bonus" placeholder="" value="{{ old('character_magic_force_cursed_percentage_bonus') ?? $character->character_magic_force_cursed_percentage_bonus }}" name="character_magic_force_cursed_percentage_bonus"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            

                            <div class="container border rounded p-4">

                                <div class="row g-2">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_gold">{{ __('Or') }}</label>
                                            <input type="text" class="form-control" id="character_gold" placeholder="" value="{{ old('character_gold') ?? $character->character_gold }}" name="character_gold">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_bank">{{ __('Réserve') }}</label>
                                            <input type="text" class="form-control" id="character_bank" placeholder="" value="{{ old('character_bank') ?? $character->character_bank }}" name="character_bank">
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_lap_speed">{{ __('Initiative') }}</label>
                                            <input type="text" class="form-control" id="character_init" placeholder="" value="{{ old('character_init') ?? $character->character_init }}" name="character_init">
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_lap_speed">{{ __('Vitesse de tour') }}</label>
                                            <input type="text" class="form-control" id="character_lap_speed" placeholder="" value="{{ old('character_lap_speed') ?? $character->character_lap_speed }}" name="character_lap_speed">
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
                                            <input type="text" class="form-control" id="character_movement" placeholder="" value="{{ old('character_movement') ?? $character->character_movement }}" name="character_movement">
                                        </div>
                                    </div>


                                </div>
                                <div class="container border rounded p-4">
                                    <p>Bonus de mouvement</p>
                                    <div class="row g-2">


                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_humanTerritory">{{ __('(route, ville, champ)') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_humanTerritory" placeholder="" value="{{ old('character_movement_bonus_humanTerritory') ?? $character->character_movement_bonus_humanTerritory }}" name="character_movement_bonus_humanTerritory">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_inside">{{ __('(grotte, donjon, maison)') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_inside" placeholder="" value="{{ old('character_movement_bonus_inside') ?? $character->character_movement_bonus_inside }}" name="character_movement_bonus_inside">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_savageTerritory">{{ __('(forêt, montagne, désert)') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_savageTerritory" placeholder="" value="{{ old('character_movement_bonus_savageTerritory') ?? $character->character_movement_bonus_savageTerritory }}" name="character_movement_bonus_savageTerritory">
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_naval">{{ __('navale') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_naval" placeholder="" value="{{ old('character_movement_bonus_naval') ?? $character->character_movement_bonus_naval }}" name="character_movement_bonus_naval">
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="form-floating">
                                                <label for="character_movement_bonus_mount">{{ __('monture') }}</label>
                                                <input type="text" class="form-control" id="character_movement_bonus_mount" placeholder="" value="{{ old('character_movement_bonus_mount') ?? $character->character_movement_bonus_mount }}" name="character_movement_bonus_mount">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <p>Champs d’action</p>
                                <div class="row g-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_fields">{{ __('Normal') }}</label>
                                            <input type="text" class="form-control" id="character_fields" placeholder="" value="{{ old('character_fields') ?? $character->character_fields }}" name="character_fields">
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_fields_bonus_spell">{{ __('Sortilège') }}</label>
                                            <input type="text" class="form-control" id="character_fields_bonus_spell" placeholder="" value="{{ old('character_fields_bonus_spell') ?? $character->character_fields_bonus_spell }}" name="character_fields_bonus_spell">
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_fields_bonus_singing">{{ __('Chant') }}</label>
                                            <input type="text" class="form-control" id="character_fields_bonus_singing" placeholder="" value="{{ old('character_fields_bonus_singing') ?? $character->character_fields_bonus_singing }}" name="character_fields_bonus_singing">
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
                                                    <th scope="col">Att. B</th>
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
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_weapon1_name" placeholder="" value="{{ old('character_weapon1_name') ?? $character->character_weapon1_name }}" name="character_weapon1_name">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_type" placeholder="" value="{{ old('character_weapon1_type') ?? $character->character_weapon1_type }}" name="character_weapon1_type">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_scope" placeholder="" value="{{ old('character_weapon1_scope') ?? $character->character_weapon1_scope }}" name="character_weapon1_scope">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_attack" placeholder="" value="{{ old('character_weapon1_attack') ?? $character->character_weapon1_attack }}" name="character_weapon1_attack">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_attack_b" placeholder="" value="{{ old('character_weapon1_attack_b') ?? $character->character_weapon1_attack_b }}" name="character_weapon1_attack_b">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_fumble" placeholder="" value="{{ old('character_weapon1_fumble') ?? $character->character_weapon1_fumble }}" name="character_weapon1_fumble">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_damage" placeholder="" value="{{ old('character_weapon1_damage') ?? $character->character_weapon1_damage }}" name="character_weapon1_damage">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_dices" placeholder="" value="{{ old('character_weapon1_dices') ?? $character->character_weapon1_dices }}" name="character_weapon1_dices">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_critic" placeholder="" value="{{ old('character_weapon1_critic') ?? $character->character_weapon1_critic }}" name="character_weapon1_critic">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_face" placeholder="" value="{{ old('character_weapon1_face') ?? $character->character_weapon1_face }}" name="character_weapon1_face">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_flank" placeholder="" value="{{ old('character_weapon1_flank') ?? $character->character_weapon1_flank }}" name="character_weapon1_flank">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_back" placeholder="" value="{{ old('character_weapon1_back') ?? $character->character_weapon1_back }}" name="character_weapon1_back">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon1_value" placeholder="" value="{{ old('character_weapon1_value') ?? $character->character_weapon1_value }}" name="character_weapon1_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_weapon2_name" placeholder="" value="{{ old('character_weapon2_name') ?? $character->character_weapon2_name }}" name="character_weapon2_name">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_type" placeholder="" value="{{ old('character_weapon2_type') ?? $character->character_weapon2_type }}" name="character_weapon2_type">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_scope" placeholder="" value="{{ old('character_weapon2_scope') ?? $character->character_weapon2_scope }}" name="character_weapon2_scope">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_attack" placeholder="" value="{{ old('character_weapon2_attack') ?? $character->character_weapon2_attack }}" name="character_weapon2_attack">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_attack_b" placeholder="" value="{{ old('character_weapon2_attack_b') ?? $character->character_weapon2_attack_b }}" name="character_weapon2_attack_b">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_fumble" placeholder="" value="{{ old('character_weapon2_fumble') ?? $character->character_weapon2_fumble }}" name="character_weapon2_fumble">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_damage" placeholder="" value="{{ old('character_weapon2_damage') ?? $character->character_weapon2_damage }}" name="character_weapon2_damage">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_dices" placeholder="" value="{{ old('character_weapon2_dices') ?? $character->character_weapon2_dices }}" name="character_weapon2_dices">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_critic" placeholder="" value="{{ old('character_weapon2_critic') ?? $character->character_weapon2_critic }}" name="character_weapon2_critic">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_face" placeholder="" value="{{ old('character_weapon2_face') ?? $character->character_weapon2_face }}" name="character_weapon2_face">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_flank" placeholder="" value="{{ old('character_weapon2_flank') ?? $character->character_weapon2_flank }}" name="character_weapon2_flank">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_back" placeholder="" value="{{ old('character_weapon2_back') ?? $character->character_weapon2_back }}" name="character_weapon2_back">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon2_value" placeholder="" value="{{ old('character_weapon2_value') ?? $character->character_weapon2_value }}" name="character_weapon2_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_weapon3_name" placeholder="" value="{{ old('character_weapon3_name') ?? $character->character_weapon3_name }}" name="character_weapon3_name">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_type" placeholder="" value="{{ old('character_weapon3_type') ?? $character->character_weapon3_type }}" name="character_weapon3_type">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_scope" placeholder="" value="{{ old('character_weapon3_scope') ?? $character->character_weapon3_scope }}" name="character_weapon3_scope">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_attack" placeholder="" value="{{ old('character_weapon3_attack') ?? $character->character_weapon3_attack }}" name="character_weapon3_attack">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_attack_b" placeholder="" value="{{ old('character_weapon3_attack_b') ?? $character->character_weapon3_attack_b }}" name="character_weapon3_attack_b">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_fumble" placeholder="" value="{{ old('character_weapon3_fumble') ?? $character->character_weapon3_fumble }}" name="character_weapon3_fumble">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_damage" placeholder="" value="{{ old('character_weapon3_damage') ?? $character->character_weapon3_damage }}" name="character_weapon3_damage">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_dices" placeholder="" value="{{ old('character_weapon3_dices') ?? $character->character_weapon3_dices }}" name="character_weapon3_dices">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_critic" placeholder="" value="{{ old('character_weapon3_critic') ?? $character->character_weapon3_critic }}" name="character_weapon3_critic">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_face" placeholder="" value="{{ old('character_weapon3_face') ?? $character->character_weapon3_face }}" name="character_weapon3_face">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_flank" placeholder="" value="{{ old('character_weapon3_flank') ?? $character->character_weapon3_flank }}" name="character_weapon3_flank">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_back" placeholder="" value="{{ old('character_weapon3_back') ?? $character->character_weapon3_back }}" name="character_weapon3_back">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon3_value" placeholder="" value="{{ old('character_weapon3_value') ?? $character->character_weapon3_value }}" name="character_weapon3_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_weapon4_name" placeholder="" value="{{ old('character_weapon4_name') ?? $character->character_weapon4_name }}" name="character_weapon4_name">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_type" placeholder="" value="{{ old('character_weapon4_type') ?? $character->character_weapon4_type }}" name="character_weapon4_type">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_scope" placeholder="" value="{{ old('character_weapon4_scope') ?? $character->character_weapon4_scope }}" name="character_weapon4_scope">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_attack" placeholder="" value="{{ old('character_weapon4_attack') ?? $character->character_weapon4_attack }}" name="character_weapon4_attack">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_attack_b" placeholder="" value="{{ old('character_weapon4_attack_b') ?? $character->character_weapon4_attack_b }}" name="character_weapon4_attack_b">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_fumble" placeholder="" value="{{ old('character_weapon4_fumble') ?? $character->character_weapon4_fumble }}" name="character_weapon4_fumble">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_damage" placeholder="" value="{{ old('character_weapon4_damage') ?? $character->character_weapon4_damage }}" name="character_weapon4_damage">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_dices" placeholder="" value="{{ old('character_weapon4_dices') ?? $character->character_weapon4_dices }}" name="character_weapon4_dices">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_critic" placeholder="" value="{{ old('character_weapon4_critic') ?? $character->character_weapon4_critic }}" name="character_weapon4_critic">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_face" placeholder="" value="{{ old('character_weapon4_face') ?? $character->character_weapon4_face }}" name="character_weapon4_face">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_flank" placeholder="" value="{{ old('character_weapon4_flank') ?? $character->character_weapon4_flank }}" name="character_weapon4_flank">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_back" placeholder="" value="{{ old('character_weapon4_back') ?? $character->character_weapon4_back }}" name="character_weapon4_back">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon4_value" placeholder="" value="{{ old('character_weapon4_value') ?? $character->character_weapon4_value }}" name="character_weapon4_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_weapon5_name" placeholder="" value="{{ old('character_weapon5_name') ?? $character->character_weapon5_name }}" name="character_weapon5_name">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_type" placeholder="" value="{{ old('character_weapon5_type') ?? $character->character_weapon5_type }}" name="character_weapon5_type">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_scope" placeholder="" value="{{ old('character_weapon5_scope') ?? $character->character_weapon5_scope }}" name="character_weapon5_scope">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_attack" placeholder="" value="{{ old('character_weapon5_attack') ?? $character->character_weapon5_attack }}" name="character_weapon5_attack">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_attack_b" placeholder="" value="{{ old('character_weapon5_attack_b') ?? $character->character_weapon5_attack_b }}" name="character_weapon5_attack_b">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_fumble" placeholder="" value="{{ old('character_weapon5_fumble') ?? $character->character_weapon5_fumble }}" name="character_weapon5_fumble">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_damage" placeholder="" value="{{ old('character_weapon5_damage') ?? $character->character_weapon5_damage }}" name="character_weapon5_damage">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_dices" placeholder="" value="{{ old('character_weapon5_dices') ?? $character->character_weapon5_dices }}" name="character_weapon5_dices">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_critic" placeholder="" value="{{ old('character_weapon5_critic') ?? $character->character_weapon5_critic }}" name="character_weapon5_critic">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_face" placeholder="" value="{{ old('character_weapon5_face') ?? $character->character_weapon5_face }}" name="character_weapon5_face">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_flank" placeholder="" value="{{ old('character_weapon5_flank') ?? $character->character_weapon5_flank }}" name="character_weapon5_flank">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_back" placeholder="" value="{{ old('character_weapon5_back') ?? $character->character_weapon5_back }}" name="character_weapon5_back">
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <input type="text" class="form-control" id="character_weapon5_value" placeholder="" value="{{ old('character_weapon5_value') ?? $character->character_weapon5_value }}" name="character_weapon5_value">
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
                                                    <th scope="col">Encombrement</th>
                                                    <th scope="col">Magie</th>
                                                    <th scope="col">Valeur</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_armor1_name" placeholder="" value="{{ old('character_armor1_name') ?? $character->character_armor1_name }}" name="character_armor1_name">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_piercing" placeholder="" value="{{ old('character_armor1_piercing') ?? $character->character_armor1_piercing }}" name="character_armor1_piercin">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_edge" placeholder="" value="{{ old('character_armor1_edge') ?? $character->character_armor1_edge }}" name="character_armor1_edge">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_blunt" placeholder="" value="{{ old('character_armor1_blunt') ?? $character->character_armor1_blunt }}" name="character_armor1_blunt">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_fire" placeholder="" value="{{ old('character_armor1_fire') ?? $character->character_armor1_fire }}" name="character_armor1_fire">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_spell" placeholder="" value="{{ old('character_armor1_spell') ?? $character->character_armor1_spell }}" name="character_armor1_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_clutter" placeholder="" value="{{ old('character_armor1_clutter') ?? $character->character_armor1_clutter }}" name="character_armor1_clutter">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_magic" placeholder="" value="{{ old('character_armor1_magic') ?? $character->character_armor1_magic }}" name="character_armor1_magic">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor1_value" placeholder="" value="{{ old('character_armor1_value') ?? $character->character_armor1_value }}" name="character_armor1_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_armor2_name" placeholder="" value="{{ old('character_armor2_name') ?? $character->character_armor2_name }}" name="character_armor2_name">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_piercing" placeholder="" value="{{ old('character_armor2_piercing') ?? $character->character_armor2_piercing }}" name="character_armor2_piercing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_edge" placeholder="" value="{{ old('character_armor2_edge') ?? $character->character_armor2_edge }}" name="character_armor2_edge">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_blunt" placeholder="" value="{{ old('character_armor2_blunt') ?? $character->character_armor2_blunt }}" name="character_armor2_blunt">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_fire" placeholder="" value="{{ old('character_armor2_fire') ?? $character->character_armor2_fire }}" name="character_armor2_fire">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_spell" placeholder="" value="{{ old('character_armor2_spell') ?? $character->character_armor2_spell }}" name="character_armor2_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_clutter" placeholder="" value="{{ old('character_armor2_clutter') ?? $character->character_armor2_clutter }}" name="character_armor2_clutter">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_magic" placeholder="" value="{{ old('character_armor2_magic') ?? $character->character_armor2_magic }}" name="character_armor2_magic">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor2_value" placeholder="" value="{{ old('character_armor2_value') ?? $character->character_armor2_value }}" name="character_armor2_value">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 16%;" >
                                                        <input type="text" class="form-control" id="character_armor3_name" placeholder="" value="{{ old('character_armor3_name') ?? $character->character_armor3_name }}" name="character_armor3_name">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_piercing" placeholder="" value="{{ old('character_armor3_piercing') ?? $character->character_armor3_piercing }}" name="character_armor3_piercing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_edge" placeholder="" value="{{ old('character_armor3_edge') ?? $character->character_armor3_edge }}" name="character_armor3_sharp">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_blunt" placeholder="" value="{{ old('character_armor3_blunt') ?? $character->character_armor3_blunt }}" name="character_armor3_blunt">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_fire" placeholder="" value="{{ old('character_armor3_fire') ?? $character->character_armor3_fire }}" name="character_armor3_fire">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_spell" placeholder="" value="{{ old('character_armor3_spell') ?? $character->character_armor3_spell }}" name="character_armor3_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_clutter" placeholder="" value="{{ old('character_armor3_clutter') ?? $character->character_armor3_clutter }}" name="character_armor3_clutter">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_magic" placeholder="" value="{{ old('character_armor3_magic') ?? $character->character_armor3_magic }}" name="character_armor3_magic">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_armor3_value" placeholder="" value="{{ old('character_armor3_value') ?? $character->character_armor3_value }}" name="character_armor3_value">
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
                                                        <input type="text" class="form-control" id="character_shield_type" placeholder="" value="{{ old('character_shield_type') ?? $character->character_shield_type }}" name="character_shield_type">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Physique</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_physic" placeholder="" value="{{ old('character_shield_physic') ?? $character->character_shield_physic }}" name="character_shield_physic">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Champs d’action</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_field" placeholder="" value="{{ old('character_shield_field') ?? $character->character_shield_field }}" name="character_shield_field">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Face</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_face" placeholder="" value="{{ old('character_shield_face') ?? $character->character_shield_face }}" name="character_shield_face">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Flanc</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_flank" placeholder="" value="{{ old('character_shield_flank') ?? $character->character_shield_flank }}" name="character_shield_flank">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dos</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_back" placeholder="" value="{{ old('character_shield_back') ?? $character->character_shield_back }}" name="character_shield_back">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valeur</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_shield_value" placeholder="" value="{{ old('character_shield_value') ?? $character->character_shield_value }}" name="character_shield_value">
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
                                                        <input type="text" class="form-control" id="character_equipped_spellbook" placeholder="" value="{{ old('character_equipped_spellbook') ?? $character->character_equipped_spellbook }}" name="character_equipped_spellbook">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valeur</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_equipped_spellbook_value" placeholder="" value="{{ old('character_equipped_spellbook_value') ?? $character->character_equipped_spellbook_value }}" name="character_equipped_spellbook_value">
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
                                                        <input type="text" class="form-control" id="character_equipped_symbol" placeholder="" value="{{ old('character_equipped_symbol') ?? $character->character_equipped_symbol }}" name="character_equipped_symbol">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valeur</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_equipped_symbol_value" placeholder="" value="{{ old('character_equipped_symbol_value') ?? $character->character_equipped_symbol_value }}" name="character_equipped_symbol_value">
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
                                                        <input type="text" class="form-control" id="character_tma_alcool" placeholder="" value="{{ old('character_tma_alcool') ?? $character->character_tma_alcool }}" name="character_tma_alcool">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_alcool_b" placeholder="" value="{{ old('character_tma_alcool_b') ?? $character->character_tma_alcool_b }}" name="character_tma_alcool_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Artisanat</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_artsNcrafts" placeholder="" value="{{ old('character_tma_artsNcrafts') ?? $character->character_tma_artsNcrafts }}" name="character_tma_arts&crafts">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_artsNcrafts_b" placeholder="" value="{{ old('character_tma_artsNcrafts_b') ?? $character->character_tma_artsNcrafts_b }}" name="character_tma_arts&crafts_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Charpenterie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_carpentry" placeholder="" value="{{ old('character_tma_carpentry') ?? $character->character_tma_carpentry }}" name="character_tma_carpentry">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_carpentry_b" placeholder="" value="{{ old('character_tma_carpentry_b') ?? $character->character_tma_carpentry_b }}" name="character_tma_carpentry_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chasse et pêche</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_huntingNfishing" placeholder="" value="{{ old('character_tma_huntingNfishing') ?? $character->character_tma_huntingNfishing }}" name="character_tma_hunting&fishing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_huntingNfishing_b" placeholder="" value="{{ old('character_tma_huntingNfishing_b') ?? $character->character_tma_huntingNfishing_b }}" name="character_tma_hunting&fishing_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Conduite</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_drive" placeholder="" value="{{ old('character_tma_drive') ?? $character->character_tma_drive }}" name="character_tma_drive">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_drive_b" placeholder="" value="{{ old('character_tma_drive_b') ?? $character->character_tma_drive_b }}" name="character_tma_drive_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cordes</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_strings" placeholder="" value="{{ old('character_tma_strings') ?? $character->character_tma_strings }}" name="character_tma_strings">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_strings_b" placeholder="" value="{{ old('character_tma_strings_b') ?? $character->character_tma_strings_b }}" name="character_tma_strings_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Course</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_run" placeholder="" value="{{ old('character_tma_run') ?? $character->character_tma_run }}" name="character_tma_run">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_run_b" placeholder="" value="{{ old('character_tma_run_b') ?? $character->character_tma_run_b }}" name="character_tma_run_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Équilibre</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_balanced" placeholder="" value="{{ old('character_tma_balanced') ?? $character->character_tma_balanced }}" name="character_tma_balanced">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_balanced_b" placeholder="" value="{{ old('character_tma_balanced_b') ?? $character->character_tma_balanced_b }}" name="character_tma_balanced_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Équitation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_horseriding" placeholder="" value="{{ old('character_tma_horseriding') ?? $character->character_tma_horseriding }}" name="character_tma_horseriding">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_horseriding_b" placeholder="" value="{{ old('character_tma_horseriding_b') ?? $character->character_tma_horseriding_b }}" name="character_tma_horseriding_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Escalade</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_climbing" placeholder="" value="{{ old('character_tma_climbing') ?? $character->character_tma_climbing }}" name="character_tma_climbing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_climbing_b" placeholder="" value="{{ old('character_tma_climbing_b') ?? $character->character_tma_climbing_b }}" name="character_tma_climbing_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Lutte</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_fight" placeholder="" value="{{ old('character_tma_fight') ?? $character->character_tma_fight }}" name="character_tma_fight">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_fight_b" placeholder="" value="{{ old('character_tma_fight_b') ?? $character->character_tma_fight_b }}" name="character_tma_fight_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Métallurgie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_metallurgy" placeholder="" value="{{ old('character_tma_metallurgy') ?? $character->character_tma_metallurgy }}" name="character_tma_metallurgy">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_metallurgy_b" placeholder="" value="{{ old('character_tma_metallurgy_b') ?? $character->character_tma_metallurgy_b }}" name="character_tma_metallurgy_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Natation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_swimming" placeholder="" value="{{ old('character_tma_swimming') ?? $character->character_tma_swimming }}" name="character_tma_swimming">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_swimming_b" placeholder="" value="{{ old('character_tma_swimming_b') ?? $character->character_tma_swimming_b }}" name="character_tma_swimming_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Navigation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_navigation" placeholder="" value="{{ old('character_tma_navigation') ?? $character->character_tma_navigation }}" name="character_tma_navigation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_navigation_b" placeholder="" value="{{ old('character_tma_navigation_b') ?? $character->character_tma_navigation_b }}" name="character_tma_navigation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Torture</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_torture" placeholder="" value="{{ old('character_tma_torture') ?? $character->character_tma_torture }}" name="character_tma_torture">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_torture_b" placeholder="" value="{{ old('character_tma_torture_b') ?? $character->character_tma_torture_b }}" name="character_tma_torture_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dragonnerie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_dragonry" placeholder="" value="{{ old('character_tma_dragonry') ?? $character->character_tma_dragonry }}" name="character_tma_dragonry">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tma_dragonry_b" placeholder="" value="{{ old('character_tma_dragonry_b') ?? $character->character_tma_dragonry_b }}" name="character_tma_dragonry_b">
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
                                                        <input type="text" class="form-control" id="character_tha_acrobatics" placeholder="" value="{{ old('character_tha_acrobatics') ?? $character->character_tha_acrobatics }}" name="character_tha_acrobatics">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_acrobatics_b" placeholder="" value="{{ old('character_tha_acrobatics_b') ?? $character->character_tha_acrobatics_b }}" name="character_tha_acrobatics_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Camouflage nature</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_naturecamo" placeholder="" value="{{ old('character_tha_naturecamo') ?? $character->character_tha_naturecamo }}" name="character_tha_naturecamo">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_naturecamo_b" placeholder="" value="{{ old('character_tha_naturecamo_b') ?? $character->character_tha_naturecamo_b }}" name="character_tha_naturecamo_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Camouflage urbain</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_urbancamo" placeholder="" value="{{ old('character_tha_urbancamo') ?? $character->character_tha_urbancamo }}" name="character_tha_urbancamo">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_urbancamo_b" placeholder="" value="{{ old('character_tha_urbancamo_b') ?? $character->character_tha_urbancamo_b }}" name="character_tha_urbancamo_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Crochetage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_lockpicking" placeholder="" value="{{ old('character_tha_lockpicking') ?? $character->character_tha_lockpicking }}" name="character_tha_lockpicking">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_lockpicking_b" placeholder="" value="{{ old('character_tha_lockpicking_b') ?? $character->character_tha_lockpicking_b }}" name="character_tha_lockpicking_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Déguisement</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_disguise" placeholder="" value="{{ old('character_tha_disguise') ?? $character->character_tha_disguise }}" name="character_tha_disguise">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_disguise_b" placeholder="" value="{{ old('character_tha_disguise_b') ?? $character->character_tha_disguise_b }}" name="character_tha_disguise_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Démolition</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_demolition" placeholder="" value="{{ old('character_tha_demolition') ?? $character->character_tha_demolition }}" name="character_tha_demolition">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_demolition_b" placeholder="" value="{{ old('character_tha_demolition_b') ?? $character->character_tha_demolition_b }}" name="character_tha_demolition_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Discrétion nature</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discretnature" placeholder="" value="{{ old('character_tha_discretnature') ?? $character->character_tha_discretnature }}" name="character_tha_discretnature">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discretnature_b" placeholder="" value="{{ old('character_tha_discretnature_b') ?? $character->character_tha_discretnature_b }}" name="character_tha_discretnature_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Discrétion urbaine</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discreturban" placeholder="" value="{{ old('character_tha_discreturban') ?? $character->character_tha_discreturban }}" name="character_tha_discreturban">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_discreturban_b" placeholder="" value="{{ old('character_tha_discreturban_b') ?? $character->character_tha_discreturban_b }}" name="character_tha_discreturban_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dissimulation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_concealment" placeholder="" value="{{ old('character_tha_concealment') ?? $character->character_tha_concealment }}" name="character_tha_concealment">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_concealment_b" placeholder="" value="{{ old('character_tha_concealment_b') ?? $character->character_tha_concealment_b }}" name="character_tha_concealment_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Médecine</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_medecine" placeholder="" value="{{ old('character_tha_medecine') ?? $character->character_tha_medecine }}" name="character_tha_medecine">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_medecine_b" placeholder="" value="{{ old('character_tha_medecine_b') ?? $character->character_tha_medecine_b }}" name="character_tha_medecine_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pièges</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_trap" placeholder="" value="{{ old('character_tha_trap') ?? $character->character_tha_trap }}" name="character_tha_trap">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_trap_b" placeholder="" value="{{ old('character_tha_trap_b') ?? $character->character_tha_trap_b }}" name="character_tha_trap_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Précision</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_precision" placeholder="" value="{{ old('character_tha_precision') ?? $character->character_tha_precision }}" name="character_tha_precision">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_precision_b" placeholder="" value="{{ old('character_tha_precision_b') ?? $character->character_tha_precision_b }}" name="character_tha_precision_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Technologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_technology" placeholder="" value="{{ old('character_tha_technology') ?? $character->character_tha_technology }}" name="character_tha_technology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_technology_b" placeholder="" value="{{ old('character_tha_technology_b') ?? $character->character_tha_technology_b }}" name="character_tha_technology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Thanatologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_thanatology" placeholder="" value="{{ old('character_tha_thanatology') ?? $character->character_tha_thanatology }}" name="character_tha_thanatology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_thanatology_b" placeholder="" value="{{ old('character_tha_thanatology_b') ?? $character->character_tha_thanatology_b }}" name="character_tha_thanatology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Vol à la tire</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_pickpocketing" placeholder="" value="{{ old('character_tha_pickpocketing') ?? $character->character_tha_pickpocketing }}" name="character_tha_pickpocketing">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_pickpocketing_b" placeholder="" value="{{ old('character_tha_pickpocketing_b') ?? $character->character_tha_pickpocketing_b }}" name="character_tha_pickpocketing_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tatouage tribal</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_tribaltattoo" placeholder="" value="{{ old('character_tha_tribaltattoo') ?? $character->character_tha_tribaltattoo }}" name="character_tha_tribaltattoo">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tha_tribaltattoo_b" placeholder="" value="{{ old('character_tha_tribaltattoo_b') ?? $character->character_tha_tribaltattoo_b }}" name="character_tha_tribaltattoo_b">
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
                                                        <input type="text" class="form-control" id="character_tse_analysis" placeholder="" value="{{ old('character_tse_analysis') ?? $character->character_tse_analysis }}" name="character_tse_analysis">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_analysis_b" placeholder="" value="{{ old('character_tse_analysis_b') ?? $character->character_tse_analysis_b }}" name="character_tse_analysis_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Concentration</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_concentration" placeholder="" value="{{ old('character_tse_concentration') ?? $character->character_tse_concentration }}" name="character_tse_concentration">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_concentration_b" placeholder="" value="{{ old('character_tse_concentration_b') ?? $character->character_tse_concentration_b }}" name="character_tse_concentration_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cuisine</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_cook" placeholder="" value="{{ old('character_tse_cook') ?? $character->character_tse_cook }}" name="character_tse_cook">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_cook_b" placeholder="" value="{{ old('character_tse_cook_b') ?? $character->character_tse_cook_b }}" name="character_tse_cook_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Détection</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_detection" placeholder="" value="{{ old('character_tse_detection') ?? $character->character_tse_detection }}" name="character_tse_detection">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_detection_b" placeholder="" value="{{ old('character_tse_detection_b') ?? $character->character_tse_detection_b }}" name="character_tse_detection_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dressage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_dressage" placeholder="" value="{{ old('character_tse_dressage') ?? $character->character_tse_dressage }}" name="character_tse_dressage">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_dressage_b" placeholder="" value="{{ old('character_tse_dressage_b') ?? $character->character_tse_dressage_b }}" name="character_tse_dressage_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Écoute</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_listen" placeholder="" value="{{ old('character_tse_listen') ?? $character->character_tse_listen }}" name="character_tse_listen">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_listen_b" placeholder="" value="{{ old('character_tse_listen_b') ?? $character->character_tse_listen_b }}" name="character_tse_listen_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Évaluation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_evaluation" placeholder="" value="{{ old('character_tse_evaluation') ?? $character->character_tse_evaluation }}" name="character_tse_evaluation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_evaluation_b" placeholder="" value="{{ old('character_tse_evaluation_b') ?? $character->character_tse_evaluation_b }}" name="character_tse_evaluation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Lecture labiale</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_lipreading" placeholder="" value="{{ old('character_tse_lipreading') ?? $character->character_tse_lipreading }}" name="character_tse_lipreading">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_lipreading_b" placeholder="" value="{{ old('character_tse_lipreading_b') ?? $character->character_tse_lipreading_b }}" name="character_tse_lipreading_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Météorologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_meteorology" placeholder="" value="{{ old('character_tse_meteorology') ?? $character->character_tse_meteorology }}" name="character_tse_meteorology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_meteorology_b" placeholder="" value="{{ old('character_tse_meteorology_b') ?? $character->character_tse_meteorology_b }}" name="character_tse_meteorology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Observation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_observation" placeholder="" value="{{ old('character_tse_observation') ?? $character->character_tse_observation }}" name="character_tse_observation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_observation_b" placeholder="" value="{{ old('character_tse_observation_b') ?? $character->character_tse_observation_b }}" name="character_tse_observation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Odorat</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_smell" placeholder="" value="{{ old('character_tse_smell') ?? $character->character_tse_smell }}" name="character_tse_smell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_smell_b" placeholder="" value="{{ old('character_tse_smell_b') ?? $character->character_tse_smell_b }}" name="character_tse_smell_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Orientation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_orientation" placeholder="" value="{{ old('character_tse_orientation') ?? $character->character_tse_orientation }}" name="character_tse_orientation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_orientation_b" placeholder="" value="{{ old('character_tse_orientation_b') ?? $character->character_tse_orientation_b }}" name="character_tse_orientation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Perception</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_perception" placeholder="" value="{{ old('character_tse_perception') ?? $character->character_tse_perception }}" name="character_tse_perception">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_perception_b" placeholder="" value="{{ old('character_tse_perception_b') ?? $character->character_tse_perception_b }}" name="character_tse_perception_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pistage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_tracking" placeholder="" value="{{ old('character_tse_tracking') ?? $character->character_tse_tracking }}" name="character_tse_tracking">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_tracking_b" placeholder="" value="{{ old('character_tse_tracking_b') ?? $character->character_tse_tracking_b }}" name="character_tse_tracking_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Recherche</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_research" placeholder="" value="{{ old('character_tse_research') ?? $character->character_tse_research }}" name="character_tse_research">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_research_b" placeholder="" value="{{ old('character_tse_research_b') ?? $character->character_tse_research_b }}" name="character_tse_research_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">P.E.S</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_pes" placeholder="" value="{{ old('character_tse_pes') ?? $character->character_tse_pes }}" name="character_tse_pes">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tse_pes_b" placeholder="" value="{{ old('character_tse_pes_b') ?? $character->character_tse_pes_b }}" name="character_tse_pes_b">
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
                                                        <input type="text" class="form-control" id="character_tso_spiel" placeholder="" value="{{ old('character_tso_spiel') ?? $character->character_tso_spiel }}" name="character_tso_spiel">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_spiel_b" placeholder="" value="{{ old('character_tso_spiel_b') ?? $character->character_tso_spiel_b }}" name="character_tso_spiel_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Corruption</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_corruption" placeholder="" value="{{ old('character_tso_corruption') ?? $character->character_tso_corruption }}" name="character_tso_corruption">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_corruption_b" placeholder="" value="{{ old('character_tso_corruption_b') ?? $character->character_tso_corruption_b }}" name="character_tso_corruption_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Éloquence</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_eloquence" placeholder="" value="{{ old('character_tso_eloquence') ?? $character->character_tso_eloquence }}" name="character_tso_eloquence">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_eloquence_b" placeholder="" value="{{ old('character_tso_eloquence_b') ?? $character->character_tso_eloquence_b }}" name="character_tso_eloquence_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Empathie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_empathy" placeholder="" value="{{ old('character_tso_empathy') ?? $character->character_tso_empathy }}" name="character_tso_empathy">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_empathy_b" placeholder="" value="{{ old('character_tso_empathy_b') ?? $character->character_tso_empathy_b }}" name="character_tso_empathy_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Faux papiers</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_counterfeiting" placeholder="" value="{{ old('character_tso_counterfeiting') ?? $character->character_tso_counterfeiting }}" name="character_tso_counterfeiting">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_counterfeiting_b" placeholder="" value="{{ old('character_tso_counterfeiting_b') ?? $character->character_tso_counterfeiting_b }}" name="character_tso_counterfeiting_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hypnoptisme</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_hypnotism" placeholder="" value="{{ old('character_tso_hypnotism') ?? $character->character_tso_hypnotism }}" name="character_tso_hypnotism">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_hypnotism_b" placeholder="" value="{{ old('character_tso_hypnotism_b') ?? $character->character_tso_hypnotism_b }}" name="character_tso_hypnotism_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Intimidation</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_intimidation" placeholder="" value="{{ old('character_tso_intimidation') ?? $character->character_tso_intimidation }}" name="character_tso_intimidation">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_intimidation_b" placeholder="" value="{{ old('character_tso_intimidation_b') ?? $character->character_tso_intimidation_b }}" name="character_tso_intimidation_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jargon secret</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_secretjargon" placeholder="" value="{{ old('character_tso_secretjargon') ?? $character->character_tso_secretjargon }}" name="character_tso_secretjargon">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_secretjargon_b" placeholder="" value="{{ old('character_tso_secretjargon_b') ?? $character->character_tso_secretjargon_b }}" name="character_tso_secretjargon_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jeu</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_game" placeholder="" value="{{ old('character_tso_game') ?? $character->character_tso_game }}" name="character_tso_game">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_game_b" placeholder="" value="{{ old('character_tso_game_b') ?? $character->character_tso_game_b }}" name="character_tso_game_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Leadership</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_leadership" placeholder="" value="{{ old('character_tso_leadership') ?? $character->character_tso_leadership }}" name="character_tso_leadership">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_leadership_b" placeholder="" value="{{ old('character_tso_leadership_b') ?? $character->character_tso_leadership_b }}" name="character_tso_leadership_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Marchandage</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_bargaining" placeholder="" value="{{ old('character_tso_bargaining') ?? $character->character_tso_bargaining }}" name="character_tso_bargaining">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_bargaining_b" placeholder="" value="{{ old('character_tso_bargaining_b') ?? $character->character_tso_bargaining_b }}" name="character_tso_bargaining_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Performance</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_performance" placeholder="" value="{{ old('character_tso_performance') ?? $character->character_tso_performance }}" name="character_tso_performance">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_performance_b" placeholder="" value="{{ old('character_tso_performance_b') ?? $character->character_tso_performance_b }}" name="character_tso_performance_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rumeurs</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_rumors" placeholder="" value="{{ old('character_tso_rumors') ?? $character->character_tso_rumors }}" name="character_tso_rumors">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_rumors_b" placeholder="" value="{{ old('character_tso_rumors_b') ?? $character->character_tso_rumors_b }}" name="character_tso_rumors_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Séduction</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_seduction" placeholder="" value="{{ old('character_tso_seduction') ?? $character->character_tso_seduction }}" name="character_tso_seduction">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_seduction_b" placeholder="" value="{{ old('character_tso_seduction_b') ?? $character->character_tso_seduction_b }}" name="character_tso_seduction_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ventriloquie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ventriloquism" placeholder="" value="{{ old('character_tso_ventriloquism') ?? $character->character_tso_ventriloquism }}" name="character_tso_ventriloquism">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ventriloquism_b" placeholder="" value="{{ old('character_tso_ventriloquism_b') ?? $character->character_tso_ventriloquism_b }}" name="character_tso_ventriloquism_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ignisalta</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ignisalta" placeholder="" value="{{ old('character_tso_ignisalta') ?? $character->character_tso_ignisalta }}" name="character_tso_ignisalta">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tso_ignisalta_b" placeholder="" value="{{ old('character_tso_ignisalta_b') ?? $character->character_tso_ignisalta_b }}" name="character_tso_ignisalta_b">
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
                                                        <input type="text" class="form-control" id="character_tco_ancientcult" placeholder="" value="{{ old('character_tco_ancientcult') ?? $character->character_tco_ancientcult }}" name="character_tco_ancientcult">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ancientcult_b" placeholder="" value="{{ old('character_tco_ancientcult_b') ?? $character->character_tco_ancientcult_b }}" name="character_tco_ancientcult_b">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Astronomie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_astronomy" placeholder="" value="{{ old('character_tco_astronomy') ?? $character->character_tco_astronomy }}" name="character_tco_astronomy">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_astronomy_b" placeholder="" value="{{ old('character_tco_astronomy_b') ?? $character->character_tco_astronomy_b }}" name="character_tco_astronomy_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bibliothèques</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_library" placeholder="" value="{{ old('character_tco_library') ?? $character->character_tco_library }}" name="character_tco_library">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_library_b" placeholder="" value="{{ old('character_tco_library_b') ?? $character->character_tco_library_b }}" name="character_tco_library_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Créatures</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_creature" placeholder="" value="{{ old('character_tco_creature') ?? $character->character_tco_creature }}" name="character_tco_creature">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_creature_b" placeholder="" value="{{ old('character_tco_creature_b') ?? $character->character_tco_creature_b }}" name="character_tco_creature_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Géographie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_geography" placeholder="" value="{{ old('character_tco_geography') ?? $character->character_tco_geography }}" name="character_tco_geography">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_geography_b" placeholder="" value="{{ old('character_tco_geography_b') ?? $character->character_tco_geography_b }}" name="character_tco_geography_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Histoire</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_history" placeholder="" value="{{ old('character_tco_history') ?? $character->character_tco_history }}" name="character_tco_history">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_history_b" placeholder="" value="{{ old('character_tco_history_b') ?? $character->character_tco_history_b }}" name="character_tco_history_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Identification</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_identification" placeholder="" value="{{ old('character_tco_identification') ?? $character->character_tco_identification }}" name="character_tco_identification">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_identification_b" placeholder="" value="{{ old('character_tco_identification_b') ?? $character->character_tco_identification_b }}" name="character_tco_identification_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Maisons</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_houses" placeholder="" value="{{ old('character_tco_houses') ?? $character->character_tco_houses }}" name="character_tco_houses">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_houses_b" placeholder="" value="{{ old('character_tco_houses_b') ?? $character->character_tco_houses_b }}" name="character_tco_houses_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nature</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_nature" placeholder="" value="{{ old('character_tco_nature') ?? $character->character_tco_nature }}" name="character_tco_nature">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_nature_b" placeholder="" value="{{ old('character_tco_nature_b') ?? $character->character_tco_nature_b }}" name="character_tco_nature_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Occultisme</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_occultism" placeholder="" value="{{ old('character_tco_occultism') ?? $character->character_tco_occultism }}" name="character_tco_occultism">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_occultism_b" placeholder="" value="{{ old('character_tco_occultism_b') ?? $character->character_tco_occultism_b }}" name="character_tco_occultism_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Politique</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_politics" placeholder="" value="{{ old('character_tco_politics') ?? $character->character_tco_politics }}" name="character_tco_politics">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_politics_b" placeholder="" value="{{ old('character_tco_politics_b') ?? $character->character_tco_politics_b }}" name="character_tco_politics_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rituel du trépas</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofdeath" placeholder="" value="{{ old('character_tco_ritualofdeath') ?? $character->character_tco_ritualofdeath }}" name="character_tco_ritualofdeath">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofdeath_b" placeholder="" value="{{ old('character_tco_ritualofdeath_b') ?? $character->character_tco_ritualofdeath_b }}" name="character_tco_ritualofdeath_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sortilèges</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_spell" placeholder="" value="{{ old('character_tco_spell') ?? $character->character_tco_spell }}" name="character_tco_spell">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_spell_b" placeholder="" value="{{ old('character_tco_spell_b') ?? $character->character_tco_spell_b }}" name="character_tco_spell_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tactiques</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_tactical" placeholder="" value="{{ old('character_tco_tactical') ?? $character->character_tco_tactical }}" name="character_tco_tactical">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_tactical_b" placeholder="" value="{{ old('character_tco_tactical_b') ?? $character->character_tco_tactical_b }}" name="character_tco_tactical_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Théologie</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_theology" placeholder="" value="{{ old('character_tco_theology') ?? $character->character_tco_theology }}" name="character_tco_theology">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_theology_b" placeholder="" value="{{ old('character_tco_theology_b') ?? $character->character_tco_theology_b }}" name="character_tco_theology_b">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rituel des étoiles</th>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofstars" placeholder="" value="{{ old('character_tco_ritualofstars') ?? $character->character_tco_ritualofstars }}" name="character_tco_ritualofstars">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="character_tco_ritualofstars_b" placeholder="" value="{{ old('character_tco_ritualofstars_b') ?? $character->character_tco_ritualofstars_b }}" name="character_tco_ritualofstars_b">
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
                                            <input type="text" class="form-control" id="character_influence_meraltor" placeholder="" value="{{ old('character_influence_meraltor') ?? $character->character_influence_meraltor }}" name="character_influence_meraltor">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_aravas">{{ __('Aravas') }}</label>
                                            <input type="text" class="form-control" id="character_influence_aravas" placeholder="" value="{{ old('character_influence_aravas') ?? $character->character_influence_aravas }}" name="character_influence_aravas">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_clergy">{{ __('Clergé') }}</label>
                                            <input type="text" class="form-control" id="character_influence_clergy" placeholder="" value="{{ old('character_influence_clergy') ?? $character->character_influence_clergy }}" name="character_influence_clergy">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_berrouve">{{ __('Berrouve') }}</label>
                                            <input type="text" class="form-control" id="character_influence_berrouve" placeholder="" value="{{ old('character_influence_berrouve') ?? $character->character_influence_berrouve }}" name="character_influence_berrouve">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_harlog">{{ __('Harlog') }}</label>
                                            <input type="text" class="form-control" id="character_influence_harlog" placeholder="" value="{{ old('character_influence_harlog') ?? $character->character_influence_harlog }}" name="character_influence_harlog">
                                        </div>
                                    </div>
                                </div>


                                <div class="row g-5">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_brotherhood">{{ __('Confrérie') }}</label>
                                            <input type="text" class="form-control" id="character_influence_brotherhood" placeholder="" value="{{ old('character_influence_brotherhood') ?? $character->character_influence_brotherhood }}" name="character_influence_brotherhood">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_duloir">{{ __('Duloir') }}</label>
                                            <input type="text" class="form-control" id="character_influence_duloir" placeholder="" value="{{ old('character_influence_duloir') ?? $character->character_influence_duloir }}" name="character_influence_duloir">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_tiar">{{ __('Tiar') }}</label>
                                            <input type="text" class="form-control" id="character_influence_tiar" placeholder="" value="{{ old('character_influence_tiar') ?? $character->character_influence_tiar }}" name="character_influence_tiar">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_wolfcircle">{{ __('Cercle des Loups') }}</label>
                                            <input type="text" class="form-control" id="character_influence_wolfcircle" placeholder="" value="{{ old('character_influence_wolfcircle') ?? $character->character_influence_wolfcircle }}" name="character_influence_wolfcircle">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_arcadis">{{ __('Arcadis') }}</label>
                                            <input type="text" class="form-control" id="character_influence_arcadis" placeholder="" value="{{ old('character_influence_arcadis') ?? $character->character_influence_arcadis }}" name="character_influence_arcadis">
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-5">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_komeidai">{{ __('Komeidai') }}</label>
                                            <input type="text" class="form-control" id="character_influence_komeidai" placeholder="" value="{{ old('character_influence_komeidai') ?? $character->character_influence_komeidai }}" name="character_influence_komeidai">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_savie">{{ __('Savie') }}</label>
                                            <input type="text" class="form-control" id="character_influence_savie" placeholder="" value="{{ old('character_influence_savie') ?? $character->character_influence_savie }}" name="character_influence_savie">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_mortuterra">{{ __('Mortuterra') }}</label>
                                            <input type="text" class="form-control" id="character_influence_mortuterra" placeholder="" value="{{ old('character_influence_mortuterra') ?? $character->character_influence_mortuterra }}" name="character_influence_mortuterra">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_collectorsguild">{{ __('Guilde des collectionneurs') }}</label>
                                            <input type="text" class="form-control" id="character_influence_collectorsguild" placeholder="" value="{{ old('character_influence_collectorsguild') ?? $character->character_influence_collectorsguild }}" name="character_influence_collectorsguild">
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <label for="character_influence_total">{{ __('Total') }}</label>
                                            <input type="text" class="form-control" id="character_influence_total" placeholder="" value="{{ old('character_influence_total') ?? $character->character_influence_total }}" name="character_influence_total">
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="character_background">{{ __('Histoire du personnage') }}</label>
                                    <textarea class="form-control" placeholder="Écrivez l'histoire ici" id="summernote" style="height: 100px"  name="character_background">{{ old('character_background') ?? $character->character_background }}</textarea>
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
                                                    <input type="text" class="form-control" id="character_injury1_name" placeholder="" value="{{ old('character_injury1_name') ?? $character->character_injury1_name }}" name="character_injury1_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury1_descr" placeholder="" value="{{ old('character_injury1_descr') ?? $character->character_injury1_descr }}" name="character_injury1_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury1_year" placeholder="" value="{{ old('character_injury1_year') ?? $character->character_injury1_year }}" name="character_injury1_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury1_month" aria-label="Floating label select example" name="character_injury1_month">
                                                        <option selected>{{ old('character_injury1_month') ?? $character->character_injury1_month }}</option>
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
                                                        <option selected>{{ old('character_injury1_day') ?? $character->character_injury1_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_injury2_name" placeholder="" value="{{ old('character_injury2_name') ?? $character->character_injury2_name }}" name="character_injury2_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury2_descr" placeholder="" value="{{ old('character_injury2_descr') ?? $character->character_injury2_descr }}" name="character_injury2_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury2_year" placeholder="" value="{{ old('character_injury2_year') ?? $character->character_injury2_year }}" name="character_injury2_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury2_month" aria-label="Floating label select example" name="character_injury2_month">
                                                        <option selected>{{ old('character_injury2_month') ?? $character->character_injury2_month }}</option>
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
                                                        <option selected>{{ old('character_injury2_day') ?? $character->character_injury2_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_injury3_name" placeholder="" value="{{ old('character_injury3_name') ?? $character->character_injury3_name }}" name="character_injury3_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury3_descr" placeholder="" value="{{ old('character_injury3_descr') ?? $character->character_injury3_descr }}" name="character_injury3_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury3_year" placeholder="" value="{{ old('character_injury3_year') ?? $character->character_injury3_year }}" name="character_injury3_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury3_month" aria-label="Floating label select example" name="character_injury3_month">
                                                        <option selected>{{ old('character_injury3_month') ?? $character->character_injury3_month }}</option>
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
                                                        <option selected>{{ old('character_injury3_day') ?? $character->character_injury3_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_injury4_name" placeholder="" value="{{ old('character_injury4_name') ?? $character->character_injury4_name }}" name="character_injury4_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury4_descr" placeholder="" value="{{ old('character_injury4_descr') ?? $character->character_injury4_descr }}" name="character_injury4_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury4_year" placeholder="" value="{{ old('character_injury4_year') ?? $character->character_injury4_year }}" name="character_injury4_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury4_month" aria-label="Floating label select example" name="character_injury4_month">
                                                        <option selected>{{ old('character_injury4_month') ?? $character->character_injury4_month }}</option>
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
                                                        <option selected>{{ old('character_injury4_day') ?? $character->character_injury4_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_injury5_name" placeholder="" value="{{ old('character_injury5_name') ?? $character->character_injury5_name }}" name="character_injury5_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury5_descr" placeholder="" value="{{ old('character_injury5_descr') ?? $character->character_injury5_descr }}" name="character_injury5_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury5_year" placeholder="" value="{{ old('character_injury5_year') ?? $character->character_injury5_year }}" name="character_injury5_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury5_month" aria-label="Floating label select example" name="character_injury5_month">
                                                        <option selected>{{ old('character_injury5_month') ?? $character->character_injury5_month }}</option>
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
                                                        <option selected>{{ old('character_injury5_day') ?? $character->character_injury5_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_injury6_name" placeholder="" value="{{ old('character_injury6_name') ?? $character->character_injury6_name }}" name="character_injury6_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury6_descr" placeholder="" value="{{ old('character_injury6_descr') ?? $character->character_injury6_descr }}" name="character_injury6_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury6_year" placeholder="" value="{{ old('character_injury6_year') ?? $character->character_injury6_year }}" name="character_injury6_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury6_month" aria-label="Floating label select example" name="character_injury6_month">
                                                        <option selected>{{ old('character_injury6_month') ?? $character->character_injury6_month }}</option>
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
                                                        <option selected>{{ old('character_injury6_day') ?? $character->character_injury6_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_injury7_name7" placeholder="" value="{{ old('character_injury7_name7') ?? $character->character_injury7_name7 }}" name="character_injury7_name7">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury7_descr" placeholder="" value="{{ old('character_injury7_descr') ?? $character->character_injury7_descr }}" name="character_injury7_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury7_year" placeholder="" value="{{ old('character_injury7_year') ?? $character->character_injury7_year }}" name="character_injury7_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury7_month" aria-label="Floating label select example" name="character_injury7_month">
                                                        <option selected>{{ old('character_injury7_month') ?? $character->character_injury7_month }}</option>
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
                                                        <option selected>{{ old('character_injury7_day') ?? $character->character_injury7_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_injury8_name" placeholder="" value="{{ old('character_injury8_name') ?? $character->character_injury8_name }}" name="character_injury8_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury8_descr" placeholder="" value="{{ old('character_injury8_descr') ?? $character->character_injury8_descr }}" name="character_injury8_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_injury8_year" placeholder="" value="{{ old('character_injury8_year') ?? $character->character_injury8_year }}" name="character_injury8_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_injury8_month" aria-label="Floating label select example" name="character_injury8_month">
                                                        <option selected>{{ old('character_injury8_month') ?? $character->character_injury8_month }}</option>
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
                                                        <option selected>{{ old('character_injury8_day') ?? $character->character_injury8_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar1_name" placeholder="" value="{{ old('character_scar1_name') ?? $character->character_scar1_name }}" name="character_scar1_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar1_descr" placeholder="" value="{{ old('character_scar1_descr') ?? $character->character_scar1_descr }}" name="character_scar1_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar1_year" placeholder="" value="{{ old('character_scar1_year') ?? $character->character_scar1_year }}" name="character_scar1_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar1_month" aria-label="Floating label select example" name="character_scar1_month">
                                                        <option selected>{{ old('character_scar1_month') ?? $character->character_scar1_month }}</option>
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
                                                        <option selected>{{ old('character_scar_day1') ?? $character->character_scar_day1 }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar2_name" placeholder="" value="{{ old('character_scar2_name') ?? $character->character_scar2_name }}" name="character_scar2_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar2_descr" placeholder="" value="{{ old('character_scar2_descr') ?? $character->character_scar2_descr }}" name="character_scar2_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar2_year" placeholder="" value="{{ old('character_scar2_year') ?? $character->character_scar2_year }}" name="character_scar2_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar2_month" aria-label="Floating label select example" name="character_scar2_month">
                                                        <option selected>{{ old('character_scar2_month') ?? $character->character_scar2_month }}</option>
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
                                                        <option selected>{{ old('character_scar2_day') ?? $character->character_scar2_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar3_name" placeholder="" value="{{ old('character_scar3_name') ?? $character->character_scar3_name }}" name="character_scar3_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar3_descr" placeholder="" value="{{ old('character_scar3_descr') ?? $character->character_scar3_descr }}" name="character_scar3_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar3_year" placeholder="" value="{{ old('character_scar3_year') ?? $character->character_scar3_year }}" name="character_scar3_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar3_month" aria-label="Floating label select example" name="character_scar3_month">
                                                        <option selected>{{ old('character_scar3_month') ?? $character->character_scar3_month }}</option>
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
                                                        <option selected>{{ old('character_scar_day3') ?? $character->character_scar_day3 }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar4_name" placeholder="" value="{{ old('character_scar4_name') ?? $character->character_scar4_name }}" name="character_scar4_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar4_descr" placeholder="" value="{{ old('character_scar4_descr') ?? $character->character_scar4_descr }}" name="character_scar4_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar4_year" placeholder="" value="{{ old('character_scar4_year') ?? $character->character_scar4_year }}" name="character_scar4_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar4_month" aria-label="Floating label select example" name="character_scar4_month">
                                                        <option selected>{{ old('character_scar4_month') ?? $character->character_scar4_month }}</option>
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
                                                        <option selected>{{ old('character_scar4_day') ?? $character->character_scar4_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar5_name" placeholder="" value="{{ old('character_scar5_name') ?? $character->character_scar5_name }}" name="character_scar5_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar5_descr" placeholder="" value="{{ old('character_scar5_descr') ?? $character->character_scar5_descr }}" name="character_scar5_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar5_year" placeholder="" value="{{ old('character_scar5_year') ?? $character->character_scar5_year }}" name="character_scar5_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar5_month" aria-label="Floating label select example" name="character_scar5_month">
                                                        <option selected>{{ old('character_scar5_month') ?? $character->character_scar5_month }}</option>
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
                                                        <option selected>{{ old('character_scar5_day') ?? $character->character_scar5_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar6_name" placeholder="" value="{{ old('character_scar6_name') ?? $character->character_scar6_name }}" name="character_scar6_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar6_descr" placeholder="" value="{{ old('character_scar6_descr') ?? $character->character_scar6_descr }}" name="character_scar6_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar6_year" placeholder="" value="{{ old('character_scar6_year') ?? $character->character_scar6_year }}" name="character_scar6_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar6_month" aria-label="Floating label select example" name="character_scar6_month">
                                                        <option selected>{{ old('character_scar6_month') ?? $character->character_scar6_month }}</option>
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
                                                        <option selected>{{ old('character_scar6_day') ?? $character->character_scar6_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar7_name" placeholder="" value="{{ old('character_scar7_name') ?? $character->character_scar7_name }}" name="character_scar7_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar7_descr" placeholder="" value="{{ old('character_scar7_descr') ?? $character->character_scar7_descr }}" name="character_scar7_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar7_year" placeholder="" value="{{ old('character_scar7_year') ?? $character->character_scar7_year }}" name="character_scar7_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar7_month" aria-label="Floating label select example" name="character_scar7_month">
                                                        <option selected>{{ old('character_scar7_month') ?? $character->character_scar7_month }}</option>
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
                                                        <option selected>{{ old('character_scar7_day') ?? $character->character_scar7_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_scar8_name" placeholder="" value="{{ old('character_scar8_name') ?? $character->character_scar8_name }}" name="character_scar8_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar8_descr" placeholder="" value="{{ old('character_scar8_descr') ?? $character->character_scar8_descr }}" name="character_scar8_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_scar8_year" placeholder="" value="{{ old('character_scar8_year') ?? $character->character_scar8_year }}" name="character_scar8_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_scar8_month" aria-label="Floating label select example" name="character_scar8_month">
                                                        <option selected>{{ old('character_scar8_month') ?? $character->character_scar8_month }}</option>
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
                                                        <option selected>{{ old('character_scar_day8') ?? $character->character_scar_day8 }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco1_name" placeholder="" value="{{ old('character_deco1_name') ?? $character->character_deco1_name }}" name="character_deco1_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco1_descr" placeholder="" value="{{ old('character_deco1_descr') ?? $character->character_deco1_descr }}" name="character_deco1_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco1_year" placeholder="" value="{{ old('character_deco1_year') ?? $character->character_deco1_year }}" name="character_deco1_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco1_month" aria-label="Floating label select example" name="character_deco1_month">
                                                        <option selected>{{ old('character_deco1_month') ?? $character->character_deco1_month }}</option>
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
                                                        <option selected>{{ old('character_deco1_day') ?? $character->character_deco1_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco2_name" placeholder="" value="{{ old('character_deco2_name') ?? $character->character_deco2_name }}" name="character_deco2_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco2_descr" placeholder="" value="{{ old('character_deco2_descr') ?? $character->character_deco2_descr }}" name="character_deco2_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco2_year" placeholder="" value="{{ old('character_deco2_year') ?? $character->character_deco2_year }}" name="character_deco2_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco2_month" aria-label="Floating label select example" name="character_deco2_month">
                                                        <option selected>{{ old('character_deco2_month') ?? $character->character_deco2_month }}</option>
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
                                                        <option selected>{{ old('character_deco2_day') ?? $character->character_deco2_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco3_name" placeholder="" value="{{ old('character_deco3_name') ?? $character->character_deco3_name }}" name="character_deco3_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco3_descr" placeholder="" value="{{ old('character_deco3_descr') ?? $character->character_deco3_descr }}" name="character_deco3_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco3_year" placeholder="" value="{{ old('character_deco3_year') ?? $character->character_deco3_year }}" name="character_deco3_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco3_month" aria-label="Floating label select example" name="character_deco3_month">
                                                        <option selected>{{ old('character_deco3_month') ?? $character->character_deco3_month }}</option>
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
                                                        <option selected>{{ old('character_deco3_day') ?? $character->character_deco3_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco4_name" placeholder="" value="{{ old('character_deco4_name') ?? $character->character_deco4_name }}" name="character_deco4_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco4_descr" placeholder="" value="{{ old('character_deco4_descr') ?? $character->character_deco4_descr }}" name="character_deco4_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco4_year" placeholder="" value="{{ old('character_deco4_year') ?? $character->character_deco4_year }}" name="character_deco4_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco4_month" aria-label="Floating label select example" name="character_deco4_month">
                                                        <option selected>{{ old('character_deco4_month') ?? $character->character_deco4_month }}</option>
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
                                                        <option selected>{{ old('character_deco4_day') ?? $character->character_deco4_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco5_name" placeholder="" value="{{ old('character_deco5_name') ?? $character->character_deco5_name }}" name="character_deco5_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco5_descr" placeholder="" value="{{ old('character_deco5_descr') ?? $character->character_deco5_descr }}" name="character_deco5_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco5_year" placeholder="" value="{{ old('character_deco5_year') ?? $character->character_deco5_year }}" name="character_deco5_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco5_month" aria-label="Floating label select example" name="character_deco5_month">
                                                        <option selected>{{ old('character_deco5_month') ?? $character->character_deco5_month }}</option>
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
                                                        <option selected>{{ old('character_deco5_day') ?? $character->character_deco5_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco6_name" placeholder="" value="{{ old('character_deco6_name') ?? $character->character_deco6_name }}" name="character_deco6_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco6_descr" placeholder="" value="{{ old('character_deco6_descr') ?? $character->character_deco6_descr }}" name="character_deco6_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco6_year" placeholder="" value="{{ old('character_deco6_year') ?? $character->character_deco6_year }}" name="character_deco6_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco6_month" aria-label="Floating label select example" name="character_deco6_month">
                                                        <option selected>{{ old('character_deco6_month') ?? $character->character_deco6_month }}</option>
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
                                                        <option selected>{{ old('character_deco6_day') ?? $character->character_deco6_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco7_name" placeholder="" value="{{ old('character_deco7_name') ?? $character->character_deco7_name }}" name="character_deco7_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco7_descr" placeholder="" value="{{ old('character_deco7_descr') ?? $character->character_deco7_descr }}" name="character_deco7_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco7_year" placeholder="" value="{{ old('character_deco7_year') ?? $character->character_deco7_year }}" name="character_deco7_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco7_month" aria-label="Floating label select example" name="character_deco7_month">
                                                        <option selected>{{ old('character_deco7_month') ?? $character->character_deco7_month }}</option>
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
                                                        <option selected>{{ old('character_deco7_day') ?? $character->character_deco7_day }}</option>
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
                                                    <input type="text" class="form-control" id="character_deco8_name" placeholder="" value="{{ old('character_deco8_name') ?? $character->character_deco8_name }}" name="character_deco8_name">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="character_deco8_descr" placeholder="" value="{{ old('character_deco8_descr') ?? $character->character_deco8_descr }}" name="character_deco8_descr">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="deco8_year" placeholder="" value="{{ old('deco8_year') ?? $character->deco8_year }}" name="deco8_year">
                                                </td>
                                                <td>
                                                    <select class="form-select" id="character_deco8_month" aria-label="Floating label select example" name="character_deco8_month">
                                                        <option selected>{{ old('character_deco8_month') ?? $character->character_deco8_month }}</option>
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
                                                        <option selected>{{ old('character_deco8_day') ?? $character->character_deco8_day }}</option>
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

                                <form action="{{ route('character.user.update', $character->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('character.user.destroy', $character->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-sign-in"></i>Supprimer</button>
                                </form>
                            </div>
                    </form>



                </div>

            </div>

        </div>
    </div>

@endsection
