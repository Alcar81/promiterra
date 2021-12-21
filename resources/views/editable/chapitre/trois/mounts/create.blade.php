@extends('template')
@section('title')
Création Monture | Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Création d’une monture') }}</strong></h2></p>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.mounts.store') }}" method="POST">

                            @csrf
                                <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Monture') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Pv') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Armure') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Physique') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Mental') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Réaction') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Mouvement') }}</th>                                          
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>                                                                                                                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="MountName" placeholder="" value="" name="MountName"></td>
                                                <td><input type="text" class="form-control" id="MountVersion" placeholder="" value="" name="MountVersion"></td>
                                                <td><input type="text" class="form-control" id="MountPv" placeholder="" value="" name="MountPv"></td>
                                                <td>
                                                    <select class="form-select" id="MountShield" aria-label="Floating label select example" name="MountShield">
                                                        <option selected></option>
                                                        <option value="Bardes">Bardes</option>                                                        
                                                        <option value="Caparaçons">Caparaçons</option>                                             
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountPhysic" aria-label="Floating label select example" name="MountPhysic">
                                                        <option selected></option>
                                                        <option value="1">1</option>                                                        
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>                                                        
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>                                                        
                                                        <option value="6">6</option> 
                                                        <option value="7">7</option>                                                        
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>                                          
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountMental" aria-label="Floating label select example" name="MountMental">
                                                        <option selected></option>
                                                        <option value="1">1</option>                                                        
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>                                                        
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>                                                        
                                                        <option value="6">6</option> 
                                                        <option value="7">7</option>                                                        
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>                                          
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountReact" aria-label="Floating label select example" name="MountReact">
                                                        <option selected></option>
                                                        <option value="1">1</option>                                                        
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>                                                        
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>                                                        
                                                        <option value="6">6</option> 
                                                        <option value="7">7</option>                                                        
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>                                          
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" id="MountMovement" placeholder="" value="" name="MountMovement"></td>
                                                <td><input type="text" class="form-control" id="MountCost" placeholder="" value="" name="MountCost"></td>                                                                                     
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