@extends('layouts.app')
@section('title')
{{ Auth::user()->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mes informations</div>

                <div class="card-body">


                    <div>

                        <form action="{{ route('profile.user.update', $user) }}" method="POST">
                            @csrf
                            {{ method_field('PATCH') }}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label">{{ __('Nom') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Adresse courriel') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Modifier les informations</button>
                        </form>

                        <form action="{{ route('profile.user.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning">Supprimer</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
