@extends('template')
@section('title')
Armures | Chapire 3 | L'économie
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

<!-- Chapitre 3 Les Armures -->
<section class="background-black p-b-60">
        <div class="container">
            <div class="row" display="inline-block">
            
                <div class="card-body">
                <a href="{{ route('trois.armors.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Id') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Armure') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Cathégorie') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Perçant') }}</th> 
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Tranchant') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Contondant') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Feu') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Magie') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Encombrement') }}</th>                                              
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P1') }}</th> 
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P2') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Coût') }}</th>                                             
                                        </tr>                                        
                                    </thead>
                            @foreach($armors->chunk(8) as $armures)
                                <div class="row justify-content-center">
                                    <tbody>
                                                                                   
                                        @foreach($armures as $armure)
                                            <tr>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->id }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('trois.armors.edit', $armure->id) }}">{{ $armure->ArmorName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorVersion }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorCategory }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorPiercing }}</p>
                                                </td>                                                
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorSharp }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorBlunt }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorFire }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorSpell}}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorClutter }}</p>
                                                </td>                                                
                                                
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorProperty1 }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorProperty2 }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $armure->ArmorCost }}</p>
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
<!-- end: Chapitre 3 Les Armures -->
@endsection