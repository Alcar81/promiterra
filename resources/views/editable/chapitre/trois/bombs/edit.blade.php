@extends('template')
@section('title')
Édition {{ $bombs->BombName }}| Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Édition de la bombe') }} {{ $bombs->BombName }}</strong></h2></p>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.bombs.update', $bombs->id) }}" method="POST">

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
                                            <td><input type="text" class="form-control" id="BombName" placeholder="" value="{{ old('BombName') ?? $bombs->BombName }}" name="BombName"></td>
                                            <td><input type="text" class="form-control" id="BombVersion" placeholder="" value="{{ old('BombVersion') ?? $bombs->BombVersion }}" name="BombVersion"></td>
                                            <td><input type="text" class="form-control" id="BombType1" placeholder="" value="{{ old('BombType1') ?? $bombs->BombType1 }}" name="BombType1"></td>
                                            <td><input type="text" class="form-control" id="BombType2" placeholder="" value="{{ old('BombType2') ?? $bombs->BombType2 }}" name="BombType2"></td>
                                            <td><input type="text" class="form-control" id="BombR1" placeholder="" value="{{ old('BombR1') ?? $bombs->BombR1 }}" name="BombR1"></td>
                                            <td><input type="text" class="form-control" id="BombR2" placeholder="" value="{{ old('BombR2') ?? $bombs->BombR2 }}" name="BombR2"></td> 
                                            <td><input type="text" class="form-control" id="BombR3" placeholder="" value="{{ old('BombR3') ?? $bombs->BombR3 }}" name="BombR3"></td>                                                                                      
                                            <td><input type="text" class="form-control" id="BombR4" placeholder="" value="{{ old('BombR4') ?? $bombs->BombR4 }}" name="BombR4"></td> 
                                            <td><input type="text" class="form-control" id="BombR5" placeholder="" value="{{ old('BombR5') ?? $bombs->BombR5 }}" name="BombR5"></td> 
                                            <td><input type="text" class="form-control" id="BombClumsiness" placeholder="" value="{{ old('BombClumsiness') ?? $bombs->BombClumsiness }}" name="BombClumsiness"></td>
                                            <td><input type="text" class="form-control" id="BombCost" placeholder="" value="{{ old('BombCost') ?? $bombs->BombCost }}" name="BombCost"></td> 
                                        </tr>                                           
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                            
                            <div class="container pt-4">

                                <form action="{{ route('trois.bombs.update', $bombs->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('trois.bombs.destroy', $bombs->id) }}" method="POST" class="d-inline">
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