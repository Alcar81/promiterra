@extends('template')
@section('title')
Édition | Chapire 5 | Les carrières
@endsection

@if(session()->has('info'))
    <div class="notification is-success">
        {{ session('info') }}
    </div>
@endif

<head2>
    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head2>

@section('contenu')

<div class="row justify-content-center pt-4">
        <div class="col-md-11">
            <div class="card">


                    <div class="card-header p-4">
                        <div class="row justify-content-center">
                          <p><h2><strong>{{ $careers->CareerClassName }}</strong></h2></p>
                        </div>
                    </div>



                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('cinq.careers.update', $careers->id) }}" method="POST">

                            @csrf


                            <div class="container border rounded p-4">
                                
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;">{{ __('Nom') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Version') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Chapitre') }}</th> 
                                        </tr>                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                            <input type="text" class="form-control" id="CareerClassName" placeholder="" value="{{ old('year') ?? $careers->CareerClassName }}" name="CareerClassName" autofocus>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <input type="text" class="form-control" id="CareerVersion" placeholder="" value="{{ old('year') ?? $careers->CareerVersion }}" name="CareerVersion">                                                     
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <input type="text" class="form-control" id="chapter" placeholder="" value="5" name="chapter">
                                            </td>                                                                                                       
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>
                                                               
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{__('Page :') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Parent 1') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Parent 2') }}</th>                                                                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <input type="text" class="form-control" id="CareerIDClass" placeholder="" value="{{ old('year') ?? $careers->CareerIDClass }}" name="CareerIDClass" autofocus>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <input type="text" class="form-control" id="CareerIDParent1" placeholder="" value="{{ old('year') ?? $careers->CareerIDParent1 }}" name="CareerIDParent1">                                                      
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <input type="text" class="form-control" id="CareerIDParent2" placeholder="" value="{{ old('year') ?? $careers->CareerIDParent2 }}" name="CareerIDParent2">
                                            </td>                                                                                                       
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>                            
                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <div class="container border rounded p-4">CareerImage</div>
                                    <div>
                                        <label for="CareerImageArtist"><p>{{ __('Artiste') }}</p></label>
                                        <input type="text" class="form-control" id="CareerImageArtist" placeholder="" value="{{ old('year') ?? $careers->CareerImageArtist }}" name="CareerImageArtist">
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <label for="CareerDescription"><p>{{ __('Description') }}</p></label>
                                            <textarea class="form-control" placeholder="" id="summernote" style="height: 100px" name="CareerDescription">{{ old('year') ?? $careers->CareerDescription }}</textarea>
                                </div>

                                
                            </div>

                            <div class="container border rounded p-4">
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{ __('Physique') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Mental') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Réaction') }}</th>                                               

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerPhysical" aria-label="Floating label select example" name="CareerPhysical">
                                                    <option selected>{{ old('year') ?? $careers->CareerPhysical }}</option>
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
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerMental" aria-label="Floating label select example" name="CareerMental">
                                                    <option selected>{{ old('year') ?? $careers->CareerMental }}</option>
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
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerReaction" aria-label="Floating label select example" name="CareerReaction">
                                                    <option selected>{{ old('year') ?? $careers->CareerReaction }}</option>
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
                                            </td>                                                            
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>
                            </div>

                            <div class="container border rounded p-4">
                                <p>Compétences</p>
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{ __('1') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('2') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('3') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('4') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('5') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('6') }}</th>                                                   

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerManual" aria-label="Floating label select example" name="CareerManual">
                                                    <option selected>{{ old('year') ?? $careers->CareerManual }}</option>
                                                    <option value="Connaissance">Connaissance</option>
                                                    <option value="Habilité">Habilité</option>                                                    
                                                    <option value="Manuel">Manuel</option>
                                                    <option value="Sens">Sens</option>
                                                    <option value="Sociale">Sociale</option>
                                                    <option value="Auchoix">Au choix</option> 
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerAbility" aria-label="Floating label select example" name="CareerAbility">
                                                    <option selected>{{ old('year') ?? $careers->CareerAbility }}</option>
                                                    <option value="Connaissance">Connaissance</option>                                                    
                                                    <option value="Habilité">Habilité</option>
                                                    <option value="Manuel">Manuel</option>
                                                    <option value="Sens">Sens</option>
                                                    <option value="Sociale">Sociale</option>
                                                    <option value="Auchoix">Au choix</option>  
                                                </select>                                                        
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerSenses" aria-label="Floating label select example" name="CareerSenses">
                                                    <option selected>{{ old('year') ?? $careers->CareerSenses }}</option>
                                                    <option value="Connaissance">Connaissance</option>
                                                    <option value="Habilité">Habilité</option>
                                                    <option value="Manuel">Manuel</option> 
                                                    <option value="Sens">Sens</option>
                                                    <option value="Sociale">Sociale</option>
                                                    <option value="Auchoix">Au choix</option> 
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerSocial" aria-label="Floating label select example" name="CareerSocial">
                                                    <option selected>{{ old('year') ?? $careers->CareerSocial }}</option>
                                                    <option value="Connaissance">Connaissance</option>
                                                    <option value="Habilité">Habilité</option>
                                                    <option value="Manuel">Manuel</option>
                                                    <option value="Sens">Sens</option> 
                                                    <option value="Sociale">Sociale</option>
                                                    <option value="Auchoix">Au choix</option> 
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerKnowledge" aria-label="Floating label select example" name="CareerKnowledge">
                                                    <option selected>{{ old('year') ?? $careers->CareerKnowledge }}</option>
                                                    <option value="Connaissance">Connaissance</option>
                                                    <option value="Habilité">Habilité</option>
                                                    <option value="Manuel">Manuel</option>
                                                    <option value="Sens">Sens</option>
                                                    <option value="Sociale">Sociale</option>
                                                    <option value="Auchoix">Au choix</option>  
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerAuchoix" aria-label="Floating label select example" name="CareerAuchoix">
                                                    <option selected>{{ old('year') ?? $careers->CareerAuchoix }}</option>
                                                    <option value="Connaissance">Connaissance</option>
                                                    <option value="Habilité">Habilité</option>
                                                    <option value="Manuel">Manuel</option>
                                                    <option value="Sens">Sens</option>
                                                    <option value="Sociale">Sociale</option>
                                                    <option value="Auchoix">Au choix</option>  
                                                </select>
                                            </td>                                                            
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>
                            </div>
                             

                            <div class="container border rounded p-4">
                                <div>    
                                <p>Armes autorisées pour la carrière</p>
                                </div>
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{ __('Arme 1') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Arme 2') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Arme 3') }}</th>                                                                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons1" aria-label="Floating label select example" name="CareerWeapons1">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons1 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalete">Arbalète</option>
                                                    <option value="Baton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Epee">Épée</option>
                                                    <option value="Fleaudarmes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="TAM">Toutes les armes de mêlée</option>
                                                    <option value="TAT">Toutes les armes de tir</option>  
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons2" aria-label="Floating label select example" name="CareerWeapons2">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons2 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalete">Arbalète</option>
                                                    <option value="Baton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Epee">Épée</option>
                                                    <option value="Fleaudarmes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="TAM">Toutes les armes de mêlée</option>
                                                    <option value="TAT">Toutes les armes de tir</option> 
                                                </select>                                                        
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons3" aria-label="Floating label select example" name="CareerWeapons3">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons3 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalete">Arbalète</option>
                                                    <option value="Baton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Epee">Épée</option>
                                                    <option value="Fleaudarmes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="TAM">Toutes les armes de mêlée</option>
                                                    <option value="TAT">Toutes les armes de tir</option> 
                                                </select>
                                            </td>                                                                                                       
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{ __('Arme 4') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Arme 5') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Arme 6') }}</th>                                                                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons4" aria-label="Floating label select example" name="CareerWeapons4">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons4 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalete">Arbalète</option>
                                                    <option value="Baton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Epee">Épée</option>
                                                    <option value="Fleaudarmes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="TAM">Toutes les armes de mêlée</option>
                                                    <option value="TAT">Toutes les armes de tir</option>  
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons5" aria-label="Floating label select example" name="CareerWeapons5">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons5 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalete">Arbalète</option>
                                                    <option value="Baton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Epee">Épée</option>
                                                    <option value="Fleaudarmes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="TAM">Toutes les armes de mêlée</option>
                                                    <option value="TAT">Toutes les armes de tir</option> 
                                                </select>                                                        
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons6" aria-label="Floating label select example" name="CareerWeapons6">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons6 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalete">Arbalète</option>
                                                    <option value="Baton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Epee">Épée</option>
                                                    <option value="Fleaudarmes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="TAM">Toutes les armes de mêlée</option>
                                                    <option value="TAT">Toutes les armes de tir</option> 
                                                </select>
                                            </td>                                                                                                       
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{ __('Arme 7') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Arme 8') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Arme 9') }}</th>                                                                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons7" aria-label="Floating label select example" name="CareerWeapons7">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons7 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalète">Arbalète</option>
                                                    <option value="Bâton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Épée">Épée</option>
                                                    <option value="Fléau d'armes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="Toutes les armes de mêlée">Toutes les armes de mêlée</option>
                                                    <option value="Toutes les armes de tir">Toutes les armes de tir</option>  
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons8" aria-label="Floating label select example" name="CareerWeapons8">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons8 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalète">Arbalète</option>
                                                    <option value="Bâton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Épée">Épée</option>
                                                    <option value="Fléau d'armes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="Toutes les armes de mêlée">Toutes les armes de mêlée</option>
                                                    <option value="Toutes les armes de tir">Toutes les armes de tir</option> 
                                                </select>                                                        
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerWeapons9" aria-label="Floating label select example" name="CareerWeapons9">
                                                    <option selected>{{ old('year') ?? $careers->CareerWeapons9 }}</option>
                                                    <option value="Aucune">Aucune</option>
                                                    <option value="Arc">Arc</option>
                                                    <option value="Arbalète">Arbalète</option>
                                                    <option value="Bâton">Bâton</option>
                                                    <option value="Dague">Dague</option>
                                                    <option value="Épée">Épée</option>
                                                    <option value="Fléau d'armes">Fléau d'armes</option>
                                                    <option value="Fouet">Fouet</option>
                                                    <option value="Fusil">Fusil</option>
                                                    <option value="Hache">Hache</option>
                                                    <option value="Lance">Lance</option>
                                                    <option value="Masse">Masse</option>
                                                    <option value="Sabre">Sabre</option>
                                                    <option value="Sarbacane">Sarbacane</option>
                                                    <option value="Toutes les armes de mêlée">Toutes les armes de mêlée</option>
                                                    <option value="Toutes les armes de tir">Toutes les armes de tir</option> 
                                                </select>
                                            </td>                                                                                                       
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>

                            </div>     
                                
                                
                            <div class="container border rounded p-4">
                                <div>    
                                <p>Armures autorisées pour la carrière</p>
                                </div>
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{ __('Armure 1') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Armure 2') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Armure 3') }}</th>                                                                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerArmors1" aria-label="Floating label select example" name="CareerArmors1">
                                                    <option selected>{{ old('year') ?? $careers->CareerArmors1 }}</option>
                                                    <option value="Légère">Légère</option>
                                                    <option value="Moyenne">Moyenne</option>
                                                    <option value="Lourde">Lourde</option>
                                                    <option value="Tunique">Tunique</option>
                                                    <option value="Robe">Robe</option>                                                                            
                                                    </select>  
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerArmors2" aria-label="Floating label select example" name="CareerArmors2">
                                                    <option selected>{{ old('year') ?? $careers->CareerArmors2 }}</option>
                                                    <option value="Légère">Légère</option>
                                                    <option value="Moyenne">Moyenne</option>
                                                    <option value="Lourde">Lourde</option>
                                                    <option value="Tunique">Tunique</option>
                                                    <option value="Robe">Robe</option>
                                                </select>                                                       
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerArmors3" aria-label="Floating label select example" name="CareerArmors3"> 
                                                    <option selected>{{ old('year') ?? $careers->CareerArmors3 }}</option>
                                                    <option value="Légère">Légère</option>
                                                    <option value="Moyenne">Moyenne</option>
                                                    <option value="Lourde">Lourde</option>
                                                    <option value="Tunique">Tunique</option>
                                                    <option value="Robe">Robe</option>
                                                </select>
                                            </td>                                                                                                       
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>
                            </div>     
                                
                            <div class="container border rounded p-4">
                                <div>    
                                <p>Spécials autorisés pour la carrière</p>
                                </div>
                                <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>

                                            <th scope="col"  style="text-align: center;">{{ __('Spécial 1') }}</th>
                                            <th scope="col"  style="text-align: center;">{{ __('Spécial 2') }}</th> 
                                            <th scope="col"  style="text-align: center;">{{ __('Spécial 3') }}</th>                                                                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerSpecials1" aria-label="Floating label select example" name="CareerSpecials1">
                                                    <option selected>{{ old('year') ?? $careers->CareerSpecials1 }}</option>
                                                    <option value="Baguette magique">Baguette magique</option>
                                                    <option value="Bouclier">Bouclier</option>                                                    
                                                    <option value="Bombe">Bombe</option>
                                                    <option value="Grimoire">Grimoire</option>
                                                    <option value="Monture">Monture</option>                             
                                                    </select>  
                                                </select>
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerSpecials2" aria-label="Floating label select example" name="CareerSpecials2">
                                                    <option selected>{{ old('year') ?? $careers->CareerSpecials2 }}</option>
                                                    <option value="Baguette magique">Baguette magique</option>
                                                    <option value="Bouclier">Bouclier</option>                                                    
                                                    <option value="Bombe">Bombe</option>
                                                    <option value="Grimoire">Grimoire</option>
                                                    <option value="Monture">Monture</option>                             
                                                </select>                                                        
                                            </td>
                                            <td scope="row" style="text-align: center;" height="35px">
                                                <select class="form-select" id="CareerSpecials3" aria-label="Floating label select example" name="CareerSpecials3"> 
                                                    <option selected>{{ old('year') ?? $careers->CareerSpecials3 }}</option>
                                                    <option value="Baguette magique">Baguette magique</option>
                                                    <option value="Bouclier">Bouclier</option>                                                    
                                                    <option value="Bombe">Bombe</option>
                                                    <option value="Grimoire">Grimoire</option>
                                                    <option value="Monture">Monture</option>                             
                                                </select> 
                                            </td>                                                                                                       
                                        </tr>                                                   
                                        
                                    </tbody>
                                </table>
                            </div> 


                            <div class="container border rounded p-4">                                

                                <div class="form-floating pt-4">
                                    <label for="CareerAction1Name">{{ __('Action 1') }}</label>
                                    <input type="text" class="form-control" id="CareerAction1Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction1Name }}" name="CareerAction1Name">                                                                      
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction1Desc">{{ old('year') ?? $careers->CareerAction1Desc }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerAction2Name">{{ __('Action 2') }}</label>
                                    <input type="text" class="form-control" id="CareerAction2Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction2Name }}" name="CareerAction2Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction2Desc">{{ old('year') ?? $careers->CareerAction2Desc }}</textarea>                                    
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerAction3Name">{{ __('Action 3') }}</label>
                                    <input type="text" class="form-control" id="CareerAction3Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction3Name }}" name="CareerAction3Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction3Desc">{{ old('year') ?? $careers->CareerAction3Desc }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerAction4Name">{{ __('Action 4') }}</label>
                                    <input type="text" class="form-control" id="CareerAction4Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction4Name }}" name="CareerAction4Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction4Desc">{{ old('year') ?? $careers->CareerAction4Desc }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerAction5Name">{{ __('Action 5') }}</label>
                                    <input type="text" class="form-control" id="CareerAction5Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction5Name }}" name="CareerAction5Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction5Desc">{{ old('year') ?? $careers->CareerAction5Desc }}</textarea>                                    
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerAction6Name">{{ __('Action 6') }}</label>
                                    <input type="text" class="form-control" id="CareerAction6Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction6Name }}" name="CareerAction6Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction6Desc">{{ old('year') ?? $careers->CareerAction6Desc }}</textarea>                                    
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerAction7Name">{{ __('Action 7') }}</label>
                                    <input type="text" class="form-control" id="CareerAction7Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction7Name }}" name="CareerAction7Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction7Desc">{{ old('year') ?? $careers->CareerAction7Desc }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerAction8Name">{{ __('Action 8') }}</label>
                                    <input type="text" class="form-control" id="CareerAction8Name" placeholder="" value="{{ old('year') ?? $careers->CareerAction8Name }}" name="CareerAction8Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerAction8Desc">{{ old('year') ?? $careers->CareerAction8Desc }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerTalent1Name">{{ __('Talent 1') }}</label>
                                    <input type="text" class="form-control" id="CareerTalent1Name" placeholder="" value="{{ old('year') ?? $careers->CareerTalent1Name }}" name="CareerTalent1Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerTalent1Name">{{ old('year') ?? $careers->CareerTalent1Name }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerTalent2Name">{{ __('Talent 2') }}</label>
                                    <input type="text" class="form-control" id="CareerTalent2Name" placeholder="" value="{{ old('year') ?? $careers->CareerTalent2Name }}" name="CareerTalent2Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerTalent2Name">{{ old('year') ?? $careers->CareerTalent2Name }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerTalent3Name">{{ __('Talent 3') }}</label>
                                    <input type="text" class="form-control" id="CareerTalent3Name" placeholder="" value="{{ old('year') ?? $careers->CareerTalent3Name }}" name="CareerTalent3Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerTalent3Name">{{ old('year') ?? $careers->CareerTalent3Name }}</textarea>
                                </div>

                                <div class="form-floating pt-4">
                                    <label for="CareerTalent4Name">{{ __('Talent 4') }}</label>
                                    <input type="text" class="form-control" id="CareerTalent4Name" placeholder="" value="{{ old('year') ?? $careers->CareerTalent4Name }}" name="CareerTalent4Name">
                                    <textarea class="form-control" placeholder="Écrivez la description ici" id="summernote" style="height: 100px" name="CareerTalent4Name">{{ old('year') ?? $careers->CareerTalent4Name }}</textarea>
                                </div>
                            </div>

                            
                            <div class="container pt-4">

                                <form action="{{ route('cinq.careers.update', $careers->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('cinq.careers.destroy', $careers->id) }}" method="POST" class="d-inline">
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

    </div>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>

@endsection