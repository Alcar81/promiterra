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
                            <p><strong>En l’an {{ $ville->year }}</strong></p>
                        </div>

                    </div>


                    <div class="card-body pt-4">

                        <div class="container border rounded p-4">

                            <div>
                                <p><strong>Maison : </strong>{{ $ville->house }}</p>
                            </div>

                            <div class="row p-4">
                                <div class="p-4" style="width: 50%" display="inline-block">
                                    <p><strong>Année de fondation : </strong>{{ $ville->yearfoundation }}</p>
                                    <p><strong>Taille : </strong>{{ $ville->size }}</p>
                                    <p><strong>Climat : </strong>{{ $ville->weather }}</p>
                                    <p><strong>Accents régionaux: </strong>{{ $ville->accent1 }} {{ $ville->accent2 }}</p>
                                    <p><strong>Spécialité locale : </strong>{{ $ville->localSpeciality }}</p>
                                    <p><strong>Maire ou mairesse : </strong>{{ $ville->mayor }}</p>
                                    <p><strong>Population urbaine : </strong>{{ $ville->urbanPopulation }}</p>
                                    <p><strong>Population rural : </strong>{{ $ville->ruralPopulation }}</p>
                                    <p><strong>Commerce maximal : </strong>{{ $ville->tradeMax }}</p>
                                    <p><strong>Boisson locale : </strong>{{ $ville->localDrink }}</p>
                                </div>

                                <div class="border p-4" style="width: 50%" height="500px">
                                    Place pour futur image de la ville
                                </div>
                            </div>

                            <div class="container">

                                <table class="table table-bordered">

                                    <tbody>
                                        <tr>
                                            <td style="width: 150px" height="35px">Éducation</td>
                                                <td><strong>{{ $ville->education }}</strong></td>
                                            <td>Fortification</td>
                                                <td><strong>{{ $ville->fortification }}</strong></td>
                                            <td>Loi et l’ordre</td>
                                                <td><strong>{{ $ville->lawAndOrder }}</strong></td>
                                            <td>Technologie</td>
                                                <td><strong>{{ $ville->technology }}</strong></td>
                                            <td>Richesse</td>
                                                <td><strong>{{ $ville->wealth }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>

                            <div class="container">


                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col" colspan="5" style="width: 200px;" height="35px">Économie</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 200px" height="35px">{{ $ville->economy1 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy2 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy3 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy4 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy5 }}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px" height="35px">{{ $ville->economy6 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy7 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy8 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy9 }}</td>
                                                <td style="width: 200px" height="35px">{{ $ville->economy10 }}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                            </div>

                            <div class="container">

                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col" colspan="5" style="width: 200px; text-align: center" height="35px">{{ $ville->name }}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px" height="35px">Offres</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer1 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer2 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 200px" height="35px">Demandes</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand1 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand2 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-bordered">
                                        <tbody>
                                        <thead class="thead-light">

                                            <tr>
                                                <th scope="col" style="width: 200px" height="35px">Villes Voisines</th>
                                                <th scope="col" colspan="2" style="width: 200px; text-align: center" height="35px">Offres</th>
                                                <th scope="col" colspan="2" style="width: 200px; text-align: center" height="35px">Demandes</th>
                                            </tr>
                                            </thead>
                                            <tr>
                                                <th scope="row">{{ $ville->nextCity1 }}</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer1NextCity1 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer2NextCity1 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand1NextCity1 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand2NextCity1 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $ville->nextCity2 }}</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer1NextCity2 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer2NextCity2 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand1NextCity2 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand2NextCity2 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 200px" height="35px">{{ $ville->nextCity3 }}</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer1NextCity3 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer2NextCity3 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand1NextCity3 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand2NextCity3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 200px" height="35px">{{ $ville->nextCity4 }}</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer1NextCity4 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer2NextCity4 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand1NextCity4 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand2NextCity4 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 200px" height="35px">{{ $ville->nextCity5 }}</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer1NextCity5 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer2NextCity5 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand1NextCity5 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand2NextCity5 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 200px" height="35px">{{ $ville->nextCity6 }}</th>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer1NextCity6 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->offer2NextCity6 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand1NextCity6 }}</td>
                                                    <td style="width: 200px" height="35px">{{ $ville->demand2NextCity6 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                            </div>

                            <div class="container border rounded p-4">
                                <p><strong>Histoire de la ville</strong></p>
                                    <div>
                                        <p>{!! $ville->story !!}</p>
                                    </div>
                            </div>

                            <div class="row p-4">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="width: 10px; text-align: right" height="35px">Version :</th>
                                                <td style="width: 10px" height="35px">{{ $ville->version }}</td>
                                            <th scope="row" style="width: 50px" height="35px"></th>
                                                <td style="width: 50px" height="35px"></td>
                                            <th scope="row" style="width: 50px" height="35px"></th>
                                                <td style="width: 50px" height="35px"></td>
                                            <th scope="row" style="width: 50px" height="35px"></th>
                                                <td style="width: 50px" height="35px"></td>
                                            <th scope="row" style="width: 20px; text-align: right" height="35px">chapitre :</th>
                                                <td style="width: 10px" height="35px">{{ $ville->chapter }}</td>
                                        </tr>

                                    </tbody>
                                </table>
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
