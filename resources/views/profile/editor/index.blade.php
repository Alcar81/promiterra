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

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Équipements</div>

                    <div class="card-body">

                        <div>
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

                <div class="card-header"><strong>Villes       <a href="{{ route('ville.city.create') }}">( ajouter )</a></strong></div>

                    <div class="card-body">
                            <div class="row">
                                <table class="table">

                                    @foreach($cities->chunk(8) as $villes)
                                    <tbody>
                                            @foreach($villes as $ville)
                                                <div class="col-md-4">
                                                    <th><a href="{{ route('ville.city.show', $ville->id) }}">{{ $ville->name }}</a></th>
                                                </div>
                                            @endforeach
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                    </div>

                <div class="card-header"><strong>Lieux mytiques     <a href="">( ajouter / modifier )</a></strong></div>

                    <div class="card-body">

                        <div>



                        </div>

                    </div>

                <div class="card-header"><strong>Maisons     <a href="">( ajouter / modifier )</a></strong></div>

                    <div class="card-body">

                        <div>


                        </div>

                    </div>

                <div class="card-header"><strong>Personnages     <a href="">( ajouter / modifier )</a></strong></div>

                    <div class="card-body">

                        <div>


                        </div>

                    </div>

                <div class="card-header"><strong>Créatures     <a href="">( ajouter / modifier )</a></strong></div>

                    <div class="card-body">

                        <div>


                        </div>

                    </div>

                <div class="card-header"><strong>Carrières     <a href="">( ajouter / modifier )</a></strong></div>

                    <div class="card-body">

                        <div>


                        </div>

                    </div>


                <div class="card-header"><strong>Services     <a href="">( ajouter / modifier )</a></strong></div>

                    <div class="card-body">

                        <div>


                        </div>

                    </div>

                <div class="card-header"><strong>Métiers     <a href="">( ajouter / modifier )</a></strong></div>

                    <div class="card-body">

                        <div>


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
