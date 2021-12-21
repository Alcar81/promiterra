@extends('template')
@section('title')
Édition {{ $herbales->HerbaleName }}| Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Édition de l’herbe') }} {{ $herbales->HerbaleName }}</strong></h2></p>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.herbales.update', $herbales->id) }}" method="POST">

                            @csrf
                            <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Herbe') }}</th>
                                                <th class="text-center" scope="col">{{ __('Version') }}</th>
                                                <th class="text-center" scope="col">{{ __('Point de vie') }}</th>
                                                <th class="text-center" scope="col">{{ __('Valeur') }}</th>                                                                                                                                      
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><input type="text" class="form-control" id="HerbaleName" placeholder="" value="{{ old('HerbaleName') ?? $herbales->HerbaleName }}" name="HerbaleName"></td>
                                                <td><input type="text" class="form-control" id="HerbaleVersion" placeholder="" value="{{ old('HerbaleVersion') ?? $herbales->HerbaleVersion }}" name="HerbaleVersion"></td>
                                                <td><input type="text" class="form-control" id="HerbalePv" placeholder="" value="{{ old('HerbalePv') ?? $herbales->HerbalePv }}" name="HerbalePv"></td>
                                                <td><input type="text" class="form-control" id="HerbaleCost" placeholder="" value="{{ old('HerbaleCost') ?? $herbales->HerbaleCost }}" name="HerbaleCost"></td>                                                                                     
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                    
                                    
                                </div>
                            
                            <div class="container pt-4">

                                <form action="{{ route('trois.herbales.update', $herbales->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('trois.herbales.destroy', $herbales->id) }}" method="POST" class="d-inline">
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