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


                    <div>


                        Bonjour {{ Auth::user()->name }},
                        <br /><br />
                        Bienvenu sur ton profile.
                        <br />
                        Cette section est en construction.
                        <br />
                        <br />
                        Merci.
                        <br />
                        Promiterra Webmestre :0)
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
