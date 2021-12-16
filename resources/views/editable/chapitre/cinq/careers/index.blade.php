@extends('template')
@section('title')
Chapire 5 | Les carrières
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

<!-- Chapitre 5 Les Carrières -->
<section class="background-black p-b-60">
        <div class="container">
            <div class="row" display="inline-block">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Carrière') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th> 
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Page') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P1') }}</th>                                            
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P2') }}</th>                                            
                                        </tr>                                        
                                    </thead>
                            @foreach($careers->chunk(8) as $carrieres)
                                <div class="row justify-content-center">
                                    <tbody>
                                        <tr>                                           
                                            @foreach($carrieres as $carriere)
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('cinq.careers.show', $carriere->id) }}">{{ $carriere->CareerClassName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $carriere->CareerVersion }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $carriere->CareerIDClass }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $carriere->CareerParent1Name }} ({{ $carriere->CareerIDParent1 }})</p>
                                                </td>                                                
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $carriere->CareerParent2Name }} ({{ $carriere->CareerIDParent2 }})</p>
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
<!-- end: Chapitre 5 Les Carrières -->
@endsection