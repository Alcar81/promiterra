@extends('template')
@section('title')
Armes | Chapire 3 | L'économie
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
                <a href="{{ route('trois.weapons.create') }}"><h3>Ajouter</h3></a>
                    <div class="row justify-content-center">
                        <table class="table table-bordered" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Id') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Arme') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Version') }}</th> 
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Catégorie') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Type 1') }}</th>                                            
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Type 2') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Mains') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Portée') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Attaque') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Critique') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Face') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Flanc') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Back') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Maladresse') }}</th>  
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P1') }}</th> 
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('P2') }}</th>
                                            <th scope="col"  style="text-align: center;" height="20px">{{ __('Coût') }}</th>                                             
                                        </tr>                                        
                                    </thead>
                            @foreach($weapons->chunk(8) as $armes)
                                <div class="row justify-content-center">
                                    <tbody>
                                        <tr>                                           
                                            @foreach($armes as $arme)
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->id }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <a href="{{ route('trois.weapons.edit', $arme->id) }}">{{ $arme->WeaponName }}</a>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponVersion }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponCategory }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponType1 }}</p>
                                                </td>                                                
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponType2 }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponNumberHands }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponScope }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponAttack }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponCritical }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponFace }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponFlank }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponBack }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponClumsiness }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponProperty1 }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponProperty2 }}</p>
                                                </td>
                                                <td scope="row" style="text-align: center;" height="10px">
                                                    <p>{{ $arme->WeaponCost }}</p>
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