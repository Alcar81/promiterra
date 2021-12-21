@extends('template')
@section('title')
Édition {{ $weapons->WeaponName }}| Chapire 3 | L'économie
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
        <div class="col-md-7">
            <div class="card">


                    <div class="card-header p-4">
                        <div class="row justify-content-center">
                          <p><h2><strong>{{ $weapons->WeaponName }}</strong></h2></p>
                        </div>
                    </div>



                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.weapons.update', $weapons->id) }}" method="POST">

                            @csrf
                            <div class="row justify-content-center">
                                
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th colspan="2" scope="col">Arme</th>                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><p>{{ __('Nom') }}</p></th>
                                            <td><input type="text" class="form-control" id="WeaponName" placeholder="" value="{{ old('WeaponName') ?? $weapons->WeaponName }}" name="WeaponName"></td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Version') }}</p></th>
                                            <td><input type="text" class="form-control" id="WeaponVersion" placeholder="" value="{{ old('WeaponVersion') ?? $weapons->WeaponVersion }}" name="WeaponVersion"></td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Catégorie') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponCategory" aria-label="Floating label select example" name="WeaponCategory">
                                                    <option selected>{{ old('WeaponCategory') ?? $weapons->WeaponCategory }}</option>
                                                    <option value="Arbalète">Arbalète</option>
                                                    <option value="Arc">Arc</option>                                                    
                                                    <option value="Bâton">Bâton</option>
                                                    <option value="Bombe">Bombe</option>
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
                                                </select>
                                            </td>                                           
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Sous-catégorie') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponSubCategory" aria-label="Floating label select example" name="WeaponSubCategory">
                                                    <option selected>{{ old('WeaponSubCategory') ?? $weapons->WeaponSubCategory }}</option>
                                                    <option value="Une main">une main</option>
                                                    <option value="Deux mains">deux mains</option>
                                                    <option value="de jet">de jet</option>                                                    
                                                    <option value="de cavalerie">de cavalerie</option>
                                                    <option value="sainte">sainte</option>                                                                                        
                                                </select>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Nbr main') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponNumberHands" aria-label="Floating label select example" name="WeaponNumberHands">
                                                    <option selected>{{ old('WeaponNumberHands') ?? $weapons->WeaponNumberHands }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>                                                                                                                                               
                                                </select>
                                            </td>                                            
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row"><p>{{ __('Type1') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponType1" aria-label="Floating label select example" name="WeaponType1">
                                                    <option selected>{{ old('WeaponType1') ?? $weapons->WeaponType1 }}</option>
                                                    <option value="Contondant">Contondant</option>
                                                    <option value="Feu">Feu</option>
                                                    <option value="Mêlée">Mêlée</option>
                                                    <option value="Perçant">Perçant</option>
                                                    <option value="Spécial">Spécial</option>
                                                    <option value="Tir">Tir</option>
                                                    <option value="Tranchant">Tranchant</option>                                                                                                                                                                                                        
                                                </select>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Type2') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponType2" aria-label="Floating label select example" name="WeaponType2">
                                                    <option selected>{{ old('WeaponType2') ?? $weapons->WeaponType2 }}</option>
                                                    <option value="Contondant">Contondant</option>
                                                    <option value="Feu">Feu</option>
                                                    <option value="Mêlée">Mêlée</option>
                                                    <option value="Perçant">Perçant</option>
                                                    <option value="Spécial">Spécial</option>
                                                    <option value="Tir">Tir</option>
                                                    <option value="Tranchant">Tranchant</option>                                                                                                                                                                                                        
                                                </select>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Portée') }}</p></th>
                                            <td><input type="text" class="form-control" id="WeaponScope" placeholder="" value="{{ old('WeaponScope') ?? $weapons->WeaponScope }}" name="WeaponScope"></td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Attaque') }}</p></th>
                                            <td><input type="text" class="form-control" id="WeaponAttack" placeholder="" value="{{ old('WeaponAttack') ?? $weapons->WeaponAttack }}" name="WeaponAttack">  </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Critique') }}</p></th>
                                            <td><input type="text" class="form-control" id="WeaponCritical" placeholder="" value="{{ old('WeaponCritical') ?? $weapons->WeaponCritical }}" name="WeaponCritical"></td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Face') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponFace" aria-label="Floating label select example" name="WeaponFace">
                                                    <option selected>{{ old('WeaponFace') ?? $weapons->WeaponFace }}</option>
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
                                                </select>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Flanc') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponFlank" aria-label="Floating label select example" name="WeaponFlank">
                                                    <option selected>{{ old('WeaponFlank') ?? $weapons->WeaponFlank }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>                                                    
                                                    <option value="4">4</option>
                                                    <option value="4">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>                                                                                       
                                                </select>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Back') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponBack" aria-label="Floating label select example" name="WeaponBack">
                                                    <option selected>{{ old('WeaponBack') ?? $weapons->WeaponBack }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>                                                    
                                                    <option value="4">4</option>
                                                    <option value="4">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>                                            
                                            </td>                                           
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Maladresse') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponClumsiness" aria-label="Floating label select example" name="WeaponClumsiness">
                                                    <option selected>{{ old('WeaponClumsiness') ?? $weapons->WeaponClumsiness }}</option>
                                                    <option value="0">0</option>                                                        
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>                                                                                       
                                                </select>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('P1') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponProperty1" aria-label="Floating label select example" name="WeaponProperty1">
                                                    <option selected>{{ old('WeaponProperty1') ?? $weapons->WeaponProperty1 }}</option>
                                                    <option value="Pointue">Pointue</option>                                                        
                                                    <option value="Mordante">Mordante</option>
                                                    <option value="Acérée">Acérée</option>
                                                    <option value="Aiguisée">Aiguisée</option>
                                                    <option value="Affûtée">Affûtée</option>
                                                    <option value="Affilée">Affilée</option> 
                                                    <option value="Alourdie">Alourdie</option> 
                                                    <option value="Empesée">Empesée</option>
                                                    <option value="Chargée">Chargée</option>
                                                    <option value="Stable">Stable</option>
                                                    <option value="Juste">Juste</option>
                                                    <option value="Précise">Précise</option>
                                                    <option value="Surdimensionnée">Surdimensionnée</option>
                                                    <option value="Gigantesque">Gigantesque</option>
                                                    <option value="Puissante">Puissante</option>
                                                    <option value="Dévastateur">Dévastateur</option>
                                                    <option value="Balancée">Balancée</option>
                                                    <option value="Équilibrée">Équilibrée</option>
                                                    <option value="Perfectionnée">Perfectionnée</option>
                                                    <option value="Dégradée">Dégradée</option>
                                                    <option value="Faible">Faible</option>                                                                                        
                                                </select>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('P2') }}</p></th>
                                            <td>
                                                <select class="form-select" id="WeaponProperty2" aria-label="Floating label select example" name="WeaponProperty2">
                                                    <option selected>{{ old('WeaponProperty2') ?? $weapons->WeaponProperty2 }}</option>
                                                    <option value="Pointue">Pointue</option>                                                        
                                                    <option value="Mordante">Mordante</option>
                                                    <option value="Acérée">Acérée</option>
                                                    <option value="Aiguisée">Aiguisée</option>
                                                    <option value="Affûtée">Affûtée</option>
                                                    <option value="Affilée">Affilée</option> 
                                                    <option value="Alourdie">Alourdie</option> 
                                                    <option value="Empesée">Empesée</option>
                                                    <option value="Chargée">Chargée</option>
                                                    <option value="Stable">Stable</option>
                                                    <option value="Juste">Juste</option>
                                                    <option value="Précise">Précise</option>
                                                    <option value="Surdimensionnée">Surdimensionnée</option>
                                                    <option value="Gigantesque">Gigantesque</option>
                                                    <option value="Puissante">Puissante</option>
                                                    <option value="Dévastateur">Dévastateur</option>
                                                    <option value="Balancée">Balancée</option>
                                                    <option value="Équilibrée">Équilibrée</option>
                                                    <option value="Perfectionnée">Perfectionnée</option>
                                                    <option value="Dégradée">Dégradée</option>
                                                    <option value="Faible">Faible</option>                                                                                        
                                                </select>                                            
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row"><p>{{ __('Valeur') }}</th>
                                            <td><input type="text" class="form-control" id="WeaponCost" placeholder="" value="{{ old('WeaponCost') ?? $weapons->WeaponCost }}" name="WeaponCost"></td>                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                            
                            <div class="container pt-4">

                                <form action="{{ route('trois.weapons.update', $weapons->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('trois.weapons.destroy', $weapons->id) }}" method="POST" class="d-inline">
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