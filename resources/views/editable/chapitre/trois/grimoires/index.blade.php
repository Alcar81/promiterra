@extends('template')
@section('title')
Grimoires | Chapire 3 | L'économie
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

<!-- Chapitre 5 Les Grimoires -->
<section class="background-black p-b-60">
        <div class="container">
            <div class="row" display="inline-block">
            
                <div class="card-body">
                <a href="{{ route('trois.grimoires.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Id') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Grimoires') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Aucun symbole') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Symbole Sacré') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Symbole Maudit') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Valeur') }}</th>
                                                                                         
                                        </tr>                                        
                                    </thead>
                            @foreach($grimoires->chunk(8) as $grims)
                                <div class="row justify-content-center">
                                    <tbody>
                                                                                   
                                        @foreach($grims as $grimoire)
                                            <tr>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $grimoire->id }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('trois.grimoires.edit', $grimoire->id) }}">{{ $grimoire->GrimoireName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $grimoire->GrimoireVersion }}</p>
                                                </td>                                               
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $grimoire->GrimoireNoSymbol }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $grimoire->GrimoireHoly }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $grimoire->GrimoireDamn }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $grimoire->GrimoireCost }}</p>
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
<!-- end: Chapitre 5 Les Carrières -->
@endsection