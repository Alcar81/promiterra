@extends('layouts.app')
@section('title')
Index
@endsection

@if(session()->has('info'))
    <div class="notification is-success">
        {{ session('info') }}
    </div>
@endif


@section('content')

    <div class="row justify-content-center p-4">
        <div class="col-md-6">
            <div class="card">

                    <div class="card-body p-4">
                       Index

                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection

