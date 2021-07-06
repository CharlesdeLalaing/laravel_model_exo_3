<div class="container">
    <h1>section 6:</h1>
    <p>nombre de membres = {{ $count }}</p>
    <div class="row mt-4">
        @foreach ($peoples as $people)
            @if ($people->age < 18 || $people->age >= 24)
                @if ($people->genre == 'Homme')
                    <div class="col-4 mt-4">
                        <div class="card d-flex p-3 bg-primary" style="width: 18rem">
                            <p>ID: {{ $people->id }}</p>
                            <p>NOM: {{ $people->nom }}</p>
                            <p>AGE: {{ $people->age }}</p>
                            <p>GENRE: {{ $people->genre }}</p>
                        </div>
                    </div>
                @elseif ($people->genre == 'Femme')
                    <div class="col-4 mt-4">
                        <div class="card d-flex p-3 bg-success" style="width: 18rem">
                            <p>ID: {{ $people->id }}</p>
                            <p>NOM: {{ $people->nom }}</p>
                            <p>AGE: {{ $people->age }}</p>
                            <p>GENRE: {{ $people->genre }}</p>
                        </div>
                    </div>
                @endif
            @endif
            @if ($loop->iteration % 3 == 0)
    </div>
    <div class="row mt-4">
        @endif
        @endforeach
    </div>
</div>
