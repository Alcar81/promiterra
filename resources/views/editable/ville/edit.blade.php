@extends('layouts.app')
@section('title')
Mise à jour | {{ $ville->name }}
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
                          <p><h2><strong>{{ __('Modifier') }} {{ $ville->name }}</strong></h2></p>
                        </div>


                    </div>



                    <div class="card-body p-4">


                        <form class="form-floating" action="{{ route('ville.city.update', $ville->id) }}" method="POST">
                            @csrf
                            {{ method_field('PATCH') }}

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

