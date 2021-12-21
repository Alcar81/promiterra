@extends('template')
@section('title')
Canons | Chapire 3 | L'économie
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

<!-- Chapitre 3 Les Montures -->
<section class="background-black p-b-60">
        <div class="container">
            <div class="row" display="inline-block">
            
                <div class="card-body">
                <a href="{{ route('trois.cannons.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Id') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Canons') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Mouvement') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Portée') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Éclat') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Dégâts') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Toucher') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Problème') }}</th>                                          
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('$ Boulet') }}</th>                                             
                                        </tr>                                        
                                    </thead>
                            @foreach($cannons->chunk(8) as $canons)
                                <div class="row justify-content-center">
                                    <tbody>
                                                                                   
                                        @foreach($canons as $canon)
                                            <tr>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->id }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('trois.cannons.edit', $canon->id) }}">{{ $canon->CannonName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonVersion }}</p>
                                                </td>                                               
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonMovement }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonScope }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonRange }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonDamage }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonTouch }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonTrouble }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonCost }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $canon->CannonBallCost }}</p>
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
<!-- end: Chapitre 3 Les Montures -->
@endsection