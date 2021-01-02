@extends('layouts.app')
@section('title')
Édition Villes
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
                          <p><h2><strong>{{ __('Création d’une ville') }}</strong></h2></p>
                        </div>


                    </div>



                    <div class="card-body p-4">
                        <form class="form-floating">

                            <div class="container border rounded p-4">

                                <div>
                                    <label for="importCity">{{ __('Importer une ville') }}</label>
                                                <select class="form-select" id="importCity" aria-label="Floating label select example">
                                                    <option selected></option>
                                                    @foreach(App\Models\City:: get() as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                    @endforeach
                                                </select>
                                </div>

                                <div class="pt-2">
                                    <label for="yearwanted">{{ __('Année désirée') }}</label>
                                                <select class="form-select" id="year" aria-label="Floating label select example">
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

                        </form>

                        <form class="form-floating" action="{{ route('ville.city.store') }}" method="POST">

                            @csrf
                            <!-- EditForm -->
                                @include('editable.ville.partials.editForm')
                            <!-- end: EditForm -->

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection

