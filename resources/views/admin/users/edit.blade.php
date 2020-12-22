@extends('layouts.app')

@section('title')
Users management
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier <strong>{{ $user->name }}</strong></div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                                @csrf
                                {{ method_field('PATCH') }}

                                <div class="form-group row">
                                    <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>

                                    <div class="col-md-6">
                                        @foreach($roles as $role)
                                            <div class="form-check">

                                                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                                <label>{{ $role->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Modifier les rôles</button>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
