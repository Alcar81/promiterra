@extends('template')
@section('title')
Navires | Chapire 3 | L'économie
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

<!-- Chapitre 3 Les Boucliers -->
<section class="background-black p-b-60">
        <div class="container">
            <div class="row" display="inline-block">
            
                <div class="card-body">
                    <a href="{{ route('trois.ships.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Id') }}</th>
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
                            @foreach($ships->chunk(8) as $navires)
                                <div class="row justify-content-center">
                                    <tbody>
                                        @foreach($navires as $navire)
                                            <tr>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->id }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('trois.ships.edit', $navire->id) }}">{{ $navire->ShipName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipVersion }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipType }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipHightsea }}</p>
                                                </td>                                                
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipNbrCrew }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipNbrPassenger }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipNbrCannon }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipNbrCargo }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipArea }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipSpeed }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipManeuverability }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipPv }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $navire->ShipCost }}</p>
                                                </td>                                        
                                            </tr>    
                                        @endforeach                                            
                                        
                                    </tbody>
                                </div>
                            @endforeach
                        </table>                       
                    </div>
                </div>               
            </div>
        </div>
    </section>

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>
<!-- end: Chapitre 3 Les Boucliers -->
@endsection