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
            <div class="card">
                <div class="card-header"><strong>Équipements</strong></div>
                <div class="card-body">


                    <div class="">

                            <div class="row justify-content-center">
                                <button class="btn btn-primary" href="">Armes</button>
                                <button class="btn btn-primary" href="">Armures</button>
                                <button class="btn btn-primary" href="">Boucliers</button>
                                <button class="btn btn-primary" href="">Montures</button>
                                <button class="btn btn-primary" href="">Navires</button>
                                <button class="btn btn-primary" href="">Canons</button>
                                <button class="btn btn-primary" href="">Bombes</button>
                                <button class="btn btn-primary" href="">Grimoires</button>
                                <button class="btn btn-primary" href="">Bibles</button>
                                <button class="btn btn-primary" href="">Herbes</button>
                                <button class="btn btn-primary" href="">Objets divers</button>
                            </div>


                    </div>
                </div>

                <div class="card-header"><strong>Les chapitres     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div>
                        <div class="row justify-content-center">
                            <button class="btn btn-primary" href="">Introduction</button>
                            <button class="btn btn-primary" href="">1. Monde</button>
                            <button class="btn btn-primary" href="">2. Personnage</button>
                            <button class="btn btn-primary" href="">3. Économie</button>
                            <button class="btn btn-primary" href="">4. Combats</button>
                            <button class="btn btn-primary" href="">5. Carrières</button>
                            <button class="btn btn-primary" href="">6. Guerres</button>
                            <button class="btn btn-primary"><a href="{{ route('sept.cites.index') }}">7. Cités</a></button>
                            <button class="btn btn-primary" href="">8. Bestaire</button>
                            <button class="btn btn-primary" href="">Règles avancées</button>
                            <button class="btn btn-primary" href="">Version 3.0</button>
                        </div>

                    </div>

                </div>

                <div class="card-header"><strong>Villes       <a href="{{ route('ville.city.create') }}">( ajouter )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <table class="table">
                            @foreach($cities->chunk(8) as $villes)
                                <div class="row justify-content-center">
                                    <tbody>
                                        <div class="justify-content-center p-2">
                                            @foreach($villes as $ville)
                                            <span><button class="btn btn-link p-2"><a href="{{ route('ville.city.show', $ville->id) }}">{{ $ville->name }}</a></button></span>
                                            @endforeach
                                        </div>
                                    </tbody>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>



                <div class="card-header"><strong>Lieux mytiques     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div>



                        </div>

                    </div>

                </div>


                <div class="card-header"><strong>Maisons     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div>



                        </div>

                    </div>

                </div>

                <div class="card-header"><strong>Personnages     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div>



                        </div>

                    </div>

                </div>

                <div class="card-header"><strong>Créatures     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div>



                        </div>

                    </div>

                </div>

                <div class="card-header"><strong>Carrières     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div>



                        </div>

                    </div>

                </div>

                <div class="card-header"><strong>Services     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div>



                        </div>

                    </div>

                </div>

                <div class="card-header"><strong>Métiers     <a href="">( ajouter / modifier )</a></strong></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div>



                        </div>

                    </div>

                </div>
            </div>
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
