@extends('template')
@section('title')
Chapire 7 | L’offre et la demande
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
                                        <h2>L’Offre et la Demande</h2>
                                    </div>
                                </div>

                                <div class="row p-4">
                                    <div class="col-md-12">
                                        <div class="m-b-40">

                                            <span class="lead">
                                                <p>Certaines cités offrent ou demandent des produits commerciaux particuliers. Acheter dans une cité dont l’offre est grande et vendre dans une cité où la demande est grande signifie un bon potentiel de profit. La proximité des cités influence également l’offre et la demande, une cité voisine d’une autre est déterminée par la route qui les connecte sur la carte de Promiterra. Si une route connecte, la cité est considérée comme voisine.
                                                </p>
                                            </span>

                                            <span class="lead"></span>

                                            <span class="lead">
                                                <p><strong>Acheter des produits commerciaux</strong></br>
                                                    Un produit commercial peut être acheté uniquement si la cité ou une cité voisine offre ce produit. Si la cité offre le produit, il est acheté à 75% de sa valeur. Si une cité voisine offre le produit, il est acheté à sa valeur normale (100%). Un jet de marchandage peut également réduire le prix à l’achat uniquement, ajoutez ce multiplicateur au calcul.
                                                </p>
                                            </span>

                                            <span class="lead">
                                                <p><strong>Vendre des produits commerciaux</strong></br>
                                                    Un produit commercial peut être vendu dans n’importe quelle cité. Si la cité offre déjà ce produit, il sera vendu à 25% de sa valeur. Si une cité voisine offre ce produit, il sera vendu à 50% de sa valeur. Si une cité demande ce produit, il sera vendu à 200% de sa valeur. Si une cité voisine demande ce produit, il sera vendu à 150% de sa valeur. S’il n’y a aucune offre et aucune demande, il sera vendu à sa valeur normale.
                                                </p>
                                            </span>

                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Offre ou demande</th>
                                                    <th scope="col">Prix à l’achat</th>
                                                    <th scope="col">Prix à la vente</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Offre</th>
                                                            <td>75%</td>
                                                            <td>25%</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Offre voisine</th>
                                                            <td>Prix normal (100%)</td>
                                                            <td>50%</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Ni offre, ni demande</th>
                                                            <td>Ne peut pas être acheté</td>
                                                            <td>Prix normal (100%) </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                            <td>Ne peut pas être acheté</td>
                                                            <td>150%</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                            <td>Ne peut pas être acheté</td>
                                                            <td>200%</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <span class="lead">
                                                <p><strong>Commerce maximal</strong></br>
                                                    L’économie et la taille de la cité limite sa capacité d’acheter ou de vendre un produit commercial. À chaque mois, la cité va accepter d’acheter ou de vendre un montant maximal pour chaque type de marchandise, déterminé par sa richesse additionnée à sa taille (+1 si village, +2 si ville, +3 si cité et +4 si capitale ou métropole)
                                                </p>
                                            </span>

                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Richesse + Taille</th>
                                                    <th scope="col">Montant maximal</th>
                                                    <th scope="col">Richesse + Taille</th>
                                                    <th scope="col">Montant maximal</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                            <td>200</td>
                                                            <td>8</td>
                                                            <td>4000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                            <td>Prix normal (100%)</td>
                                                            <td>400</td>
                                                            <td>5000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                            <td>700</td>
                                                            <td>10</td>
                                                            <td>6500</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                            <td>1000</td>
                                                            <td>11</td>
                                                            <td>8000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                            <td>1500</td>
                                                            <td>12</td>
                                                            <td>10000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                            <td>2000</td>
                                                            <td>13</td>
                                                            <td>12000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                            <td>3000</td>
                                                            <td>14</td>
                                                            <td>15000</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <span class="lead">
                                                <p>Donc une cité ayant un facteur (richesse + taille) de 5 va accepter d’acheter ou de vendre chaque marchandise pour un montant maximal de 1500 pièces d’or. Elle peut acheter 2 marchandises différentes pour 1500 pièces d’or chacune mais ne dépensera pas plus de 1500 pièces d’or par type de marchandise.
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
