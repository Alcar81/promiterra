@extends('template')
@section('title')
Boublier | Chapire 3 | L'économie
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
                <a href="{{ route('trois.shields.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Id') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Boublier') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th> 
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Physique') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Ch.action') }}</th>                                            
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Face') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Flanc') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Dos') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P1') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P2') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>                                             
                                        </tr>                                        
                                    </thead>
                            @foreach($shields->chunk(8) as $boucliers)
                                <div class="row justify-content-center">
                                    <tbody>
                                        @foreach($boucliers as $bouclier)
                                            <tr>                                           
                                            
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->id }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('trois.shields.edit', $bouclier->id) }}">{{ $bouclier->ShieldName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldVersion }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldPhysic }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldMinusFields }}</p>
                                                </td>                                                
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldFace }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldFlank }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldBack }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldProperty1 }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldProperty2 }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $bouclier->ShieldCost }}</p>
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