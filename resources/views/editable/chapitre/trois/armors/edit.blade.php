@extends('template')
@section('title')
Édition {{ $armors->ArmortName }}| Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Édition de l’armure') }}{{ $armors->ArmorName }}</strong></h2></p>
                        </div>
                    </div>



                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.armors.update', $armors->id) }}" method="POST">

                            @csrf
                            <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Armure') }}</th>
                                                <th class="text-center" scope="col">{{ __('Version') }}</th>
                                                <th class="text-center" scope="col">{{ __('Catégorie') }}</th>                                                                                                                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><input type="text" class="form-control" id="ArmorName" placeholder="" value="{{ old('ArmorName') ?? $armors->ArmorName }}" name="ArmorName"></td>
                                                <td><input type="text" class="form-control" id="ArmorVersion" placeholder="" value="{{ old('ArmorVersion') ?? $armors->ArmorVersion }}" name="ArmorVersion"></td>
                                                <td>
                                                    <select class="form-select" id="ArmorCategory" aria-label="Floating label select example" name="ArmorCategory">
                                                        <option selected>{{ old('ArmorCategory') ?? $armors->ArmorCategory }}</option>
                                                        <option value="Aucune armure">Aucune armure</option>
                                                        <option value="Armure légère">Armure légère</option>
                                                        <option value="Armure moyenne">Armure moyenne</option>                                                    
                                                        <option value="Armure lourde">Armure lourde</option>                                                        
                                                        <option value="Tunique">Tunique</option>
                                                        <option value="Robe">Robe</option> 
                                                    </select>
                                                </td>                                                
                                                
                                                                                          
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Perçant.') }}</th>
                                                <th class="text-center" scope="col">{{ __('Tranchant') }}</th>
                                                <th class="text-center" scope="col">{{ __('Contondant') }}</th>
                                                <th class="text-center" scope="col">{{ __('Feu') }}</th>
                                                <th class="text-center" scope="col">{{ __('Sortilège') }}</th>                                                                                                                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>
                                                    <select class="form-select" id="ArmorPiercing" aria-label="Floating label select example" name="ArmorPiercing">
                                                        <option selected>{{ old('ArmorPiercing') ?? $armors->ArmorPiercing }}</option>
                                                        <option value="0">0</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                    
                                                        <option value="75">75</option>                                                        
                                                        <option value="100">100</option>
                                                    </select>
                                                </td> 
                                                <td>
                                                    <select class="form-select" id="ArmorSharp" aria-label="Floating label select example" name="ArmorSharp">
                                                        <option selected>{{ old('ArmorSharp') ?? $armors->ArmorSharp }}</option>
                                                        <option value="0">0</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                    
                                                        <option value="75">75</option>                                                        
                                                        <option value="100">100</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="ArmorBlunt" aria-label="Floating label select example" name="ArmorBlunt">
                                                        <option selected>{{ old('ArmorBlunt') ?? $armors->ArmorBlunt }}</option>
                                                        <option value="0">0</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                    
                                                        <option value="75">75</option>                                                        
                                                        <option value="100">100</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="ArmorFire" aria-label="Floating label select example" name="ArmorFire">
                                                        <option selected>{{ old('ArmorFire') ?? $armors->ArmorFire }}</option>
                                                        <option value="0">0</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                    
                                                        <option value="75">75</option>                                                        
                                                        <option value="100">100</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="ArmorSpell" aria-label="Floating label select example" name="ArmorSpell">
                                                        <option selected>{{ old('ArmorSpell') ?? $armors->ArmorSpell }}</option>
                                                        <option value="0">0</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                    
                                                        <option value="75">75</option>                                                        
                                                        <option value="100">100</option>
                                                    </select>                                                
                                                </td>                                                                                     
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Encombrement') }}</th>
                                                <th class="text-center" scope="col">{{ __('P1') }}</th>
                                                <th class="text-center" scope="col">{{ __('P2') }}</th>
                                                <th class="text-center" scope="col">{{ __('Valeur') }}</th>                                                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>                                               
                                                <td><input type="text" class="form-control" id="ArmorClutter" placeholder="" value="{{ old('ArmorClutter') ?? $armors->ArmorClutter }}" name="ArmorClutter"></td>
                                                <td>
                                                    <select class="form-select" id="ArmorProperty1" aria-label="Floating label select example" name="ArmorProperty1">
                                                        <option selected>{{ old('ArmorProperty1') ?? $armors->ArmorProperty1 }}</option>
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
                                                <td>
                                                    <select class="form-select" id="ArmorProperty2" aria-label="Floating label select example" name="ArmorProperty2">
                                                        <option selected>{{ old('ArmorProperty2') ?? $armors->ArmorProperty2 }}</option>
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
                                                <td><input type="text" class="form-control" id="ArmorCost" placeholder="" value="{{ old('ArmorCost') ?? $armors->ArmorCost }}" name="ArmorCost"></td>                                          
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                </div>
                            
                            <div class="container pt-4">

                                <form action="{{ route('trois.armors.update', $armors->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('trois.armors.destroy', $armors->id) }}" method="POST" class="d-inline">
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