@extends('layouts.app')
@section('title')
Édition
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong><h3>Ville: </h3>{{ $ville->name }} En {{ $ville->year }}</strong></div>

                    <div class="card">
                        <div class="content">
                                <p>Maison : {{ $ville->house }}</p>
                                <p>Année de fondation : {{ $ville->yearfoundation }}</p>
                                <p>Taille : {{ $ville->size }}</p>
                                <p>Climat : {{ $ville->weather }}</p>
                                <p>Accent rédional 1 : {{ $ville->accent1 }}</p>
                                <p>Accent rédional 2 : {{ $ville->accent2 }}</p>
                                <p>Spécialité locale : {{ $ville->LocalSpeciality }}</p>
                                <p>Maire ou mairesse : {{ $ville->mayor }}</p>
                                <p>Population urbaine : {{ $ville->urbanPopulation }}</p>
                                <p>Population rural : {{ $ville->ruralPopulation }}</p>
                                <p>Commerce maximal : {{ $ville->tradeMax }}</p>
                                <p>Boisson locale : {{ $ville->localDrink }}</p>
                                <p>Éducation : {{ $ville->education }}</p>
                                <p>Fortification : {{ $ville->fortification }}</p>
                                <p>Loi et l’ordre : {{ $ville->lawAndOrder }}</p>
                                <p>Richesse : {{ $ville->wealth }}</p>
                                <p>Économie 1 : {{ $ville->economy1 }}</p>
                                <p>Économie 2 : {{ $ville->economy2 }}</p>
                                <p>Économie 3 : {{ $ville->economy3 }}</p>
                                <p>Économie 4 : {{ $ville->economy4 }}</p>
                                <p>Économie 5 : {{ $ville->economy5 }}</p>
                                <p>Économie 6 : {{ $ville->economy6 }}</p>
                                <p>Économie 7 : {{ $ville->economy7 }}</p>
                                <p>Économie 8 : {{ $ville->economy8 }}</p>
                                <p>Économie 9 : {{ $ville->economy9 }}</p>
                                <p>Économie 10 : {{ $ville->economy10 }}</p>
                                <p>Offre 1 : {{ $ville->offer1 }}</p>
                                <p>Offre 2 : {{ $ville->offer2 }}</p>
                                <p>Ville voisine 1 : {{ $ville->nextCity1 }}</p>
                                <p>Ville voisine 2 : {{ $ville->nextCity2 }}</p>
                                <p>Offre 1 de la ville 1 : {{ $ville->offer1NextCity1 }}</p>
                                <p>Offre 2 de la ville 1 : {{ $ville->offer2NextCity1 }}</p>
                                <p>Offre 1 de la ville 2 : {{ $ville->offer1NextCity2 }}</p>
                                <p>Offre 2 de la ville 2 : {{ $ville->offer2NextCity2 }}</p>
                                <p>Demande 1 : {{ $ville->demand1 }}</p>
                                <p>Demande 2 : {{ $ville->demand2 }}</p>
                                <p>Demande 1 de la ville 1 : {{ $ville->demand1NextCity1 }}</p>
                                <p>Demande 2 de la ville 1 : {{ $ville->demand2NextCity1 }}</p>
                                <p>Demande 1 de la ville 2 : : {{ $ville->demand1NextCity2 }}</p>
                                <p>Demande 2 de la ville 2 : : {{ $ville->demand2NextCity2 }}</p>
                                <p>Histoire de la ville : {{ $ville->story }}</p>
                                <p>Version : {{ $ville->version }}</p>
                                <p>chapitre : {{ $ville->chapter }}</p>




                        </div>




                </div>
            </div>
        </div>
    </div>
@endsection
