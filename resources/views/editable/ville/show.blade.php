@extends('layouts.app')
@section('title')
{{ $ville->name }}
@endsection

<head2>
    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head2>

@section('content')


    <div class="row justify-content-center p-4">
        <div class="col-md-8">
            <div class="card">


                    <div class="card-header">
                        <div class="row justify-content-center pt-4">
                            <p><h1><strong>{{ $ville->name }}</strong></h1></p>
                        </div>
                        <div class="row justify-content-center">
                            <p>
                                <a href="{{ route('ville.city.edit', $ville->id) }}">
                                @can ('edit-users')
                                    ( modifier / supprimer )
                                @endcan
                                </a>
                            </p>
                        </div>
                        <div>
                            <p>En l’an {{ $ville->year }}</p>
                        </div>

                    </div>


                    <div class="card-body pt-4">

                        <div>
                            <p><strong>Maison : </strong>{{ $ville->house }}</p>
                        </div>

                        <div class="container border rounded pt-4">
                            <div>
                                <p><strong>Année de fondation : </strong>{{ $ville->yearfoundation }}</p>
                            </div>

                            <div>
                                <p><strong>Taille : </strong>{{ $ville->size }}</p>
                            </div>

                            <div>
                                <p><strong>Climat : </strong>{{ $ville->weather }}</p>
                            </div>

                            <div>
                                <p><strong>Accents régionaux: </strong>{{ $ville->accent1 }} {{ $ville->accent2 }}</p>
                            </div>

                            <div>
                                <p><strong>Spécialité locale : </strong>{{ $ville->localSpeciality }}</p>
                            </div>

                            <div>
                                <p><strong>Maire ou mairesse : </strong>{{ $ville->mayor }}</p>
                            </div>

                            <div>
                                <p><strong>Population urbaine : </strong>{{ $ville->urbanPopulation }}</p>
                            </div>

                            <div>
                                <p><strong>Population rural : </strong>{{ $ville->ruralPopulation }}</p>
                            </div>

                            <div>
                                <p><strong>Commerce maximal : </strong>{{ $ville->tradeMax }}</p>
                            </div>

                            <div>
                                <p><strong>Boisson locale : </strong>{{ $ville->localDrink }}</p>
                            </div>
                        </div>

                        <div class="container border rounded p-4">
                            <div>
                                <p><strong>Éducation : </strong>{{ $ville->education }}</p>
                            </div>

                            <div>
                                <p><strong>Fortification : </strong>{{ $ville->fortification }}</p>
                            </div>

                            <div>
                                <p><strong>Loi et l’ordre : </strong>{{ $ville->lawAndOrder }}</p>
                            </div>

                            <div>
                                <p><strong>Technologie : </strong>{{ $ville->technology }}</p>
                            </div>

                            <div>
                                <p><strong>Richesse : </strong>{{ $ville->wealth }}</p>
                            </div>
                        </div>

                        <div class="container border rounded p-4">
                            <p><strong>Économie</strong></p>
                                <div>
                                    <p>{{ $ville->economy1 }} {{ $ville->economy2 }} {{ $ville->economy3 }} {{ $ville->economy4 }} {{ $ville->economy5 }} {{ $ville->economy6 }} {{ $ville->economy7 }} {{ $ville->economy8 }} {{ $ville->economy9 }} {{ $ville->economy10 }}</p>
                                </div>
                        </div>

                        <div class="container border rounded p-4">
                            <div>
                                <p><strong>Offres</strong></p>
                                    <div class="border rounded p-3">
                                        <p>{{ $ville->offer1 }} {{ $ville->offer2 }}</p>
                                    </div>
                            </div>

                            <div class="pt-2">
                                <p><strong>Demandes</strong></p>
                                    <div class="border rounded p-3">
                                        <p>{{ $ville->demand1 }} {{ $ville->demand2 }}</p>
                                    </div>
                            </div>
                        </div>

                        <div class="container border rounded p-4">
                            <p><strong>Villes voisines</strong></p>
                                <div class="border rounded p-4">
                                    <p><strong>{{ $ville->nextCity1 }}</strong></p>
                                        <div class="border rounded p-3">
                                            <p><strong>Offres</strong></p>
                                            <p>{{ $ville->offer1NextCity1 }} {{ $ville->offer2NextCity1 }}</p>
                                        </div>

                                        <div class="border rounded p-3">
                                            <p><strong>Demandes</strong></p>
                                            <p>{{ $ville->demand1NextCity1 }} {{ $ville->demand2NextCity1 }}</p>
                                        </div>
                                </div>

                                <div class="border rounded p-4">
                                    <p><strong>{{ $ville->nextCity2 }}</strong></p>
                                        <div class="border rounded p-3">
                                            <p><strong>Offres</strong></p>
                                            <p>{{ $ville->offer1NextCity2 }} {{ $ville->offer2NextCity2 }}</p>
                                        </div>

                                        <div class="border rounded p-3">
                                            <p><strong>Demandes</strong></p>
                                            <p>{{ $ville->demand1NextCity2 }} {{ $ville->demand2NextCity2 }}</p>
                                        </div>
                                </div>
                        </div>

                        <div class="container border rounded p-4">
                            <p><strong>Histoire de la ville</strong></p>
                                <div class="border rounded p-4">
                                    <p>{!! $ville->story !!}</p>
                                </div>
                        </div>

                        <div class="pt-2">
                                <div>
                                    <p>Version : {{ $ville->version }}</p>
                                </div>

                                <div>
                                    <p>chapitre : {{ $ville->chapter }}</p>
                                </div>
                        </div>

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
