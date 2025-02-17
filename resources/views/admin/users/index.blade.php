@extends('layouts.app')

@section('title')
Liste des utilisateurs
@endsection

@section('content')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Liste des utilisateurs</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rôles</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                        <td>
                                            @can('edit-users')
                                                <a href="{{ route('admin.users.edit' , $user->id) }}"><button class="btn btn-primary">Éditer</button></a>
                                            @endcan
                                            @can('delete-users')
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm">Supprimer</button>
                                                </form>
                                            @endcan
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
