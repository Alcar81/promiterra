@extends('template')
@section('title')
Armures Monture | Chapire 3 | L'économie
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
                <a href="{{ route('trois.mountshields.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Id') }}</th>
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
                            @foreach($mountshields->chunk(8) as $armuremontures)
                                <div class="row justify-content-center">
                                    <tbody>
                                                                                   
                                        @foreach($armuremontures as $armuremonture)
                                            <tr>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->id }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('trois.mountshields.edit', $armuremonture->id) }}">{{ $armuremonture->MountShieldName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldVersion }}</p>
                                                </td>                                               
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldType }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldPiercing }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldSharp }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldBlunt }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldFire }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldSpell }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armuremonture->MountShieldCost }}</p>
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