<div class="card-body">
    <div class="row justify-content-center">
        <table class="table">
            @foreach($cities->chunk(8) as $villes)
                <div class="row justify-content-center">
                    <tbody>
                        <div class="justify-content-center p-2">
                            @foreach($villes as $ville)
                            <span><button class="btn btn-link p-2"><a href="{{ route('ville.city.show', $ville->id) }}">{{ $ville->name }}</a></button></span>
                            @endforeach
                        </div>
                    </tbody>
                </div>
            @endforeach
        </table>
    </div>
</div>
