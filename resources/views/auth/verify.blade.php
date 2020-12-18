@extends('layouts.app')

@section('title')
    Vérification
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérification de votre adresse courriel') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification a été envoyé à votre adresse courriel.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre adresse courriel pour un lien de vérification.') }}
                    {{ __('Si vous n’avez pas reçu le courriel') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Cliquez ici pour demander un nouveau lien') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
