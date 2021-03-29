@extends('layouts.app')
@section('title')
{{ Auth::user()->name }}
@endsection

@section('content')

    <div class="row justify-content-center p-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mes informations</div>

                <div class="card-body">

                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom: {{ Auth::user()->name }}</th>
                                    <th>Adresse courriel: {{ Auth::user()->email }}</th>
                                    <th>Rôles: {{  Auth::user()->role }}</th>
                                    <th><a href="{{ route('profile.user.edit', Auth::user()->id) }}">Éditer</a>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="card-body">
                        <span><p><strong>Mes personnages</strong><a href="{{ route('character.user.create') }}"> (créer un personnage)</a></p></span>
                        <span><p><a href="/character.show">Benjamin</a></p></span>
                    </div>

                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row justify-content-center">

                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>

@endsection
