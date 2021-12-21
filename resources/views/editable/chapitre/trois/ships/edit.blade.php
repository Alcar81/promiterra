@extends('template')
@section('title')
Édition {{ $ships->ShipsdName }}| Chapire 3 | L'économie
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
                    <p><h2><strong>{{ $ships->ShipsdName }}</strong></h2></p>
                </div>
            </div>



            <div class="card-body p-4">
                
                <form class="form-floating" action="{{ route('trois.ships.update', $ships->id) }}" method="POST">

                    @csrf
                    <div class="row justify-content-center">
                        
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Navires') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th> 
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Type') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('H') }}</th>                                            
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Équ') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Pas') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Can') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Car') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Sup') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Vit') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Man') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Pv') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>                                                                                        
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" id="ShipdName" placeholder="" value="{{ old('ShipName') ?? $ships->ShipName }}" name="ShipName"></td>
                                    <td><input type="text" class="form-control" id="ShipVersion" placeholder="" value="{{ old('ShipVersion') ?? $ships->ShipVersion }}" name="ShipVersion"></td>
                                    <td>
                                        <select class="form-select" id="ShipType" aria-label="Floating label select example" name="ShipType">
                                            <option selected>{{ old('ShipType') ?? $ships->ShipType }}</option>
                                            <option value="Navires à rame">Navires à rame</option>                                                        
                                            <option value="Navires de commerce à voile">Navires de commerce à voile</option>
                                            <option value="Navires de guerre à voile">Navires de guerre à voile"</option>                                                                                                                                        
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" id="ShipHightsea" aria-label="Floating label select example" name="ShipHightsea">
                                            <option selected>{{ old('ShipHightsea') ?? $ships->ShipHightsea }}</option>
                                            <option value="yes">Oui</option>                                                        
                                            <option value="no">Non</option>                                                                                                       
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" id="ShipNbrCrew" placeholder="" value="{{ old('ShipNbrCrew') ?? $ships->ShipNbrCrew }}" name="ShipNbrCrew"></td>
                                    <td><input type="text" class="form-control" id="ShipNbrPassenger" placeholder="" value="{{ old('ShipNbrPassenger') ?? $ships->ShipNbrPassenger }}" name="ShipNbrPassenger"></td> 
                                    <td><input type="text" class="form-control" id="ShipNbrCannon" placeholder="" value="{{ old('ShipNbrPassenger') ?? $ships->ShipNbrPassenger }}" name="ShipNbrCannon"></td> 
                                    <td><input type="text" class="form-control" id="ShipNbrCargo" placeholder="" value="{{ old('ShipNbrCargo') ?? $ships->ShipNbrCargo }}" name="ShipNbrCargo"></td> 
                                    <td><input type="text" class="form-control" id="ShipArea" placeholder="" value="{{ old('ShipArea') ?? $ships->ShipArea }}" name="ShipArea"></td> 
                                    <td><input type="text" class="form-control" id="ShipManeuverability" placeholder="{{ old('ShipManeuverability') ?? $ships->ShipManeuverability }}" value="" name="ShipManeuverability"></td> 
                                    <td><input type="text" class="form-control" id="ShipPv" placeholder="" value="{{ old('ShipPv') ?? $ships->ShipPv }}" name="ShipPv"></td> 
                                    <td><input type="text" class="form-control" id="ShipCost" placeholder="" value="{{ old('ShipCost') ?? $ships->ShipCost }}" name="ShipCost"></td>                                            
                                </tr>                                 
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>                                           
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Équ') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Pas') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Can') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Car') }}</th>         
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                    
                                    <td><input type="text" class="form-control" id="ShipNbrCrew" placeholder="" value="{{ old('ShipNbrCrew') ?? $ships->ShipNbrCrew }}" name="ShipNbrCrew"></td>
                                    <td><input type="text" class="form-control" id="ShipNbrPassenger" placeholder="" value="{{ old('ShipNbrPassenger') ?? $ships->ShipNbrPassenger }}" name="ShipNbrPassenger"></td> 
                                    <td><input type="text" class="form-control" id="ShipNbrCannon" placeholder="" value="{{ old('ShipNbrPassenger') ?? $ships->ShipNbrPassenger }}" name="ShipNbrCannon"></td> 
                                    <td><input type="text" class="form-control" id="ShipNbrCargo" placeholder="" value="{{ old('ShipNbrCargo') ?? $ships->ShipNbrCargo }}" name="ShipNbrCargo"></td>
                                </tr>                                 
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr> 
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Sup') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Vit') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Man') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Pv') }}</th>
                                    <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>                                                                                        
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <td><input type="text" class="form-control" id="ShipArea" placeholder="" value="{{ old('ShipArea') ?? $ships->ShipArea }}" name="ShipArea"></td> 
                                    <td><input type="text" class="form-control" id="ShipManeuverability" placeholder="{{ old('ShipManeuverability') ?? $ships->ShipManeuverability }}" value="" name="ShipManeuverability"></td> 
                                    <td><input type="text" class="form-control" id="ShipPv" placeholder="" value="{{ old('ShipPv') ?? $ships->ShipPv }}" name="ShipPv"></td> 
                                    <td><input type="text" class="form-control" id="ShipCost" placeholder="" value="{{ old('ShipCost') ?? $ships->ShipCost }}" name="ShipCost"></td>                                            
                                </tr>                                 
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="container pt-4">

                        <form action="{{ route('trois.ships.update', $ships->id) }}" method="post" class="btn-group">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                        </form>

                    </div>



                    <div class="container pt-4">
                        <form action="{{ route('trois.ships.destroy', $ships->id) }}" method="POST" class="d-inline">
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