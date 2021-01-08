@extends('template')
@section('title')
Chapire 7 | Les cités
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

                                    <div class="row p-4">
                                        <div class="col-md-12">
                                            <div class="m-b-40">

                                                <span class="lead">
                                                    <p>Promiterra est composée de milliers de cités, villages et hameaux. Afin de simplifier les voyages, seules les villes les plus importantes de chaque région sont répertoriées. Les autres villages existent un peu partout mais sont laissés à la discrétion du maître de jeu.
                                                    </p>
                                                </span>
                                                </br>

                                                <span class="lead">
                                                    <p>Chaque cité a son caractère unique et ses mœurs. Afin de bien découvrir et comprendre une ville, vous devez avoir habité dans celle-ci pendant au moins 30 jours, consécutifs ou non. Si vous avez séjourné pendant cette période dans une cité précise, demandez au maître de jeu qu’il vous remette la fiche détaillée de celle-ci.
                                                    </p>
                                                </span>
                                                </br>

                                                <span class="lead">
                                                    <p>Afin de rendre intéressante la visite de chaque cité, le maître de jeu vous remettra la fiche de la ville seulement si l’avez visitée pendant le jeu et non dans votre historique. Ceci afin de garder la surprise et la magie de chaque cité intactes. Le maître pourra quand même vous donner certains détails si votre personnage connaît déjà la ville.
                                                    </p>
                                                </span>

                                                <span class="lead"><p>La fiche de la cité se décompose comme suit.</p></span>

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

                                                <span class="lead"><p>De plus, cinq notes de 1 à 10 sont attribuées à la cité sur divers points.</p></span>

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
