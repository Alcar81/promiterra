@extends('template')
@section('title')
{{ $ville->name }} | Chapire 7 | Les cités
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

<!-- Chapitre 7 | Ville -->
    <section>
        <div class="container justify-content-center">  
            <div class="col-md-10">

                <div class="container border">
                    <div class="border">
                        <div class="row justify-content-center pt-2">
                            <h2>{{ $ville->name }}</h2>
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
                        <div class="p-2">
                            <p><strong>En l’an {{ $ville->year }}</strong></p>
                        </div>

                    </div>

                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="m-b-40">

                            <div>
                                <p><strong>Maison : </strong>{{ $ville->house }}</p>
                            </div>

                            <div class="row p-4">
                                <div class="p-4" style="width: 50%" display="inline-block">
                                    <span class="lead">
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
                                    </span>
                                </div>

                                <div class="border p-4" style="width: 50%" height="500px">
                                    <span>Place pour futur image de la ville</span>
                                </div>
                            </div>

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Éducation</td>
                                        <td><strong>{{ $ville->education }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Fortification</td>
                                        <td><strong>{{ $ville->fortification }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td style=>Loi et l’ordre</td>
                                        <td style=><strong>{{ $ville->lawAndOrder }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Technologie</td>
                                        <td><strong>{{ $ville->technology }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Richesse</td>
                                        <td><strong>{{ $ville->wealth }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>




                            <div class="pt-4">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" colspan="5" height="35px">Économie de {{ $ville->name }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td style="width: 20%" height="35px">{{ $ville->economy1 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy2 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy3 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy4 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy5 }}</td>
                                        </tr>

                                        <tr>
                                            <td style="width: 20%" height="35px">{{ $ville->economy6 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy7 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy8 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy9 }}</td>
                                            <td style="width: 20%" height="35px">{{ $ville->economy10 }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row" style="width: 20%">Offres</th>
                                            <td style="width: 20%" colspan="2">{{ $ville->offer1 }}</td>
                                            <td style="width: 20%" colspan="2">{{ $ville->offer2 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="width: 20%" height="35px">Demandes</th>
                                            <td style="width: 20%" colspan="2">{{ $ville->demand1 }}</td>
                                            <td style="width: 20%" colspan="2">{{ $ville->demand2 }}</td>
                                        </tr>
                                </tbody>
                            </table>

                            <div class="table-responsive" style="overflow-x:auto;">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" style="width: 20%">Villes Voisines</th>
                                            <th scope="col" style="width: 20%; text-align: center;" colspan="2">Offres</th>
                                            <th scope="col" style="width: 20%; text-align: center;" colspan="2">Demandes</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%">{{ $ville->nextCity1 }}</th>
                                                <td style="width: 20%" height="35px">{{ $ville->offer1NextCity1 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->offer2NextCity1 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand1NextCity1 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand2NextCity1 }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">{{ $ville->nextCity2 }}</th>
                                                <td style="width: 20%" height="35px">{{ $ville->offer1NextCity2 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->offer2NextCity2 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand1NextCity2 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand2NextCity2 }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">{{ $ville->nextCity3 }}</th>
                                                <td style="width: 20%" height="35px">{{ $ville->offer1NextCity3 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->offer2NextCity3 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand1NextCity3 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand2NextCity3 }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">{{ $ville->nextCity4 }}</th>
                                                <td style="width: 20%" height="35px">{{ $ville->offer1NextCity4 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->offer2NextCity4 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand1NextCity4 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand2NextCity4 }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">{{ $ville->nextCity5 }}</th>
                                                <td style="width: 20%" height="35px">{{ $ville->offer1NextCity5 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->offer2NextCity5 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand1NextCity5 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand2NextCity5 }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="width: 20%" height="35px">{{ $ville->nextCity6 }}</th>
                                                <td style="width: 20%" height="35px">{{ $ville->offer1NextCity6 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->offer2NextCity6 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand1NextCity6 }}</td>
                                                <td style="width: 20%" height="35px">{{ $ville->demand2NextCity6 }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="container border rounded p-4">
                                <span class="lead">
                                    <p><strong>Histoire de la ville</strong></p>
                                    <p>
                                        {!! $ville->story !!}
                                    </p>
                                </span>
                            </div>

                            <div class="row p-2" style="height: 40px;">                                
                                <div class="" style="width: 25%"><p>Version: {{ $ville->version }}</p></div>
                                <div class="" style="width: 50%; text-align: center;"><p>© Promiterra</p></div>
                                <div class="" style="width: 25%; text-align: right;"><p>Chapire {{ $ville->chapter }} | Les cités - ...</p></div>                                
                            </div>
                            

                                
                                
                                
                    
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


<!-- end: Ville -->
@endsection
