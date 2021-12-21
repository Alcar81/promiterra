@extends('template')
@section('title')
Création Canon | Chapire 3 | L'économie
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
                        <p><h2><strong>{{ __('Création d’un canon') }}</strong></h2></p>
                    </div>
                </div>
                <div class="card-body p-4">
                    
                    <form class="form-floating" action="{{ route('trois.cannons.store') }}" method="POST">

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
                                            <td><input type="text" class="form-control" id="CannonName" placeholder="" value="" name="CannonName"></td>
                                            <td><input type="text" class="form-control" id="CannonVersion" placeholder="" value="" name="CannonVersion"></td>
                                            <td><input type="text" class="form-control" id="CannonMovement" placeholder="" value="" name="CannonMovement"></td>
                                            <td><input type="text" class="form-control" id="CannonScope" placeholder="" value="" name="CannonScope"></td>
                                            <td><input type="text" class="form-control" id="CannonRange" placeholder="" value="" name="CannonRange"></td>
                                            <td><input type="text" class="form-control" id="CannonDamage" placeholder="" value="" name="CannonDamage"></td> 
                                            <td><input type="text" class="form-control" id="CannonTouch" placeholder="" value="" name="CannonTouch"></td>                                                                                      
                                            <td><input type="text" class="form-control" id="CannonTrouble" placeholder="" value="" name="CannonTrouble"></td> 
                                            <td><input type="text" class="form-control" id="CannonCost" placeholder="" value="" name="CannonCost"></td> 
                                            <td><input type="text" class="form-control" id="CannonBallCost" placeholder="" value="" name="CannonBallCost"></td> 
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