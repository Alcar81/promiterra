@extends('template')
@section('title')
Chapire 7 | Les Citées
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

<!-- Chapitre 7 Les Cités -->
<section class="background-black p-b-60">
        <div class="container">
            <div class="row" display="inline-block">

                <div class="card-body">
                <a href="{{ route('ville.city.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Ville') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th> 
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Page') }}</th>                                                                                        
                                        </tr>                                        
                                    </thead>
                            @foreach($cities->chunk(8) as $villes)
                                <div class="row justify-content-center">
                                    <tbody>
                                        <tr>                                           
                                            @foreach($villes as $ville)
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('ville.city.show', $ville->id) }}">{{ $ville->name }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $ville->version }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $ville->page }}</p>
                                                </td>
                                                                                                
                                            @endforeach                                            
                                        </tr>
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

<!-- end: Chapitre 7 Les villes -->
@endsection
