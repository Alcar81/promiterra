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
                        
                        <form class="form-floating" action="{{ route('trois.mountshields.store') }}" method="POST">

                            @csrf
                                <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Armures') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Type') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Perçant') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Tranchant') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Contondant') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Feu') }}</th>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Sortilège') }}</th>                                          
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>                                                                                                                                     
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="MountShieldName" placeholder="" value="" name="MountShieldName"></td>
                                                <td><input type="text" class="form-control" id="MountShieldVersion" placeholder="" value="" name="MountShieldVersion"></td>
                                                <td>
                                                    <select class="form-select" id="MountShieldType" aria-label="Floating label select example" name="MountShieldType">
                                                        <option selected></option>
                                                        <option value="Bardes">Bardes</option>                                                        
                                                        <option value="Caparaçons">Caparaçons</option>                                             
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldPiercing" aria-label="Floating label select example" name="MountShieldPiercing">
                                                        <option selected></option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>         
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldSharp" aria-label="Floating label select example" name="MountShieldSharp">
                                                        <option selected></option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                          
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldBlunt" aria-label="Floating label select example" name="MountShieldBlunt">
                                                        <option selected></option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                           
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldFire" aria-label="Floating label select example" name="MountShieldFire">
                                                        <option selected></option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                           
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldSpell" aria-label="Floating label select example" name="MountShieldSpell">
                                                        <option selected></option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                           
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" id="MountShieldCost" placeholder="" value="" name="MountShieldCost"></td>                                                                                     
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