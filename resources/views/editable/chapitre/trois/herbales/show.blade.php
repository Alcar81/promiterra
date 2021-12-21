@extends('layouts.app')
@section('title')
Objets | Chapire 3 | L'économie
@endsection

@if(session()->has('info'))
    <div class="notification is-success">
        {{ session('info') }}
    </div>
@endif

<head2>
    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head2>

@section('content')

<!-- Chapitre 3 L'économie | Objets -->
    <section>  
        <div class="container justify-content-center">
            <div class="col-md-11">               

                <div class="row">

                    <div class="border" style="width: 25%" height="500px">
                        <span></span>
                    </div>

                    <div class="border" style="width: 75%" display="inline-block">                                       
                                                        
                </div>

                <div class="row">

                    <div class="border" style="width: 10%" height="500px">                                    
                       
                    </div>

                    <div class="border" style="width: 90%" display="inline-block" p-4>
                        
                    </div>

                </div>

                <div class="row">

                    <div class="container border">

                        

                    </div>

                    <div class="container border">

                        
                        
                    </div>
                    
                </div>

                <div class="row p-2" style="height: 40px;">

                    <div class="" style="width: 25%"><p>Promiterra, version </p></div>
                    <div class="" style="width: 50%; text-align: center;"><p>Dessinateur: </p></div>
                    <div class="" style="width: 25%; text-align: right;"><p>Chapire 3 | L'économie - armes page</p></div>
                    
                </div>

            </div>

        </div>

    </section>

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>
<!-- end: Chapitre 3 L'économie | Armes -->
@endsection
