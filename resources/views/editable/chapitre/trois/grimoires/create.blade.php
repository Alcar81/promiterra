@extends('template')
@section('title')
Création Grimoires | Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Création d’un grimoire') }}</strong></h2></p>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.grimoires.store') }}" method="POST">

                            @csrf
                                <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Grimoire') }}</th>
                                                <th class="text-center" scope="col">{{ __('Version') }}</th>
                                                <th class="text-center" scope="col">{{ __('Aucun Symbole') }}</th>
                                                <th class="text-center" scope="col">{{ __('Symbole Sacré') }}</th>
                                                <th class="text-center" scope="col">{{ __('Symbole Maudit') }}</th>
                                                <th class="text-center" scope="col">{{ __('Valeur') }}</th>                                                                                                                                      
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><input type="text" class="form-control" id="GrimoireName" placeholder="" value="" name="GrimoireName"></td>
                                                <td><input type="text" class="form-control" id="GrimoireVersion" placeholder="" value="" name="GrimoireVersion"></td>
                                                <td><input type="text" class="form-control" id="GrimoireNoSymbol" placeholder="" value="" name="GrimoireNoSymbol"></td>
                                                <td><input type="text" class="form-control" id="GrimoireHoly" placeholder="" value="" name="GrimoireHoly"></td>
                                                <td><input type="text" class="form-control" id="GrimoireDamn" placeholder="" value="" name="GrimoireDamn"></td>
                                                <td><input type="text" class="form-control" id="GrimoireCost" placeholder="" value="" name="GrimoireCost"></td>                                                                                     
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