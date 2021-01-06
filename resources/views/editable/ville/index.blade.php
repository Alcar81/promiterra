@extends('layouts.app')
@section('title')
Les Citées
@endsection

@section('content')


    <div class="row justify-content-center p-4">
        <div class="col-md-6">


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
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-center pt-4">
                            <p><h1><strong>Les Cités</strong></h1></p>
                        </div>
                    </div>


                    <div class="card-body pt-4">



                        <div class="container p-4">

                            <p>Promiterra est composée de milliers de cités, villages et hameaux. Afin de simplifier les
                            voyages, seules les villes les plus importantes de chaque région sont répertoriées. Les
                            autres villages existent un peu partout mais sont laissés à la discrétion du maître de jeu.</p></br>

                            <p>Chaque cité a son caractère unique et ses mœurs. Afin de bien découvrir et comprendre
                            une ville, vous devez avoir habité dans celle-ci pendant au moins 30 jours, consécutifs ou
                            non. Si vous avez séjourné pendant cette période dans une cité précise, demandez au
                            maître de jeu qu’il vous remette la fiche détaillée de celle-ci.</p></br>

                            <p>Afin de rendre intéressante la visite de chaque cité, le maître de jeu vous remettra la fiche
                            de la ville seulement si l’avez visitée pendant le jeu et non dans votre historique. Ceci
                            afin de garder la surprise et la magie de chaque cité intactes. Le maître pourra quand
                            même vous donner certains détails si votre personnage connaît déjà la ville.</p>
                        </div>

                        <div class="container p-4">
                            <p>La fiche de la cité se décompose comme suit.</p>
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">Donnée</th>
                                    <th scope="col">Description</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Nom</th>
                                            <td>Le nom français de la cité, le nom d’origine peut être différent</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Maison</th>
                                            <td>La Maison qui possède la cité (en l’an 831)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fondation</th>
                                            <td>L’année de fondation de la cité (si connue)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Taille</th>
                                            <td>Dans l’ordre : Capitale, Métropole, Cité, Ville, Village ou Hameau</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Climat</th>
                                            <td>La température typique locale</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Accent régional</th>
                                            <td>L’accent typique de la population locale</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Population urbaine</th>
                                            <td>Le nombre d’habitants de la cité elle-même</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Population régionale</th>
                                            <td>Le nombre d’habitants de la région, hors de la cité</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Commerce maximal</th>
                                            <td>Le maximum de pièces d’or transigé en marchandise commerciale</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Spécialité locale</th>
                                            <td>La nourriture locale la plus répandue ou la plus réputée</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Boisson locale</th>
                                            <td>L’alcool ou le breuvage le plus populaire</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Maire ou mairesse</th>
                                            <td>Le nom du régent de la cité (en l’an 831)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Économie</th>
                                            <td>Les meilleures sources d’économies de la cité</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Offres</th>
                                            <td>Les marchandises commerciales offertes par la ville</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Demandes</th>
                                            <td>Les marchandises commerciales demandées par la ville</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Offres voisines</th>
                                            <td>Les marchandises commerciales offertes par les villes voisines</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Demandes voisines</th>
                                            <td>Les marchandises commerciales demandées par les villes voisines</td>
                                    </tr>
                                </tbody>
                              </table>

                            <p>De plus, cinq notes de 1 à 10 sont attribuées à la cité sur divers points.</p>
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">Note</th>
                                    <th scope="col">Description</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Éducation</th>
                                            <td>Le niveau de scolarité moyen et la qualité de l’enseignement</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fortification</th>
                                            <td>La solidité des murailles et la difficulté tactique à prendre la cité</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Loi et ordre</th>
                                            <td>Le respect de l’autorité en place et le contrôle sur le crime</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Technologie</th>
                                            <td>Mesure le modernisme et la disponibilité d’objets et services</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Richesse </th>
                                            <td>Représente le revenu moyen et la capacité de prospérer</td>
                                    </tr>

                                </tbody>
                              </table>

                        <div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body pt-4">

                        <div class="card-header">
                            <div class="row justify-content-center pt-4">
                                <p><h1><strong>Temps de voyage</strong></h1></p>
                            </div>
                        </div>

                        <div class="container p-4">
                            <p>Le temps de voyage entre deux villes est relié à votre vitesse de mouvement à pied ou sur
                                monture. Afin de connaître le nombre de jours requis pour effectuer le déplacement entre
                                deux cités reliées par une route sur la carte, consultez le tableau ci-dessous :
                            </p>

                            <table class="table table-bordered">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">Mouvement</th>
                                    <th scope="col">Nombre de jour à pied</th>
                                    <th scope="col">Nombre de jour sur monture</th>
                                  </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">0</th>
                                            <td>Voyage impossible</td>
                                            <td>Voyage impossible</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                            <td>45</td>
                                            <td>30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                            <td>30</td>
                                            <td>20</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                            <td>24</td>
                                            <td>15</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                            <td>20</td>
                                            <td>12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                            <td>17</td>
                                            <td>10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                            <td>15</td>
                                            <td>9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                            <td>14</td>
                                            <td>9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                            <td>13</td>
                                            <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                            <td>12</td>
                                            <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                            <td>12</td>
                                            <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                            <td>11</td>
                                            <td>7</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                            <td>11</td>
                                            <td>7</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                            <td>10</td>
                                            <td>7</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                            <td>10</td>
                                            <td>7</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15 et plus</th>
                                            <td>9</td>
                                            <td>6</td>
                                    </tr>

                                </tbody>
                              </table>

                            <p>La caractéristique de mouvement inclut tous les bonus permanents au mouvement donné
                                par les talents de votre personnage. Les actions et les talents non permanents ne sont pas
                                calculés pour accélérer le temps de voyage.
                            </p>
                            <p>Pour les voyages en navire, vous pouvez utiliser la vitesse du bateau que vous considérez
                                comme une monture. Bien sûr, la forme de la berge peut allonger ou raccourcir le
                                voyage. Le maître de jeu peut donc ajouter ou enlever un pourcentage au nombre de jour.
                            </p>

                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body pt-4">

                        <div class="card-header">
                            <div class="row justify-content-center pt-4">
                                <p><h1><strong>L’offre et la demande</strong></h1></p>
                            </div>
                        </div>

                        <div class="container p-4">
                            <p>Certaines cités offrent ou demandent des produits commerciaux particuliers. Acheter
                                dans une cité dont l’offre est grande et vendre dans une cité où la demande est grande
                                signifie un bon potentiel de profit. La proximité des cités influence également l’offre et
                                la demande, une cité voisine d’une autre est déterminée par la route qui les connecte sur
                                la carte de Promiterra. Si une route connecte, la cité est considérée comme voisine.
                            </p>

                            <p><h5><strong>Acheter des produits commerciaux</strong></h5></p>
                            <p>Un produit commercial peut être acheté uniquement si la cité ou une cité voisine offre ce
                                produit. Si la cité offre le produit, il est acheté à 75% de sa valeur. Si une cité voisine
                                offre le produit, il est acheté à sa valeur normale (100%). Un jet de marchandage peut
                                également réduire le prix à l’achat uniquement, ajoutez ce multiplicateur au calcul.
                            </p>

                            <p><h5><strong>Vendre des produits commerciaux</strong></h5></p>
                            <p>Un produit commercial peut être vendu dans n’importe quelle cité. Si la cité offre déjà ce
                                produit, il sera vendu à 25% de sa valeur. Si une cité voisine offre ce produit, il sera
                                vendu à 50% de sa valeur. Si une cité demande ce produit, il sera vendu à 200% de sa
                                valeur. Si une cité voisine demande ce produit, il sera vendu à 150% de sa valeur. S’il
                                n’y a aucune offre et aucune demande, il sera vendu à sa valeur normale.
                            </p>

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

                            <p><h5><strong>Commerce maximal</strong></h5></p>
                            <p>L’économie et la taille de la cité limite sa capacité d’acheter ou de vendre un produit
                                commercial. À chaque mois, la cité va accepter d’acheter ou de vendre un montant
                                maximal pour chaque type de marchandise, déterminé par sa richesse additionnée à sa
                                taille (+1 si village, +2 si ville, +3 si cité et +4 si capitale ou métropole)
                            </p>

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

                            <p>Donc une cité ayant un facteur (richesse + taille) de 5 va accepter d’acheter ou de vendre
                                chaque marchandise pour un montant maximal de 1500 pièces d’or. Elle peut acheter 2
                                marchandises différentes pour 1500 pièces d’or chacune mais ne dépensera pas plus de
                                1500 pièces d’or par type de marchandise.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body pt-4">

                        <div class="container p-4">
                            <p><h3><strong>Taxes</strong></h3></p>

                            <p>Les taxes sont inévitables, elles s’appliquent uniquement à la vente et réduisent la marge
                                de profit. Les taxes varient selon la nation de la Maison qui commerce et la nation de la
                                ville où la transaction est effectuée. Voici les différents taux de taxes applicables :
                            </p>

                            <div class="row justify-content-center">
                                <p>10% si la nation de la ville est la même que celle du commerçant</br>
                                    15% si la nation de la ville est alliée avec celle du commerçant</br>
                                    20% si la nation de la ville est neutre avec celle du commerçant</br>
                                    25% si la nation de la ville est hostile avec celle du commerçant</br>
                                    Aucun commerce si la nation de la ville impose un embargo à celle du commerçant
                                </p>
                            </div>

                            <p>Les marginaux qui n’ont pas de Maison sont toujours considérés comme hostiles, donc le
                                25% de taxes s’applique en tout temps. Voici un tableau qui démontre le taux de taxe
                                selon la situation actuelle sur Promiterra :
                            </p>

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

                            <p><h5><strong>Exemple d’achat</strong></h5></p>

                            <p>Un commerçant naval accoste dans un village portuaire (facteur de richesse + taille de 4,
                                maximum de pièces d’or transigé de 1000). Il veut acheter le produit local offert par la
                                ville (75% de la valeur à l’achat) et investir le maximum possible de 1000 pièces d’or.
                                Voici le calcul pour connaître la valeur réelle de la marchandise qu’il achète :
                            </p>

                            <div class="row justify-content-center">
                                <p>(1000 pièces d’or) / (Facteur à l’achat 75%) / (Jet de marchandage à l’achat 86%)
                                    1000 / 0.75 / 0.86 = 1550
                                </p>
                            </div>

                            <p>Le commerçant a payé 1000 pièces d’or pour obtenir 1550 pièces d’or de marchandise.</p>

                            <p><h5><strong>Exemple de vente</strong></h5></p>

                            <p>Le même commerçant se rend dans une autre ville (facteur de richesse + taille de 6,
                                maximum de pièces d’or transigé de 2000), neutre avec sa nation (20% de taxe). Cette
                                ville demande le produit qu’il a acheté dans l’autre ville (200% de la valeur à la vente).
                                Voici le calcul pour calculer le nombre de pièces d’or qu’il va recevoir à la vente :
                            </p>


                            <p>(1550 pièces d’or de marchandise) * (Facteur à la vente 200%) * (100% - taxe de 20%)
                                    1550 * 2 * 0.8 = 2480 (2000 est le maximum)
                            </p>


                            <p>Le commerçant reçoit donc 2000 pièces d’or et conserve 300 ((2480 - 2000) / 2 / 0.8)
                                pièces d’or de marchandise qu’il pourra vendre au prochain mois ou dans une autre ville.
                                Les 1000 pièces d’or du commerçant sont devenues 2000 et il lui reste de la marchandise.
                            </p>

                        </div>
                   </div>
                </div>

                <div class="card">
                    <div class="card-body pt-4">

                        <div class="container p-4">
                            <p><h3><strong>Produits commerciaux</strong></h3></p>

                            <p>Voici tous les produits existants ainsi que le poids en kilogramme par pièce d’or pour
                                calculer la cargaison maximale d’un navire ou d’une charrette.
                            </p>

                            <table class="table table-bordered">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">Matières minérales</th>
                                    <th scope="col">Kilo.</th>
                                    <th scope="col">Matières minérales</th>
                                    <th scope="col">Kilo. </th>
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
                                    <th scope="col">Matières végétales</th>
                                    <th scope="col">Kilo.</th>
                                    <th scope="col">Matières végétales</th>
                                    <th scope="col">Kilo. </th>
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
                                    <th scope="col">Matières animales</th>
                                    <th scope="col">Kilo.</th>
                                    <th scope="col">Matières animales</th>
                                    <th scope="col">Kilo. </th>
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
                                    <th scope="col">Produits de consommation</th>
                                    <th scope="col">Kilo.</th>
                                    <th scope="col">Produits de consommation</th>
                                    <th scope="col">Kilo. </th>
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
                                    <th scope="col">Produits durables</th>
                                    <th scope="col">Kilo.</th>
                                    <th scope="col">Produits durables</th>
                                    <th scope="col">Kilo. </th>
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

                            <p>Pour calculer le poids d’une marchandise, multipliez la valeur de cette marchandise par le
                                facteur en kilogramme et vous obtiendrez un poids en kilogrammes. Par exemple, 500
                                pièces d’or de marbre pèsent 1000 kilogrammes (500 * 2).
                            </p>

                        </div>
                   </div>
                </div>

            </div>
        </div>
    </div>
@endsection
