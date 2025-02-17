@extends('layouts.app')

@section('title')
Liste des utilisateurs
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modifier <strong>{{ $user->name }}</strong></div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.update', $user) }}" method="POST">
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

                                <div class="form-group row">
                                    <label for="roles" class="col-md-2 col-form-label">Roles</label>
                                </div>

                                <div class="form-group row">


                                    <div class="col-md-6">

                                        @foreach($roles as $role)
                                            <div class="form-group form-check">

                                                <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}" id="{{ $role->id }}" @if($user->roles->pluck('id')->contains($role->id)) checked
                                                @endif>
                                                <label>{{ $role->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Modifier les informations</button>
                            </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
@endsection
