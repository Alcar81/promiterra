@extends('template')
@section('title')
Chapire 7 | Taxes
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

                <div class="card" display="flex">
                    <div class="card-body p-4">
                        <div class="row justify-content-center">
                            <table class="table">
                                @foreach($cities->chunk(8) as $villes)
                                    <div class="justify-content-center">
                                        <tbody>
                                            @foreach($villes as $ville)
                                                <div class="col-3">
                                                <a href="{{ route('ville.city.show', $ville->id) }}"><p>{{ $ville->name }}</p></a>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>



                <div class="card" display="flex">
                    <div class="card-body p-4">

                        <div class="card">
                                <div class="card-body pt-4">
                                    <div class="card-header">
                                        <div class="heading heading-center m-b-40 pt-4">
                                            <h2>Les Cités</h2>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <span class="row justify-content-center">
                                            <div class="p-1">
                                                <a href="{{ route('chapitre.sept.index') }}"><button class="btn btn-primary">Cités</button></a>
                                            </div>

                                            <div class="p-1">
                                                <a href=""><button class="btn btn-primary">Temps de voyage</button><a>
                                            </div>

                                            <div class="p-1">
                                                <a href=""><button class="btn btn-primary">L’offre et la demande</button><a>
                                            </div>

                                            <div class="p-1">
                                                <a href=""><button class="btn btn-primary">Taxes</button><a>
                                            </div>

                                            <div class="p-1">
                                                <a href=""><button class="btn btn-primary">Produits Commerciaux</button><a>
                                            </div>
                                        </span>
                                    </div>



                        <div class="card">
                            <div class="card-body pt-4">
                                <div class="card-header">
                                    <div class="heading heading-center m-b-40 pt-4">
                                        <h2>Taxes</h2>
                                    </div>
                                </div>

                                <div class="row p-4">
                                    <div class="col-md-12">
                                        <div class="m-b-40">

                                            <span class="lead">
                                                <p>Les taxes sont inévitables, elles s’appliquent uniquement à la vente et réduisent la marge de profit. Les taxes varient selon la nation de la Maison qui commerce et la nation de la ville où la transaction est effectuée. Voici les différents taux de taxes applicables :
                                                </p>
                                            </span>

                                            <span class="lead text-center">
                                                <p>10% si la nation de la ville est la même que celle du commerçant</br>
                                                    15% si la nation de la ville est alliée avec celle du commerçant</br>
                                                    20% si la nation de la ville est neutre avec celle du commerçant</br>
                                                    25% si la nation de la ville est hostile avec celle du commerçant</br>
                                                    Aucun commerce si la nation de la ville impose un embargo à celle du commerçant
                                                </p>
                                            </span>

                                            <span class="lead">
                                                <p>Les marginaux qui n’ont pas de Maison sont toujours considérés comme hostiles, donc le 25% de taxes s’applique en tout temps. Voici un tableau qui démontre le taux de taxe selon la situation actuelle sur Promiterra :
                                                </p>
                                            </span>

                                            <div class="table-responsive" style="overflow-x:auto;">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Maisons</th>
                                                        <th scope="col">Valmont</th>
                                                        <th scope="col">Berrouve</th>
                                                        <th scope="col">Duloir</th>
                                                        <th scope="col">Arcadis</th>
                                                        <th scope="col">Komeidai</th>
                                                        <th scope="col">Savie</th>
                                                        <th scope="col">Harlog</th>
                                                        <th scope="col">Balgarde</th>
                                                        <th scope="col">Aravas</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Valmont</th>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">Embargo</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                            </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Berrouve</th>
                                                                    <td style="text-align: center">Embargo</td>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                            </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Duloir</th>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">Embargo</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Arcadis</th>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                            </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Komeidai</th>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">Embargo</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                            </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Savie</th>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                            </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Harlog</th>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">Embargo</td>
                                                            </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Balgarde</th>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">15 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">10 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                            </thead>
                                                        </tr>
                                                        <tr>
                                                            <thead class="thead-light">
                                                                <th scope="row">Aravas</th>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">25 %</td>
                                                                    <td style="text-align: center">Embargo</td>
                                                                    <td style="text-align: center">20 %</td>
                                                                    <td style="text-align: center">10 %</td>
                                                            </thead>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <span class="lead">
                                                <p><strong>Exemple d’achat</strong></br>
                                                    Un commerçant naval accoste dans un village portuaire (facteur de richesse + taille de 4, maximum de pièces d’or transigé de 1000). Il veut acheter le produit local offert par la ville (75% de la valeur à l’achat) et investir le maximum possible de 1000 pièces d’or. Voici le calcul pour connaître la valeur réelle de la marchandise qu’il achète :
                                                </p>
                                            </span>

                                            <span class="lead">
                                                <p>
                                                    (1000 pièces d’or) / (Facteur à l’achat 75%) / (Jet de marchandage à l’achat 86%) 1000 / 0.75 / 0.86 = 1550</br>
                                                    Le commerçant a payé 1000 pièces d’or pour obtenir 1550 pièces d’or de marchandise
                                                </p>
                                            </span>


                                            <span class="lead">
                                                <p><strong>Exemple de vente</strong></br>
                                                    Le même commerçant se rend dans une autre ville (facteur de richesse + taille de 6, maximum de pièces d’or transigé de 2000), neutre avec sa nation (20% de taxe). Cette ville demande le produit qu’il a acheté dans l’autre ville (200% de la valeur à la vente). Voici le calcul pour calculer le nombre de pièces d’or qu’il va recevoir à la vente :
                                                </p>
                                            </span>

                                            <span class="lead">
                                                <p>
                                                    (1550 pièces d’or de marchandise) * (Facteur à la vente 200%) * (100% - taxe de 20%) 1550 * 2 * 0.8 = 2480 (2000 est le maximum)</br>
                                                    Le commerçant reçoit donc 2000 pièces d’or et conserve 300 ((2480 - 2000) / 2 / 0.8) pièces d’or de marchandise qu’il pourra vendre au prochain mois ou dans une autre ville. Les 1000 pièces d’or du commerçant sont devenues 2000 et il lui reste de la marchandise.
                                                </p>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body pt-4">
                                <div class="card-header">
                                    <div class="heading heading-center m-b-40 pt-4">
                                        <h2>Produits commerciaux</h2>
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
