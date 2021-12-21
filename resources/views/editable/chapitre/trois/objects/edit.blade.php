@extends('template')
@section('title')
Édition {{ $objects->ObjectName }}| Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Édition de l’objet') }} {{ $objects->ObjectName }}</strong></h2></p>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.objects.update', $objects->id) }}" method="POST">

                            @csrf
                            <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Objet') }}</th>
                                                <th class="text-center" scope="col">{{ __('Version') }}</th>
                                                <th class="text-center" scope="col">{{ __('Effect') }}</th>
                                                <th class="text-center" scope="col">{{ __('Valeur') }}</th>                                                                                                                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><input type="text" class="form-control" id="ObjectName" placeholder="" value="{{ old('ObjectName') ?? $objects->ObjectName }}" name="ObjectName"></td>
                                                <td><input type="text" class="form-control" id="ObjectVersion" placeholder="" value="{{ old('ObjectVersion') ?? $objects->ObjectVersion }}" name="ObjectVersion"></td>
                                                <td><input type="text" class="form-control" id="ObjectEffect" placeholder="" value="{{ old('ObjectEffect') ?? $objects->ObjectEffect }}" name="ObjectEffect"></td>
                                                <td><input type="text" class="form-control" id="ObjectCost" placeholder="" value="{{ old('ObjectCost') ?? $objects->ObjectCost }}" name="ObjectCost"></td>
                                                                                          
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                    
                                    
                                    
                                </div>
                            
                            <div class="container pt-4">

                                <form action="{{ route('trois.objects.update', $objects->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('trois.objects.destroy', $objects->id) }}" method="POST" class="d-inline">
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