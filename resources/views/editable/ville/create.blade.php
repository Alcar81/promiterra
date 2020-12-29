@extends('layouts.app')
@section('title')
Édition Villes
@endsection


@section('content')

    <div class="row justify-content-center pt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Création d’une ville</div>
                    <div class="card-body p-4">

                        <form class="form-floating">
                            <div class="container border rounded p-4">

                                <div>
                                    <label for="floatingSelect">Importer une ville</label>
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected></option>
                                                    @foreach(App\Models\City:: get() as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                    @endforeach
                                                </select>
                                </div>

                                <div class="pt-2">
                                    <label for="floatingSelect">Année désirée</label>
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected></option>
                                                    @foreach(App\Models\City:: get() as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->year }}</option>
                                                    @endforeach
                                                </select>
                                </div>

                                <div class="pt-4">
                                    <button type="submit" class="btn btn-secondary form-floating"><i class="fa fa-btn fa-sign-in"></i>Importer une ville existante</button>
                                </div>

                            </div>



                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="floatingInputValue">En l’an :</label>
                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Nom</label>
                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Maison</label>
                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="floatingInputValue">Année de fondation</label>
                                    <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingSelect">Taille</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Ville</option>
                                        <option value="Capitale">Capitale</option>
                                        <option value="Cité">Cité</option>
                                        <option value="Métropole">Métropole</option>
                                        <option value="Village">Village</option>
                                        <option value="Ville">Ville</option>
                                        </select>
                                </div>

                                <div class="form-floating pt-2">
                                    <label for="floatingInputValue">Climat</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">

                                    <label for="floatingSelect">Accents régionales</label>
                                    <div>
                                            <input type="email" class="form-control" id="floatingInputValue" placeholder="Accent 1, s'il n'existe pas" value="">
                                                <select class="form-select pt-2" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected></option>
                                                        @foreach(App\Models\City:: get() as $ville)
                                                            <option value="{{ $ville->accent1 }}">{{ $ville->accent1}}</option>
                                                        @endforeach
                                                </select>
                                    </div>
                                    <div class="pt-2">
                                            <input type="email" class="form-control" id="floatingInputValue" placeholder="Accent 2, s'il n'existe pas" value="">
                                                <select class="form-select pt-2" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected></option>
                                                        @foreach(App\Models\City:: get() as $ville)
                                                            <option value="{{ $ville->accent1 }}">{{ $ville->accent1 }}</option>
                                                        @endforeach
                                                </select>
                                    </div>
                                </div>


                                <div class="form-floating pt-2">
                                    <label for="floatingInputValue">Spécialité locale</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Maire ou mairesse</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Population urbaine</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Population régionale</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Commerce maximal</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Boisson locale</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingSelect">Éducation</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                </div>

                                <div class="form-floating">
                                    <label for="floatingSelect">Fortification</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                </div>

                                <div class="form-floating">
                                    <label for="floatingSelect">Loi et l’ordre</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                </div>

                                <div class="form-floating">
                                    <label for="floatingSelect">Technologie</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                </div>

                                <div class="form-floating">
                                    <label for="floatingSelect">Richesse</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                </div>


                            </div>
                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="floatingInputGrid">Économie</label>
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="" value="">
                                </div>
                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="floatingInputValue">Offres</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Demandes</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                    </div>
                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="floatingSelect">Villes voisines 1</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="Si nouvelle ville" value="">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected></option>
                                                @foreach(App\Models\City:: get() as $ville)
                                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                @endforeach
                                            </select>

                                </div>

                                <div class="form-floating pt-2">
                                    <label for="floatingInputValue">Offres ville voisine 1</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Demandes ville voisine 1</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="floatingSelect">Villes voisines 2</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="Si nouvelle ville" value="">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected></option>
                                                @foreach(App\Models\City:: get() as $ville)
                                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                @endforeach
                                            </select>
                                </div>

                                <div class="form-floating pt-2">
                                    <label for="floatingInputValue">Offres ville voisine 2</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Demandes ville voisine 2</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>

                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="floatingTextarea2">Histoire</label>
                                            <textarea class="form-control" placeholder="Écrivez l'histoire ici" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Version</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">

                                </div>

                                <div class="form-floating">
                                    <label for="floatingInputValue">Chapitre</label>
                                        <input type="email" class="form-control" id="floatingInputValue" placeholder="" value="">
                                </div>
                            </div>

                            <div class="container pt-4">
                                <div><button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button></div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection
