@extends('template')
@section('title')
Chapire 7 | Les produits commerciaux
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

                <!-- Menu villes -->
                @include('partials.menus.menuVilles')
                <!-- end: Menu villes -->



                <div class="card" display="flex">
                    <div class="card-body p-4">


                        <div class="card">
                            <div class="card-body pt-4">
                                <div class="card-header">
                                    <div class="heading heading-center m-b-40 pt-4">
                                        <h2>Produits commerciaux</h2>
                                    </div>
                                    <div class="row justify-content-center">
                                        <p>
                                            <a href="">
                                            @can ('edit-users')
                                                ( modifier / supprimer )
                                            @endcan
                                            </a>
                                        </p>
                                    </div>
                                </div>



                                <div class="row p-4">
                                    <div class="col-md-12">
                                        <div class="m-b-40">

                                            <span class="lead">
                                                <p>Voici tous les produits existants ainsi que le poids en kilogramme par pièce d’or pour calculer la cargaison maximale d’un navire ou d’une charrette.
                                                </p>
                                            </span>

                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" style="width: 40%;">Matières minérales</th>
                                                    <th scope="col" style="width: 10%;">Kilo.</th>
                                                    <th scope="col" style="width: 40%;">Matières minérales</th>
                                                    <th scope="col" style="width: 10%;">Kilo. </th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <thead class="">
                                                            <th scope="row">Argent</th>
                                                                <td style="text-align: center">0.5</td>
                                                            <th scope="row">Or</th>
                                                                <td style="text-align: center">0.05</td>
                                                        </thead>
                                                    </tr>
                                                    <tr>
                                                        <thead class="">
                                                            <th scope="row">Cuivre</th>
                                                                <td style="text-align: center">5</td>
                                                            <th scope="row">Pierre de construction</th>
                                                                <td style="text-align: center">30</td>
                                                        </thead>
                                                    </tr>
                                                    <tr>
                                                        <thead class="">
                                                            <th scope="row">fer</th>
                                                                <td style="text-align: center">1</td>
                                                            <th scope="row">Pierres précieuses</th>
                                                                <td style="text-align: center">0.01</td>
                                                        </thead>
                                                    </tr>
                                                    <tr>
                                                        <thead class="">
                                                            <th scope="row">Marbre</th>
                                                                <td style="text-align: center">2</td>
                                                            <th scope="row">Salpêtre</th>
                                                                <td style="text-align: center">0.5</td>
                                                        </thead>
                                                    </tr>
                                                    <tr>
                                                        <thead class="">
                                                            <th scope="row">Mercure</th>
                                                                <td style="text-align: center">0.05</td>
                                                            <th scope="row">Sel</th>
                                                                <td style="text-align: center">5</td>
                                                        </thead>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 40%;">Matières végétales</th>
                                                <th scope="col" style="width: 10%;">Kilo.</th>
                                                <th scope="col" style="width: 40%;">Matières végétales</th>
                                                <th scope="col" style="width: 10%;">Kilo. </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Bois de construction</th>
                                                            <td style="text-align: center">10</td>
                                                        <th scope="row">Fruits séchés</th>
                                                            <td style="text-align: center">15</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Blé</th>
                                                            <td style="text-align: center">15</td>
                                                        <th scope="row">Plantes médicinales </th>
                                                            <td style="text-align: center">0.1</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Café </th>
                                                            <td style="text-align: center">1</td>
                                                        <th scope="row">Tabac</th>
                                                            <td style="text-align: center">2</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Cotton</th>
                                                            <td style="text-align: center">5</td>
                                                        <th scope="row">Thé</th>
                                                            <td style="text-align: center">5</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Épices exotiques</th>
                                                            <td style="text-align: center">0.05</td>
                                                        <th scope="row">Riz</th>
                                                            <td style="text-align: center">10</td>
                                                    </thead>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 40%;">Matières animales</th>
                                                <th scope="col" style="width: 10%;">Kilo.</th>
                                                <th scope="col" style="width: 40%;">Matières animales</th>
                                                <th scope="col" style="width: 10%;">Kilo. </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Cire</th>
                                                            <td style="text-align: center">10</td>
                                                        <th scope="row">Miel</th>
                                                            <td style="text-align: center">2</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Cuir</th>
                                                            <td style="text-align: center">2</td>
                                                        <th scope="row">Poisson séché</th>
                                                            <td style="text-align: center">5</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Fourrure</th>
                                                            <td style="text-align: center">5</td>
                                                        <th scope="row">Trophée de monstre</th>
                                                            <td style="text-align: center">1</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Ivoire</th>
                                                            <td style="text-align: center">0.1</td>
                                                        <th scope="row">Soie</th>
                                                            <td style="text-align: center">0.05</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Laine</th>
                                                            <td style="text-align: center">5</td>
                                                        <th scope="row">Viande séchée</th>
                                                            <td style="text-align: center">5</td>
                                                    </thead>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 40%;">Produits de consommation</th>
                                                <th scope="col" style="width: 10%;">Kilo.</th>
                                                <th scope="col" style="width: 40%;">Produits de consommation</th>
                                                <th scope="col" style="width: 10%;">Kilo. </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Alcool fort</th>
                                                            <td style="text-align: center">0.1</td>
                                                        <th scope="row">Médicaments</th>
                                                            <td style="text-align: center">0.1</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Bière</th>
                                                            <td style="text-align: center">1</td>
                                                        <th scope="row">Parfum</th>
                                                            <td style="text-align: center">2</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Chocolat</th>
                                                            <td style="text-align: center">0.1</td>
                                                        <th scope="row">Sucre</th>
                                                            <td style="text-align: center">1</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Encens</th>
                                                            <td style="text-align: center">0.2</td>
                                                        <th scope="row">Teinture</th>
                                                            <td style="text-align: center">2</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Huile</th>
                                                            <td style="text-align: center">0.5</td>
                                                        <th scope="row">Vin</th>
                                                            <td style="text-align: center">0.5</td>
                                                    </thead>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col" style="width: 40%;">Produits durables</th>
                                                <th scope="col" style="width: 10%;">Kilo.</th>
                                                <th scope="col" style="width: 40%;">Produits durables</th>
                                                <th scope="col" style="width: 10%;">Kilo. </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Bijoux</th>
                                                            <td style="text-align: center">0.01</td>
                                                        <th scope="row">Poteries</th>
                                                            <td style="text-align: center">10</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Céramique</th>
                                                            <td style="text-align: center">2</td>
                                                        <th scope="row">Objets d’arts</th>
                                                            <td style="text-align: center">0.1</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Haute couture</th>
                                                            <td style="text-align: center">0.2</td>
                                                        <th scope="row">Objets religieux</th>
                                                            <td style="text-align: center">0.5</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Papier</th>
                                                            <td style="text-align: center">0.5</td>
                                                        <th scope="row">Tissu</th>
                                                            <td style="text-align: center">2</td>
                                                    </thead>
                                                </tr>
                                                <tr>
                                                    <thead class="">
                                                        <th scope="row">Porcelaine</th>
                                                            <td style="text-align: center">1</td>
                                                        <th scope="row">Verre</th>
                                                            <td style="text-align: center">0.2</td>
                                                    </thead>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <span class="lead">
                                            <p>Pour calculer le poids d’une marchandise, multipliez la valeur de cette marchandise par le facteur en kilogramme et vous obtiendrez un poids en kilogrammes. Par exemple, 500 pièces d’or de marbre pèsent 1000 kilogrammes (500 * 2).
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<!-- end: Chapitre 7 Les Cités -->
@endsection
