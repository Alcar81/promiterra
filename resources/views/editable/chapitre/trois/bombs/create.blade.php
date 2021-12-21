@extends('template')
@section('title')
Création Bombe | Chapire 3 | L'économie
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
                        <p><h2><strong>{{ __('Création d’une bombe') }}</strong></h2></p>
                    </div>
                </div>
                <div class="card-body p-4">
                    
                    <form class="form-floating" action="{{ route('trois.bombs.store') }}" method="POST">

                        @csrf
                            <div class="row justify-content-center">
                                
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Bombes') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('T1') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('T2') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('R1') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('R2') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('R3') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('R4') }}</th>                                          
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('R5') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Maladresse') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>                                                                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control" id="BombName" placeholder="" value="" name="BombName"></td>
                                            <td><input type="text" class="form-control" id="BombVersion" placeholder="" value="" name="BombVersion"></td>
                                            <td><input type="text" class="form-control" id="BombType1" placeholder="" value="" name="BombType1"></td>
                                            <td><input type="text" class="form-control" id="BombType2" placeholder="" value="" name="BombType2"></td>
                                            <td><input type="text" class="form-control" id="BombR1" placeholder="" value="" name="BombR1"></td>
                                            <td><input type="text" class="form-control" id="BombR2" placeholder="" value="" name="BombR2"></td> 
                                            <td><input type="text" class="form-control" id="BombR3" placeholder="" value="" name="BombR3"></td>                                                                                      
                                            <td><input type="text" class="form-control" id="BombR4" placeholder="" value="" name="BombR4"></td> 
                                            <td><input type="text" class="form-control" id="BombR5" placeholder="" value="" name="BombR5"></td> 
                                            <td><input type="text" class="form-control" id="BombClumsiness" placeholder="" value="" name="BombClumsiness"></td>
                                            <td><input type="text" class="form-control" id="BombCost" placeholder="" value="" name="BombCost"></td> 
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