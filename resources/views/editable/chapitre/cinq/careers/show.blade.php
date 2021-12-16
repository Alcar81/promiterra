@extends('layouts.app')
@section('title')
{{ $careers->CareerClassName }} | Chapire 5 | Les carrières
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

<!-- Chapitre 5 Les Carrières -->
    <section>  
        <div class="container justify-content-center">
            <div class="border col-md-11">               

                <div class="row">
                    <div class="border" style="width: 25%" height="500px">
                        <span>Place pour futur image de la carrière</span>
                    </div>

                    <div class="border" style="width: 75%" display="inline-block">                                       
                        <div class="row justify-content-center pt-4">
                            <h2>{{ $careers->CareerClassName }}</h2>                                        
                        </div>
                        <div class="row justify-content-center">
                            <p>Prérequis : Druide ({{ $careers->CareerIDParent1 }}) + Traqueur ({{ $careers->CareerIDParent2 }}) </p>
                        </div>
                        <div class="row justify-content-center">
                            <p><strong></strong>
                                (<a href="{{ route('cinq.careers.edit', $careers->id) }}">
                                    @can ('edit-users')
                                        modifier / supprimer
                                    @endcan
                                </a>)
                            </p>
                        </div>
                        <div class="container justify-content-center p-4">
                            <span>{!! $careers->CareerDescription !!}</span>
                        </div>                                   
                    </div>                                
                </div>

                <div class="row">

                    <div class="border" style="width: 10%" height="500px">                                    
                        <div style="text-align: center;" height="20px">{{ __('Physique') }}</div>
                        <div style="text-align: center;" height="20px">{{ $careers->CareerPhysical }}</div>
                        <div style="text-align: center;" height="20px">{{ __('Mental') }}</div>
                        <div style="text-align: center;" height="20px">{{ $careers->CareerMental }}</div>
                        <div style="text-align: center;" height="20px">{{ __('Réaction') }}</div>
                        <div style="text-align: center;" height="20px">{{ $careers->CareerReaction }}</div>
                    </div>

                    <div class="border" style="width: 90%" display="inline-block" p-4>
                        <div class="p-1">Compétences: {{ $careers->CareerManual }} {{ $careers->Ability }} {{ $careers->CareerSenses }} {{ $careers->CareerSocial }} {{ $careers->CareerKnowledge }} {{ $careers->CareerAuchoix }}</div>                                                                                                                                                  
                        <div class="p-1">Armes: {{ $careers->CareerWeapons1 }} {{ $careers->CareerWeapons2 }} {{ $careers->CareerWeapons3 }} {{ $careers->CareerWeapons4 }} {{ $careers->CareerWeapons5 }} {{ $careers->CareerWeapons6 }} {{ $careers->CareerWeapons7 }} {{ $careers->CareerWeapons8 }} {{ $careers->CareerWeapons9 }}</div>                                                 
                        <div class="p-1">Armures: {{ $careers->CareerArmors1 }} {{ $careers->CareerArmors2 }} {{ $careers->CareerArmors3 }}</div>                                              
                        <div class="p-1">Spécial: {{ $careers->CareerSpecials1 }} {{ $careers->CareerSpecials2 }} {{ $careers->CareerSpecials3 }}</div>
                    </div>

                </div>

                <div class="row">
                    <div class="container border">
                        <div class="p-2"><strong>{{ $careers->CareerAction1Name }}:</strong> {!! $careers->CareerAction1Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerAction2Name }}:</strong> {!! $careers->CareerAction2Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerAction3Name }}:</strong> {!! $careers->CareerAction3Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerAction4Name }}:</strong> {!! $careers->CareerAction4Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerAction5Name }}:</strong> {!! $careers->CareerAction5Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerAction6Name }}:</strong> {!! $careers->CareerAction6Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerAction7Name }}:</strong> {!! $careers->CareerAction7Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerAction8Name }}:</strong> {!! $careers->CareerAction8Desc !!}</div>
                    </div>
                    <div class="container border">
                        <div class="p-2"><strong>{{ $careers->CareerTalent1Name }}:</strong> {!! $careers->CareerTalent1Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerTalent2Name }}:</strong> {!! $careers->CareerTalent2Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerTalent3Name }}:</strong> {!! $careers->CareerTalent3Desc !!}</div>
                        <div class="p-2"><strong>{{ $careers->CareerTalent4Name }}:</strong> {!! $careers->CareerTalent4Desc !!}</div>                                
                    </div>
                </div>

                <div class="row p-2">
                    <div class="justify-content-left">Promiterra, version {{ $careers->CareerVersion }}</div>
                    <div class="justify-content-center">Dessinateur: {{ $careers->CareerImageArtist }}</div>
                    <div class="justify-content-right">
                        <div>Chapire 5 | Les carrières - </div>
                        <div> {{ $careers->CareerIDClass }}</div>
                    </div>
                <div>

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
<!-- end: Chapitre 7 Les Cités -->
@endsection
