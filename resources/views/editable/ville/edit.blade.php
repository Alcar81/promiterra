@extends('layouts.app')
@section('title')
Mise à jour | {{ $ville->name }}
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
                                    <input type="text" class="form-control" id="name" placeholder="" value="{{ old('name') ?? $ville->name }}" name="name">
                                </div>

                                <div class="form-floating">
                                    <label for="house">{{ __('Maison') }}</label>
                                    <input type="text" class="form-control" id="house" placeholder="" value="{{ old('house') ?? $ville->house }}" name="house">
                                </div>

                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="yearfoundation">{{ __('Année de fondation') }}</label>
                                    <input type="text" class="form-control" id="yearfoundation" placeholder="" value="{{ old('yearfoundation') ?? $ville->yearfoundation }}" name="yearfoundation">
                                </div>

                                <div class="form-floating">
                                    <label for="size">{{ __('Taille') }}</label>
                                        <select class="form-select" id="size" aria-label="Floating label select example" name="size">
                                        <option selected>{{ old('year') ?? $ville->size }}</option>
                                        <option value="Capitale">Capitale</option>
                                        <option value="Cité">Cité</option>
                                        <option value="Hameau">Hameau</option>
                                        <option value="Métropole">Métropole</option>
                                        <option value="Village">Village</option>
                                        <option value="Ville">Ville</option>
                                        </select>
                                </div>

                                <div class="form-floating pt-2">
                                    <label for="weather">{{ __('Climat') }}</label>
                                        <input type="text" class="form-control" id="weather" placeholder="" value="{{ old('weather') ?? $ville->weather }}" name="weather">
                                </div>

                                <div class="form-floating">

                                    <label for="accent1">{{ __('Accents régionales') }}</label>
                                    <div>
                                            <div class="pt-2">
                                                <input type="text" class="form-control pt-2" id="accent1" placeholder="" value="{{ old('Accent 1') ?? $ville->Accent1 }}" name="accent1">
                                            </div>
                                    </div>
                                    <div class="pt-2">
                                            <div class="pt-2">
                                                <input type="text" class="form-control pt-2" id="accent2" placeholder="" value="{{ old('Accent 2') ?? $ville->Accent2 }}" name="accent2">
                                            </div>
                                    </div>

                                    <div class="pt-2">
                                        <div class="pt-2">
                                            <input type="text" class="form-control pt-2" id="accent3" placeholder="" value="{{ old('Accent 3') ?? $ville->Accent3 }}" name="accent3">
                                        </div>
                                    </div>
                                </div>

                                </div>


                                <div class="form-floating pt-2">
                                    <label for="localSpeciality">{{ __('Spécialité locale') }}</label>
                                        <input type="text" class="form-control" id="localSpeciality" placeholder="" value="{{ old('localSpeciality') ?? $ville->localSpeciality }}" name="localSpeciality">
                                </div>

                                <div class="form-floating">
                                    <label for="mayor">{{ __('Maire ou mairesse') }}</label>
                                        <input type="text" class="form-control" id="mayor" placeholder="" value="{{ old('mayor') ?? $ville->mayor }}" name="mayor">
                                </div>

                                <div class="form-floating">
                                    <label for="urbanPopulation">{{ __('Population urbaine') }}</label>
                                        <input type="text" class="form-control" id="urbanPopulation" placeholder="" value="{{ old('urbanPopulation') ?? $ville->urbanPopulation }}" name="urbanPopulation">
                                </div>

                                <div class="form-floating">
                                    <label for="ruralPopulation">{{ __('Population régionale') }}</label>
                                        <input type="text" class="form-control" id="ruralPopulation" placeholder="" value="{{ old('ruralPopulation') ?? $ville->ruralPopulation }}" name="ruralPopulation">
                                </div>

                                <div class="form-floating">
                                    <label for="tradeMax">{{ __('Commerce maximal') }}</label>
                                        <input type="text" class="form-control" id="tradeMax" placeholder="" value="{{ old('tradeMax') ?? $ville->tradeMax }}" name="tradeMax">
                                </div>

                                <div class="form-floating">
                                    <label for="localDrink">{{ __('Boisson locale') }}</label>
                                        <input type="text" class="form-control" id="localDrink" placeholder="" value="{{ old('localDrink') ?? $ville->localDrink }}" name="localDrink">
                                </div>
                            </div>
                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="education">{{ __('Éducation') }}</label>
                                        <select class="form-select" id="education" aria-label="Floating label select example" name="education">
                                            <option selected>{{ old('education') ?? $ville->education }}</option>
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
                                            <option selected>{{ old('fortification') ?? $ville->fortification }}</option>
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
                                            <option selected>{{ old('lawAndOrder') ?? $ville->lawAndOrder }}</option>
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
                                            <option selected>{{ old('technology') ?? $ville->technology }}</option>
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
                                            <option selected>{{ old('wealth') ?? $ville->wealth }}</option>
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
                                        <input type="text" class="form-control" id="economy1" placeholder="" value="{{ old('economy1') ?? $ville->economy1 }}" name="economy1">
                                        <input type="text" class="form-control" id="economy2" placeholder="" value="{{ old('economy2') ?? $ville->economy2 }}" name="economy2">
                                        <input type="text" class="form-control" id="economy3" placeholder="" value="{{ old('economy3') ?? $ville->economy3 }}" name="economy3">
                                        <input type="text" class="form-control" id="economy4" placeholder="" value="{{ old('economy4') ?? $ville->economy4 }}" name="economy4">
                                        <input type="text" class="form-control" id="economy5" placeholder="" value="{{ old('economy5') ?? $ville->economy5 }}" name="economy5">
                                        <input type="text" class="form-control" id="economy6" placeholder="" value="{{ old('economy6') ?? $ville->economy6 }}" name="economy6">
                                        <input type="text" class="form-control" id="economy7" placeholder="" value="{{ old('economy7') ?? $ville->economy7 }}" name="economy7">
                                        <input type="text" class="form-control" id="economy8" placeholder="" value="{{ old('economy8') ?? $ville->economy8 }}" name="economy8">
                                        <input type="text" class="form-control" id="economy9" placeholder="" value="{{ old('economy9') ?? $ville->economy9 }}" name="economy9">
                                        <input type="text" class="form-control" id="economy10" placeholder="" value="{{ old('economy10') ?? $ville->economy10 }}" name="economy10">
                                </div>
                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="offers">{{ __('Offres') }}</label>
                                        <input type="text" class="form-control" id="offer1" placeholder="" value="{{ old('offer1') ?? $ville->offer1 }}" name="offer1">
                                        <input type="text" class="form-control" id="offer2" placeholder="" value="{{ old('offer2') ?? $ville->offer2 }}" name="offer2">
                                </div>

                                <div class="form-floating">
                                    <label for="demands">{{ __('Demandes') }}</label>
                                        <input type="text" class="form-control" id="demand1" placeholder="" value="{{ old('demand1') ?? $ville->demand1 }}" name="demand1">
                                        <input type="text" class="form-control" id="demand2" placeholder="" value="{{ old('demand2') ?? $ville->demand2 }}" name="demand2">
                                    </div>
                            </div>

                            <div class="container border rounded p-4">

                                <div class="form-floating">
                                    <label for="nextCity1">{{ __('Villes voisines 1') }}</label>
                                                <div class="pt-2">
                                                    <input type="text" class="form-control" id="nextCity1" placeholder="" value="{{ old('nextCity1') ?? $ville->nextCity1 }}" name="nextCity1">
                                                </div>
                                </div>

                                <div class="form-floating">
                                    <label for="offerNextCity1">{{ __('Offres ville voisine 1') }}</label>
                                            <input type="text" class="form-control" id="offer1NextCity1" placeholder="" value="{{ old('offer1NextCity1') ?? $ville->offer1NextCity1 }}" name="offer1NextCity1">
                                            <input type="text" class="form-control" id="offer2NextCity1" placeholder="" value="{{ old('offer2NextCity1') ?? $ville->offer2NextCity1 }}" name="offer2NextCity1">
                                </div>

                                <div class="form-floating pt-2">
                                    <label for="demandNextCity1">{{ __('Demandes ville voisine 1') }}</label>
                                            <input type="text" class="form-control" id="demand1NextCity1" placeholder="" value="{{ old('demand1NextCity1') ?? $ville->demand1NextCity1 }}" name="demand1NextCity1">
                                            <input type="text" class="form-control" id="demand2NextCity1" placeholder="" value="{{ old('demand2NextCity1') ?? $ville->demand2NextCity1 }}" name="demand2NextCity1">
                                </div>
                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="nextCity2">{{ __('Villes voisines 2') }}</label>
                                        <div class="pt-2">
                                            <input type="text" class="form-control" id="nextCity2" placeholder="" value="{{ old('nextCity2') ?? $ville->nextCity2 }}" name="nextCity2">
                                        </div>

                                </div>

                                <div class="form-floating pt-2">
                                    <label for="offerNextCity2">{{ __('Offres ville voisine 2') }}</label>
                                        <input type="text" class="form-control" id="offer1NextCity2" placeholder="" value="{{ old('offer1NextCity2') ?? $ville->offer1NextCity2 }}" name="offer1NextCity2">
                                        <input type="text" class="form-control" id="offer2NextCity2" placeholder="" value="{{ old('offer2NextCity2') ?? $ville->offer2NextCity2 }}" name="offer2NextCity2">
                                </div>

                                <div class="form-floating">
                                    <label for="demandNextCity2">{{ __('Demandes ville voisine 2') }}</label>
                                        <input type="text" class="form-control" id="demand1NextCity2" placeholder="" value="{{ old('demand1NextCity2') ?? $ville->demand1NextCity2 }}" name="demand1NextCity2">
                                        <input type="text" class="form-control" id="demand2NextCity2" placeholder="" value="{{ old('demand2NextCity2') ?? $ville->demand2NextCity2 }}" name="demand2NextCity2">
                                </div>

                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="nextCity3">{{ __('Villes voisines 3') }}</label>
                                        <div class="pt-2">
                                            <input type="text" class="form-control" id="nextCity3" placeholder="" value="{{ old('nextCity3') ?? $ville->nextCity3 }}" name="nextCity3">
                                        </div>

                                </div>

                                <div class="form-floating pt-2">
                                    <label for="offerNextCity3">{{ __('Offres ville voisine 3') }}</label>
                                        <input type="text" class="form-control" id="offer1NextCity3" placeholder="" value="" name="offer1NextCity3">
                                        <input type="text" class="form-control" id="offer2NextCity3" placeholder="" value="" name="offer2NextCity3">
                                </div>

                                <div class="form-floating">
                                    <label for="demandNextCity3">{{ __('Demandes ville voisine 3') }}</label>
                                        <input type="text" class="form-control" id="demand1NextCity3" placeholder="" value="" name="demand1NextCity3">
                                        <input type="text" class="form-control" id="demand2NextCity3" placeholder="" value="" name="demand2NextCity3">
                                </div>

                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="nextCity4">{{ __('Villes voisines 4') }}</label>
                                        <div class="pt-2">
                                            <input type="text" class="form-control" id="nextCity4" placeholder="" value="{{ old('nextCity4') ?? $ville->nextCity4 }}" name="nextCity4">
                                        </div>

                                </div>

                                <div class="form-floating pt-2">
                                    <label for="offerNextCity4">{{ __('Offres ville voisine 4') }}</label>
                                        <input type="text" class="form-control" id="offer1NextCity4" placeholder="" value="" name="offer1NextCity4">
                                        <input type="text" class="form-control" id="offer2NextCity4" placeholder="" value="" name="offer2NextCity4">
                                </div>

                                <div class="form-floating">
                                    <label for="demandNextCity4">{{ __('Demandes ville voisine 4') }}</label>
                                        <input type="text" class="form-control" id="demand1NextCity4" placeholder="" value="" name="demand1NextCity4">
                                        <input type="text" class="form-control" id="demand2NextCity4" placeholder="" value="" name="demand2NextCity4">
                                </div>

                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="nextCity5">{{ __('Villes voisines 5') }}</label>
                                        <div class="pt-2">
                                            <input type="text" class="form-control" id="nextCity5" placeholder="" value="{{ old('nextCity5') ?? $ville->nextCity5 }}" name="nextCity5">
                                        </div>

                                </div>

                                <div class="form-floating pt-2">
                                    <label for="offerNextCity5">{{ __('Offres ville voisine 5') }}</label>
                                        <input type="text" class="form-control" id="offer1NextCity5" placeholder="" value="" name="offer1NextCity5">
                                        <input type="text" class="form-control" id="offer2NextCity5" placeholder="" value="" name="offer2NextCity5">
                                </div>

                                <div class="form-floating">
                                    <label for="demandNextCity5">{{ __('Demandes ville voisine 5') }}</label>
                                        <input type="text" class="form-control" id="demand1NextCity5" placeholder="" value="" name="demand1NextCity5">
                                        <input type="text" class="form-control" id="demand2NextCity5" placeholder="" value="" name="demand2NextCity5">
                                </div>

                            </div>


                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="nextCity6">{{ __('Villes voisines 6') }}</label>
                                        <div class="pt-2">
                                            <input type="text" class="form-control" id="nextCity6" placeholder="" value="{{ old('nextCity6') ?? $ville->nextCity6 }}" name="nextCity6">
                                        </div>

                                </div>

                                <div class="form-floating pt-2">
                                    <label for="offerNextCity6">{{ __('Offres ville voisine 6') }}</label>
                                        <input type="text" class="form-control" id="offer1NextCity6" placeholder="" value="" name="offer1NextCity6">
                                        <input type="text" class="form-control" id="offer2NextCity6" placeholder="" value="" name="offer2NextCity6">
                                </div>

                                <div class="form-floating">
                                    <label for="demandNextCity6">{{ __('Demandes ville voisine 6') }}</label>
                                        <input type="text" class="form-control" id="demand1NextCity6" placeholder="" value="" name="demand1NextCity6">
                                        <input type="text" class="form-control" id="demand2NextCity6" placeholder="" value="" name="demand2NextCity6">
                                </div>

                            </div>

                            <div class="container border rounded p-4">
                                <div class="form-floating">
                                    <label for="story">{{ __('Histoire') }}</label>
                                            <textarea class="form-control" placeholder="Écrivez l'histoire ici" id="summernote" style="height: 100px" name="story">{{ old('story') ?? $ville->story }}</textarea>
                                </div>

                                <div class="form-floating">
                                    <label for="version">{{ __('Version') }}</label>
                                        <input type="text" class="form-control" id="version" placeholder="" value="{{ old('version') ?? $ville->version }}" name="version">

                                </div>

                                <div class="form-floating">
                                    <label for="chapter">{{ __('Chapitre') }}</label>
                                        <input type="text" class="form-control" id="chapter" placeholder="" value="{{ old('chapter') ?? $ville->chapter }}" name="chapter">
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

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>
@endsection

