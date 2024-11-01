<!-- resources/views/pokemon/viewed.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Vistos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="container py-5">
        <div class="text-center">
        <h1 class="display-4 fw-bold text-warning">Pokedex</h1>
        <p class="lead text-secondary text-warning">Pokémon Vistos</p>
        </div>
        <div class="row">
            @foreach ($pokemons as $pokemon)
                <div class="col-md-4 mb-4">
                    <div class="pokedex-container card">
                        <img src="{{ $pokemon->image_url }}" class="card-img-top" alt="{{ $pokemon->name }}">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{{ ucfirst($pokemon->name) }}</h5>
                            <p class="card-text">Tipo: {{ ucfirst($pokemon->type) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('pokemon.show') }}" class="btn btn-custom">Obtener otro Pokémon</a>
        </div>
    </div>
</body>
</html>
