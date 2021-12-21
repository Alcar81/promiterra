@extends('template')
@section('title')
Création Bouclier | Chapire 3 | L'économie
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

<div class="row justify-content-center p-4">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header p-4">
                    <div class="row justify-content-center">
                        <p><h2><strong>{{ __('Création d’un bouclier') }}</strong></h2></p>
                    </div>
                </div>



                <div class="card-body p-4">
                    
                    <form class="form-floating" action="{{ route('trois.shields.store') }}" method="POST">

                        @csrf
                        <div class="row justify-content-center">
                            
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">{{ __('Bouclier') }}</th>
                                        <th scope="col">{{ __('Version') }}</th>
                                        <th scope="col">{{ __('Physique') }}</th>
                                        <th scope="col">{{ __('Ch. action') }}</th>                                                                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" id="ShieldName" placeholder="" value="" name="ShieldName"></td>
                                        <td><input type="text" class="form-control" id="ShieldVersion" placeholder="" value="" name="ShieldVersion"></td>
                                        <td><input type="text" class="form-control" id="ShieldPhysic" placeholder="" value="" name="ShieldPhysic"></td>
                                        <td><input type="text" class="form-control" id="ShieldMinusFields" placeholder="" value="" name="ShieldMinusFields"></td>                                           
                                    </tr>                                      
                                                                            
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">{{ __('Face') }}</th>
                                        <th scope="col">{{ __('Flanc') }}</th>
                                        <th scope="col">{{ __('Dos') }}</th>
                                                                                                                                
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>                                            
                                        <td><input type="text" class="form-control" id="ShieldFace" placeholder="" value="" name="ShieldFace"></td>
                                        <td><input type="text" class="form-control" id="ShieldFlank" placeholder="" value="" name="ShieldFlank"></td>
                                        <td><input type="text" class="form-control" id="ShieldBack" placeholder="" value="" name="ShieldBack"></td>
                                                                                    
                                    </tr>                                       
                                                                                                                            
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                            
                                        <th scope="col">{{ __('Propriété 1') }}</th>
                                        <th scope="col">{{ __('Propriété 2') }}</th>
                                        <th scope="col">{{ __('Valeur') }}</th>                                                                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr> 
                                        <td>
                                            <select class="form-select" id="ShieldProperty1" aria-label="Floating label select example" name="ShieldProperty1">
                                                <option selected></option>
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
                                            <select class="form-select" id="ShieldProperty1" aria-label="Floating label select example" name="ShieldProperty1">
                                                <option selected></option>
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
                                        <td><input type="text" class="form-control" id="ShieldCost" placeholder="" value="" name="ShieldCost"></td>                                           
                                    </tr>                                       
                                                                                                                            
                                </tbody>
                            </table>
                        </div>
                        

                        <div class="container pt-4">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                        </div>

                    </form>

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