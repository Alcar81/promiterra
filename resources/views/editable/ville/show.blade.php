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
                                <p><strong>Accent rédional 1 : </strong>{{ $ville->accent1 }}</p>
                            </div>

                            <div>
                                <p><strong>Accent rédional 2 : </strong>{{ $ville->accent2 }}</p>
                            </div>

                            <div>
                                <p><strong>Spécialité locale : </strong>{{ $ville->localSpeciality }}</p>
                            </div>

                            <div>
                                <p><strong>Maire ou mairesse : </strong>{{ $ville->mayor }}</p>
                            </div>

                            <div>
                                <p><strong>Population urbaine : </strong>{{ $ville->urbanPopulaiton }}</p>
                            </div>

                            <div>
                                <p><strong>Population rural : </strong>{{ $ville->ruralPopulaiton }}</p>
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
                                    <p>{{ $ville->economy1 }}</p>
                                    <p>{{ $ville->economy2 }}</p>
                                    <p>{{ $ville->economy3 }}</p>
                                    <p>{{ $ville->economy4 }}</p>
                                    <p>{{ $ville->economy5 }}</p>
                                    <p>{{ $ville->economy6 }}</p>
                                    <p>{{ $ville->economy7 }}</p>
                                    <p>{{ $ville->economy8 }}</p>
                                    <p>{{ $ville->economy9 }}</p>
                                    <p>{{ $ville->economy10 }}</p>
                                </div>
                        </div>

                        <div class="container border rounded p-4">
                            <div>
                                <p><strong>Offres</strong></p>
                                    <div class="border rounded p-3">
                                        <p>{{ $ville->offer1 }}</p>
                                        <p>{{ $ville->offer2 }}</p>
                                    </div>
                            </div>

                            <div class="pt-2">
                                <p><strong>Demandes</strong></p>
                                    <div class="border rounded p-3">
                                        <p>{{ $ville->demand1 }}</p>
                                        <p>{{ $ville->demand2 }}</p>
                                    </div>
                            </div>
                        </div>

                        <div class="container border rounded p-4">
                            <p><strong>Villes voisines</strong></p>
                                <div class="border rounded p-4">
                                    <p><strong>{{ $ville->nextCity1 }}</strong></p>
                                        <div class="border rounded p-3">
                                            <p><strong>Offres</strong></p>
                                            <p>{{ $ville->offer1NextCity1 }}</p>
                                            <p>{{ $ville->offer2NextCity1 }}</p>
                                        </div>

                                        <div class="border rounded p-3">
                                            <p><strong>Demandes</strong></p>
                                            <p>{{ $ville->demand1NextCity1 }}</p>
                                            <p>{{ $ville->demand2NextCity1 }}</p>
                                        </div>
                                </div>

                                <div class="border rounded p-4">
                                    <p><strong>{{ $ville->nextCity2 }}</strong></p>
                                        <div class="border rounded p-3">
                                            <p><strong>Offres</strong></p>
                                            <p>{{ $ville->offer1NextCity2 }}</p>
                                            <p>{{ $ville->offer2NextCity2 }}</p>
                                        </div>

                                        <div class="border rounded p-3">
                                            <p><strong>Demandes</strong></p>
                                            <p>{{ $ville->demand1NextCity2 }}</p>
                                            <p>{{ $ville->demand2NextCity2 }}</p>
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
