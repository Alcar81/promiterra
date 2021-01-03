@extends('layouts.app')
@section('title')
Mise à jour | {{ $ville->name }}
@endsection

@if(session()->has('info'))
    <div class="notification is-success">
        {{ session('info') }}
    </div>
@endif


@section('content')

    <div class="row justify-content-center pt-4">
        <div class="col-md-6">
            <div class="card">


                    <div class="card-header p-4">
                        <div class="row justify-content-center">
                          <p><h2><strong>{{ __('Modifier') }} {{ $ville->name }}</strong></h2></p>
                        </div>


                    </div>



                    <div class="card-body p-4">


                        <form class="form-floating" action="{{ route('ville.city.update', $ville->id) }}" method="POST">
                            @csrf
                            {{ method_field('PATCH') }}



                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="year">{{__('En l’an :') }}</label>
                                    <input type="text" class="form-control" id="year" placeholder="" value="{{ old('year') ?? $ville->year }}" name="year" autofocus>
                                </div>

                                <div class="form-floating">
                                    <label for="name">{{ __('Nom') }}</label>
                                    <input type="text" class="form-control" id="name" placeholder="" value="{{ old('year') ?? $ville->name }}" name="name">
                                </div>

                                <div class="form-floating">
                                    <label for="house">{{ __('Maison') }}</label>
                                    <input type="text" class="form-control" id="house" placeholder="" value="{{ old('year') ?? $ville->house }}" name="house">
                                </div>

                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="yearfoundation">{{ __('Année de fondation') }}</label>
                                    <input type="text" class="form-control" id="yearfoundation" placeholder="" value="{{ old('year') ?? $ville->yearfoundation }}" name="yearfoundation">
                                </div>

                                <div class="form-floating">
                                    <label for="size">{{ __('Taille') }}</label>
                                        <select class="form-select" id="size" aria-label="Floating label select example" name="size">
                                        <option selected>{{ old('year') ?? $ville->size }}</option>
                                        <option value="Capitale">Capitale</option>
                                        <option value="Cité">Cité</option>
                                        <option value="Métropole">Métropole</option>
                                        <option value="Village">Village</option>
                                        <option value="Ville">Ville</option>
                                        </select>
                                </div>

                                <div class="form-floating pt-2">
                                    <label for="weather">{{ __('Climat') }}</label>
                                        <input type="text" class="form-control" id="weather" placeholder="" value="{{ old('year') ?? $ville->weather }}" name="weather">
                                </div>

                                <div class="form-floating">

                                    <label for="accent1">{{ __('Accents régionales') }}</label>
                                    <div>
                                            <div>
                                                <select class="form-select pt-2" id="accent1" aria-label="Floating label select example" name="accent1">
                                                    <option selected>{{ old('year') ?? $ville->accent1 }}</option>
                                                        @foreach(App\Models\City:: get() as $ville)
                                                            <option value="{{ $ville->accent1 }}">{{ $ville->accent1}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="pt-2">
                                                <input type="text" class="form-control pt-2" id="accent1" placeholder="Accent 1, s'il n'existe pas" value="" name="accent1">
                                            </div>
                                    </div>
                                    <div class="pt-2">
                                            <div>
                                                <select class="form-select pt-2" id="accent2" aria-label="Floating label select example" name="accent2">
                                                    <option selected>{{ old('year') ?? $ville->accent2 }}</option>
                                                        @foreach(App\Models\City:: get() as $ville)
                                                            <option value="{{ $ville->accent1 }}">{{ $ville->accent1 }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="pt-2">
                                                <input type="text" class="form-control pt-2" id="accent2" placeholder="Accent 2, s'il n'existe pas" value="" name="accent2">
                                            </div>
                                    </div>
                                </div>


                                <div class="form-floating pt-2">
                                    <label for="localSpeciality">{{ __('Spécialité locale') }}</label>
                                        <input type="text" class="form-control" id="localSpeciality" placeholder="" value="{{ old('year') ?? $ville->localSpeciality }}" name="localSpeciality">
                                </div>

                                <div class="form-floating">
                                    <label for="mayor">{{ __('Maire ou mairesse') }}</label>
                                        <input type="text" class="form-control" id="mayor" placeholder="" value="{{ old('year') ?? $ville->mayor }}" name="mayor">
                                </div>

                                <div class="form-floating">
                                    <label for="urbanPopulaiton">{{ __('Population urbaine') }}</label>
                                        <input type="text" class="form-control" id="urbanPopulaiton" placeholder="" value="{{ old('year') ?? $ville->urbanPopulaiton }}" name="urbanPopulaiton">
                                </div>

                                <div class="form-floating">
                                    <label for="ruralPopulaiton">{{ __('Population régionale') }}</label>
                                        <input type="text" class="form-control" id="ruralPopulaiton" placeholder="" value="{{ old('year') ?? $ville->ruralPopulaiton }}" name="ruralPopulaiton">
                                </div>

                                <div class="form-floating">
                                    <label for="tradeMax">{{ __('Commerce maximal') }}</label>
                                        <input type="text" class="form-control" id="tradeMax" placeholder="" value="{{ old('year') ?? $ville->tradeMax }}" name="tradeMax">
                                </div>

                                <div class="form-floating">
                                    <label for="localDrink">{{ __('Boisson locale') }}</label>
                                        <input type="text" class="form-control" id="localDrink" placeholder="" value="{{ old('year') ?? $ville->localDrink }}" name="localDrink">
                                </div>
                            </div>
                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="education">{{ __('Éducation') }}</label>
                                        <select class="form-select" id="education" aria-label="Floating label select example" name="education">
                                            <option selected>{{ old('year') ?? $ville->education }}</option>
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
                                    <label for="fortification">{{ __('Fortification') }}</label>
                                        <select class="form-select" id="fortification" aria-label="Floating label select example" name="fortification">
                                            <option selected>{{ old('year') ?? $ville->fortification }}</option>
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
                                    <label for="lawAndOrder">{{ __('Loi et l’ordre') }}</label>
                                        <select class="form-select" id="lawAndOrder" aria-label="Floating label select example" name="lawAndOrder">
                                            <option selected>{{ old('year') ?? $ville->lawAndOrder }}</option>
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
                                    <label for="technology">{{ __('Technologie') }}</label>
                                        <select class="form-select" id="technology" aria-label="Floating label select example" name="technology">
                                            <option selected>{{ old('year') ?? $ville->technology }}</option>
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
                                    <label for="wealth">{{ __('Richesse') }}</label>
                                        <select class="form-select" id="wealth" aria-label="Floating label select example" name="wealth">
                                            <option selected>{{ old('year') ?? $ville->wealth }}</option>
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
                                    <label for="economy">{{ __('Économie') }}</label>
                                        <input type="text" class="form-control" id="economy1" placeholder="" value="{{ old('year') ?? $ville->economy1 }}" name="economy1">
                                        <input type="text" class="form-control" id="economy2" placeholder="" value="{{ old('year') ?? $ville->economy2 }}" name="economy2">
                                        <input type="text" class="form-control" id="economy3" placeholder="" value="{{ old('year') ?? $ville->economy3 }}" name="economy3">
                                        <input type="text" class="form-control" id="economy4" placeholder="" value="{{ old('year') ?? $ville->economy4 }}" name="economy4">
                                        <input type="text" class="form-control" id="economy5" placeholder="" value="{{ old('year') ?? $ville->economy5 }}" name="economy5">
                                        <input type="text" class="form-control" id="economy6" placeholder="" value="{{ old('year') ?? $ville->economy6 }}" name="economy6">
                                        <input type="text" class="form-control" id="economy7" placeholder="" value="{{ old('year') ?? $ville->economy7 }}" name="economy7">
                                        <input type="text" class="form-control" id="economy8" placeholder="" value="{{ old('year') ?? $ville->economy8 }}" name="economy8">
                                        <input type="text" class="form-control" id="economy9" placeholder="" value="{{ old('year') ?? $ville->economy9 }}" name="economy9">
                                        <input type="text" class="form-control" id="economy10" placeholder="" value="{{ old('year') ?? $ville->economy10 }}" name="economy10">
                                </div>
                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="offers">{{ __('Offres') }}</label>
                                        <input type="text" class="form-control" id="offer1" placeholder="" value="{{ old('year') ?? $ville->offer1 }}" name="offer1">
                                        <input type="text" class="form-control" id="offer2" placeholder="" value="{{ old('year') ?? $ville->offer2 }}" name="offer2">
                                </div>

                                <div class="form-floating">
                                    <label for="demands">{{ __('Demandes') }}</label>
                                        <input type="text" class="form-control" id="demand1" placeholder="" value="{{ old('year') ?? $ville->demand1 }}" name="demand1">
                                        <input type="text" class="form-control" id="demand2" placeholder="" value="{{ old('year') ?? $ville->demand2 }}" name="demand2">
                                    </div>
                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="nextCity1">{{ __('Villes voisines 1') }}</label>
                                                <div>
                                                    <select class="form-select" id="nextCity1" aria-label="Floating label select example" name="nextCity1">
                                                            <option selected>{{ old('year') ?? $ville->nextCity1 }}</option>
                                                        @foreach(App\Models\City:: get() as $ville)
                                                            <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="pt-2">
                                                    <input type="text" class="form-control" id="nextCity1" placeholder="Si nouvelle ville" value="" name="nextCity1">
                                                </div>
                                </div>

                                <div class="form-floating">
                                    <label for="offerNextCity1">{{ __('Offres ville voisine 1') }}</label>
                                            <input type="text" class="form-control" id="offer1NextCity1" placeholder="" value="{{ old('year') ?? $ville->offer1NextCity1 }}" name="offer1NextCity1">
                                            <input type="text" class="form-control" id="offer2NextCity1" placeholder="" value="{{ old('year') ?? $ville->offer2NextCity1 }}" name="offer2NextCity1">
                                </div>

                                <div class="form-floating pt-2">
                                    <label for="demandNextCity1">{{ __('Demandes ville voisine 1') }}</label>
                                            <input type="text" class="form-control" id="demand1NextCity1" placeholder="" value="{{ old('year') ?? $ville->demand1NextCity1 }}" name="demand1NextCity1">
                                            <input type="text" class="form-control" id="demand2NextCity1" placeholder="" value="{{ old('year') ?? $ville->demand2NextCity1 }}" name="demand2NextCity1">
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="nextCity2">{{ __('Villes voisines 2') }}</label>
                                        <div>
                                            <select class="form-select" id="nextCity2" aria-label="Floating label select example" name="nextCity2">
                                                <option selected>{{ old('year') ?? $ville->nextCity2 }}</option>
                                                @foreach(App\Models\City:: get() as $ville)
                                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="pt-2">
                                            <input type="text" class="form-control" id="nextCity2" placeholder="Si nouvelle ville" value="" name="nextCity2">
                                        </div>

                                </div>

                                <div class="form-floating pt-2">
                                    <label for="offerNextCity2">{{ __('Offres ville voisine 2') }}</label>
                                        <input type="text" class="form-control" id="offer1NextCity2" placeholder="" value="{{ old('year') ?? $ville->offer1NextCity2 }}" name="offer1NextCity2">
                                        <input type="text" class="form-control" id="offer2NextCity2" placeholder="" value="{{ old('year') ?? $ville->offer2NextCity2 }}" name="offer2NextCity2">
                                </div>

                                <div class="form-floating">
                                    <label for="demandNextCity2">{{ __('Demandes ville voisine 2') }}</label>
                                        <input type="text" class="form-control" id="demand1NextCity2" placeholder="" value="{{ old('year') ?? $ville->demand1NextCity2 }}" name="demand1NextCity2">
                                        <input type="text" class="form-control" id="demand2NextCity2" placeholder="" value="{{ old('year') ?? $ville->demand2NextCity2 }}" name="demand2NextCity2">
                                </div>

                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="story">{{ __('Histoire') }}</label>
                                            <textarea class="form-control" placeholder="Écrivez l'histoire ici" id="story" style="height: 100px" name="story">{{ old('year') ?? $ville->story }}</textarea>
                                </div>

                                <div class="form-floating">
                                    <label for="version">{{ __('Version') }}</label>
                                        <input type="text" class="form-control" id="version" placeholder="" value="{{ old('year') ?? $ville->version }}" name="version">

                                </div>

                                <div class="form-floating">
                                    <label for="chapter">{{ __('Chapitre') }}</label>
                                        <input type="text" class="form-control" id="chapter" placeholder="" value="{{ old('year') ?? $ville->chapter }}" name="chapter">
                                </div>
                            </div>

                            <div class="container pt-4">

                                <form action="{{ route('ville.city.update', $ville->id) }}" method="post" class="btn-group">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
                                </form>

                            </div>



                            <div class="container pt-4">
                                <form action="{{ route('ville.city.destroy', $ville->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-sign-in"></i>Supprimer</button>
                                </form>
                            </div>


                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection

