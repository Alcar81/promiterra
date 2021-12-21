@extends('template')
@section('title')
Édition {{ $cannons->CannonName }}| Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Édition du canon') }} {{ $cannons->CannonName }}</strong></h2></p>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.cannons.update', $cannons->id) }}" method="POST">

                            @csrf
                            <div class="row justify-content-center">
                                
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Canons') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Mouvement') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Portée') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Éclat') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Dégâts') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Toucher') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Problème') }}</th>                                          
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>
                                        <th scope="col"  style="text-align: center;" height="20px">{{ __('$ Boulet') }}</th>                                                                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control" id="CannonName" placeholder="" value="{{ old('CannonName') ?? $cannons->CannonName }}" name="CannonName"></td>
                                            <td><input type="text" class="form-control" id="CannonVersion" placeholder="" value="{{ old('CannonVersion') ?? $cannons->CannonVersion }}" name="CannonVersion"></td>
                                            <td><input type="text" class="form-control" id="CannonMovement" placeholder="" value="{{ old('CannonMovement') ?? $cannons->CannonMovement }}" name="CannonMovement"></td>
                                            <td><input type="text" class="form-control" id="CannonScope" placeholder="" value="{{ old('CannonScope') ?? $cannons->CannonScope }}" name="CannonScope"></td>
                                            <td><input type="text" class="form-control" id="CannonRange" placeholder="" value="{{ old('CannonRange') ?? $cannons->CannonRange }}" name="CannonRange"></td>
                                            <td><input type="text" class="form-control" id="CannonDamage" placeholder="" value="{{ old('CannonDamage') ?? $cannons->CannonDamage }}" name="CannonDamage"></td> 
                                            <td><input type="text" class="form-control" id="CannonTouch" placeholder="" value="{{ old('CannonTouch') ?? $cannons->CannonTouch }}" name="CannonTouch"></td>                                                                                      
                                            <td><input type="text" class="form-control" id="CannonTrouble" placeholder="" value="{{ old('CannonTrouble') ?? $cannons->CannonTrouble }}" name="CannonTrouble"></td> 
                                            <td><input type="text" class="form-control" id="CannonCost" placeholder="" value="{{ old('CannonCost') ?? $cannons->CannonCost }}" name="CannonCost"></td> 
                                            <td><input type="text" class="form-control" id="CannonBallCost" placeholder="" value="{{ old('CannonBallCost') ?? $cannons->CannonBallCost }}" name="CannonBallCost"></td> 
                                        </tr>                                           
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                            
                            <div class="container pt-4">

                                <form action="{{ route('trois.cannons.update', $cannons->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('trois.cannons.destroy', $cannons->id) }}" method="POST" class="d-inline">
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

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>

@endsection