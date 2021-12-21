@extends('template')
@section('title')
Édition {{ $mountshields->MountshieldName }}| Chapire 3 | L'économie
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
                          <p><h2><strong>{{ __('Édition armure monture') }} {{ $mountshields->MountshieldName }}</strong></h2></p>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        
                        <form class="form-floating" action="{{ route('trois.mountshields.update', $mountshields->id) }}" method="POST">

                            @csrf
                            <div class="row justify-content-center">
                                    
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"  style="text-align: center;" height="20px">{{ __('Montures') }}</th>
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
                                                <td><input type="text" class="form-control" id="MountShieldName" placeholder="" value="{{ old('MountShieldName') ?? $mountshields->MountShieldName }}" name="MountShieldName"></td>
                                                <td><input type="text" class="form-control" id="MountShieldVersion" placeholder="" value="{{ old('MountShieldVersion') ?? $mountshields->MountShieldVersion }}" name="MountShieldVersion"></td>
                                                <td>
                                                    <select class="form-select" id="MountShieldType" aria-label="Floating label select example" name="MountShieldType">
                                                        <option selected>{{ old('MountShieldType') ?? $mountshields->MountShieldType }}</option>
                                                        <option value="Bardes">Bardes</option>                                                        
                                                        <option value="Caparaçons">Caparaçons</option>                                             
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldPiercing" aria-label="Floating label select example" name="MountShieldPiercing">
                                                        <option selected>{{ old('MountShieldPiercing') ?? $mountshields->MountShieldPiercing }}</option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>         
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldSharp" aria-label="Floating label select example" name="MountShieldSharp">
                                                        <option selected>{{ old('MountShieldSharp') ?? $mountshields->MountShieldSharp }}</option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                          
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldBlunt" aria-label="Floating label select example" name="MountShieldBlunt">
                                                        <option selected>{{ old('MountShieldBlunt') ?? $mountshields->MountShieldBlunt }}</option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                           
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldFire" aria-label="Floating label select example" name="MountShieldFire">
                                                        <option selected>{{ old('MountShieldFire') ?? $mountshields->MountShieldFire }}</option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                           
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select" id="MountShieldSpell" aria-label="Floating label select example" name="MountShieldSpell">
                                                        <option selected>{{ old('MountShieldSpell') ?? $mountshields->MountShieldSpell }}</option>
                                                        <option value="0">0</option>                                                        
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>                                                        
                                                        <option value="75">75</option>
                                                        <option value="100">100</option>                                           
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" id="MountShieldCost" placeholder="" value="{{ old('MountShieldCost') ?? $mountshields->MountShieldCost }}" name="MountShieldCost"></td>                                                                                     
                                            </tr>
                                            
                                           
                                            
                                        </tbody>
                                    </table>
                                    
                                    
                                </div>
                            
                            <div class="container pt-4">

                                <form action="{{ route('trois.mountshields.update', $mountshields->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('trois.mountshields.destroy', $mountshields->id) }}" method="POST" class="d-inline">
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