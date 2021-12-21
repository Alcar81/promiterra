@extends('template')
@section('title')
Création Objet | Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Création d’un objet') }}</strong></h2></p>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.objects.store') }}" method="POST">

                            @csrf
                                <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Objet') }}</th>
                                                <th class="text-center" scope="col">{{ __('Version') }}</th>
                                                <th class="text-center" scope="col">{{ __('Effet') }}</th>
                                                <th class="text-center" scope="col">{{ __('Valeur') }}</th>                                                                                                                                      
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><input type="text" class="form-control" id="ObjectName" placeholder="" value="" name="ObjectName"></td>
                                                <td><input type="text" class="form-control" id="ObjectVersion" placeholder="" value="" name="ObjectVersion"></td>
                                                <td><input type="text" class="form-control" id="ObjectEffect" placeholder="" value="" name="ObjectEffect"></td>
                                                <td><input type="text" class="form-control" id="ObjectCost" placeholder="" value="" name="ObjectCost"></td>
                                                                                     
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