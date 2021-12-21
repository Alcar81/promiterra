@extends('layouts.app')
@section('title')
Édition
@endsection

@section('content')
    @if(session()->has('info'))
    <div class="notification is-success">
        {{ session('info') }}
    </div>
    @endif

    <div class="row justify-content-center pt-4">
        <div class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">                       

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('cinq.careers.index') }}">Carrières <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chapitres</a> 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Introduction</a>
                                    <a class="dropdown-item" href="#">1. Monde</a>
                                    <a class="dropdown-item" href="#">2. Personnage</a>
                                    <a class="dropdown-item" href="#">3. Économie</a>
                                    <a class="dropdown-item" href="#">4. Combats</a>
                                    <a class="dropdown-item" href="#">5. Carrières</a>
                                    <a class="dropdown-item" href="#">6. Guerres</a>
                                    <a class="dropdown-item" href="{{ route('sept.cites.index') }}">7. Cités</a>
                                    <a class="dropdown-item" href="#">8. Bestiaire</a>
                                    <a class="dropdown-item" href="#">Règles avancées</a>
                                    <a class="dropdown-item" href="#">Objets divers</a>
                                    <a class="dropdown-item" href="#">Version 3.0</a>
                                </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Créatures</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Équipements</a> 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('trois.weapons.index') }}">Armes</a>
                                    <a class="dropdown-item" href="{{ route('trois.armors.index') }}">Armures</a>
                                    <a class="dropdown-item" href="{{ route('trois.shields.index') }}">Boucliers</a>
                                    <a class="dropdown-item" href="{{ route('trois.mounts.index') }}">Montures</a>
                                    <a class="dropdown-item" href="{{ route('trois.mountshields.index') }}">Armures Monture</a>
                                    <a class="dropdown-item" href="{{ route('trois.ships.index') }}">Navires</a>
                                    <a class="dropdown-item" href="{{ route('trois.cannons.index') }}">Canons</a>
                                    <a class="dropdown-item" href="{{ route('trois.bombs.index') }}">Bombes</a>
                                    <a class="dropdown-item" href="{{ route('trois.grimoires.index') }}">Grimoires</a>                                    
                                    <a class="dropdown-item" href="{{ route('trois.herbales.index') }}">Herbes</a>
                                    <a class="dropdown-item" href="{{ route('trois.objects.index') }}">Objets divers</a>
                                </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Lieux mytiques</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Maisons</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Personnages</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ville.city.index') }}">Villes</a>
                        </li>
                        

                        
                    </ul>
                </div>
            </nav>        
            
        </div>

    </div>

@endsection
@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
    </style>
@endsection
