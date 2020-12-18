@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }} profile</div>

                <div class="card-body">

                    Bonjour,
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

@endsection
