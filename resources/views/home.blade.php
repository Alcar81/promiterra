@extends('template')

@section('title')
    Accueil
@endsection

@section('contenu')

            <!-- Inspiro Slider -->
                <div id="slider" class="inspiro-slider slider-halfscreen arrows-large arrows-creative dots-creative" data-height-xs="360" data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">

                    <!-- Slide 1 -->
                        <div class="slide" style="background-image:url('images/image1_accueil1920x669_2.png');" alt="Photo by Nik Shuliahin on Unsplash">
                            <div class="container">
                                <div class="slide-captions text-right">
                                    <!-- Captions -->
                                        <span class="strong text-light" data-animation="fadeInUp" data-animation-delay="700"></span>
                                        <h2 class="text-light text-large" data-animation="fadeIn" data-animation-delay="500">Une pièce d’or pour les morts</h2>
                                        <div data-animation="fadeInDown" data-animation-delay="900">

                                        </div>
                                    <!-- end: Captions -->
                                </div>
                            </div>
                        </div>
                    <!-- end: Slide 1 -->

                    <!-- Slide 2 -->
                        <div class="slide" style="background-image:url('images/image2_accueil1920x669.png');" alt="Photo by Ricardo Cruz on Unsplash">
                            <div class="container">
                                <div class="slide-captions text-right">
                                    <!-- Captions -->
                                        <span class="strong text-dark" data-animation="fadeInUp" data-animation-delay="700">Une épée sainte</span>
                                        <h2 class="text-light text-large" data-animation="fadeIn" data-animation-delay="700">pas comme les autres</h2>
                                        <div data-animation="fadeInDown" data-animation-delay="900">

                                        </div>
                                     <!-- end: Captions -->
                                </div>
                            </div>
                        </div>
                     <!-- end: Slide 2 -->


                </div>
            <!--end: Inspiro Slider -->


        <!-- HISTORY -->
        <section class="background-black p-b-60">
            <div class="container">
                <div class="heading heading-center m-b-40">
                    <h2>Promiterra</h2>
                    <span class="lead">Un jeu de rôle dans une Renaissance fantastique.</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-b-40">
                            <span class="lead">Promiterra est un jeu de rôle de table qui mélange les grandes aventures de la renaissance avec l’univers fantastique et combattif des jeux de rôle traditionnels. Les parties sont dirigées par un maître de jeu qui prépare et décrit un monde vaste aux joueurs afin qu’ils décident et vivent leurs propres destinés. Le jeu est limité seulement par l’imagination des participants et les buts à accomplir peuvent être très variés. Les joueurs peuvent décider de tenter de sauver le monde ou de le détruire, ou simplement raconter la meilleure blague dans une taverne.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img alt="" class="img-responsive" src="homepages/business/images/office.jpg">
                    </div>
                </div>
                </br>
                <div class="heading heading-center m-b-40">

                    <span class="lead">Les forces du système.</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-b-40">


                            <span class="lead">L’univers de Promiterra est très vaste, le système de développement de personnage est beaucoup plus complet que bien des jeux sur le marché et les combats sont simples et enlevants. Les grandes forces du produit sont sa gratuité, le système de carrière, l’univers fortement développé et les règles de combat avec initiative continue. Une campagne de Promiterra peut se faire avec un nombre de joueurs flexible et ceux-ci n’ont pas toujours besoin d’être présents, idéalement le jeu requiert de 4 à 8 participants mais il peut également être joué par 2 à 16 au besoin.
				</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img alt="" class="img-responsive" src="homepages/business/images/office.jpg">
                    </div>
                </div>
                </br>
                <div class="heading heading-center m-b-40">

                    <span class="lead">Un jeu de rôle ouvert et gratuit pour tous.</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-b-40">
                            <span class="lead">Le jeu est gratuit, vous pouvez donc le télécharger et l’imprimer à votre guise. La seule restriction est que vous ne pouvez pas le vendre ou en tirer profit. Ce site web vous offre toutes les règles et ressources afin de démarrer une partie, par contre les carrières avancées, les armées, les cités et les monstres sont cachés et sont disponibles seulement avec un mot de passe. Ces informations seront données uniquement aux maîtres de jeu qui à leur tour pourront partager celles-ci en temps opportun. Le mystère est un élément qui ajoute une grande profondeur au jeu.
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img alt="" class="img-responsive" src="homepages/business/images/office.jpg">
                    </div>
                </div>
                </br>
                <div class="heading heading-center m-b-40">

                    <span class="lead">Démarrer une campagne.</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-b-40">
                            <span class="lead">Si vous êtes un maître de jeu qui désirez démarrer une campagne, écrivez-nous et nous vous enverrons le mot de passe pour télécharger les règles avancées : les carrières avancées, les armées, les cités et le bestiaire. Vous pouvez également consulter les capsules vidéo qui vous aideront à comprendre la création de personnages, la narration et les combats. Les règles sont un guide de référence mais vous pouvez briser celles-ci au besoin si elles ne conviennent pas à votre aventure ou votre style de jeu.
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img alt="" class="img-responsive" src="homepages/business/images/office.jpg">
                    </div>
                </div>
            </div>


        </section>
        <!-- end: HISTORY -->

@endsection
