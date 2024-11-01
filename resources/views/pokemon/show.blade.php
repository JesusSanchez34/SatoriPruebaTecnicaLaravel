
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>

<body>
    <!-- Encabezado de la Pokedex -->
    <div class="container py-5">
        <div class="text-center">
            <h1 class="display-4 fw-bold text-warning">Pokedex</h1>
            <p class="lead text-secondary text-warning">Explora los Pokémon de manera aleatoria.</p>
        </div>
    </div>

    <!-- Tarjeta de Pokemon -->
    <div class="container d-flex justify-content-center">
        <div class="pokedex-container card">
            <img id="pokemonImage" src="{{ $pokemon['image_url'] }}" class="card-img-top" alt="{{ $pokemon['name'] }}">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Nombre del Pokémon</h5>
                <h5 id="pokemonName" class="card-title">{{ $pokemon['name'] }}</h5>
                <h5 class="card-title fw-bold">Tipo del Pokémon</h5>
                <p id="pokemonType" class="card-text">Tipo: {{ $pokemon['type'] }}</p>
                <hr>
            </div>
            <div class="card-footer text-center bg-transparent border-0 pb-4">
                <a href="{{ route('pokemon.show') }}" class="btn btn-custom mb-2">Obtener otro Pokémon</a>

                <a href="{{ route('pokedex.index') }}" class="btn btn-custom mb-2">Mostrar Pokémon guardados</a>
            </div>
        </div>
    </div>

    <script>
        // Función para obtener un nuevo Pokémon aleatorio
        const obtenerPokemonAleatorio = () => {
                window.location.reload();
        };
        

        // Inicializa el intervalo para obtener un nuevo Pokémon cada 30 segundos
        setInterval(obtenerPokemonAleatorio, 30000);
    </script>


</body>

</html>