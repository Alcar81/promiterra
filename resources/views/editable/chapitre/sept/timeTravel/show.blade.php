@extends('template')
@section('title')
Chapire 7 | Temps de voyage
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

                <!-- Menu villes -->
                @include('partials.menus.menuVilles')
                <!-- end: Menu villes -->



                <div class="card" display="flex">
                    <div class="card-body p-4">

                        <div class="card">
                            <div class="card-body pt-4">
                                <div class="card-header">
                                    <div class="heading heading-center m-b-40 pt-4">
                                        <h2>Temps de voyage</h2>
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
                                                <p>Le temps de voyage entre deux villes est relié à votre vitesse de mouvement à pied ou sur monture. Afin de connaître le nombre de jours requis pour effectuer le déplacement entre deux cités reliées par une route sur la carte, consultez le tableau ci-dessous :
                                                </p>
                                            </span>
                                            </br>

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

                                            <span class="lead">
                                                <p>La caractéristique de mouvement inclut tous les bonus permanents au mouvement donné par les talents de votre personnage. Les actions et les talents non permanents ne sont pas calculés pour accélérer le temps de voyage.
                                                </p>
                                            </span>
                                            </br>

                                            <span class="lead">
                                                <p>Pour les voyages en navire, vous pouvez utiliser la vitesse du bateau que vous considérez comme une monture. Bien sûr, la forme de la berge peut allonger ou raccourcir le voyage. Le maître de jeu peut donc ajouter ou enlever un pourcentage au nombre de jour.
                                                </p>
                                            </span>
                                            </br>
                                        </div>
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
