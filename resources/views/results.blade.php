<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeAPI Resultados</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-200">
<main>
    @if ($errors)
        <div class="flex items-center justify-center h-screen">
            {{ $errorMessage }}
        </div>
    @else
        <div class="flex items-center justify-center h-screen">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="p-6 space-y-4 border-2 border-gray-200 rounded-lg">
                    <img class="object-cover w-full h-48 rounded" src="{{ $pokemon->getImage() }}" alt="{{ $pokemon->getName() }}">
                    <h2 class="text-2xl font-bold text-gray-800">Nombre: {{ $pokemon->getName() }}</h2>
                    <p class="text-gray-600">Numero Pokemon: {{ $pokemon->getPokemonId() }}</p>
                    <p class="text-gray-600">Altura: {{ $pokemon->getHeight() }}</p>
                    <p class="text-gray-600">Peso: {{ $pokemon->getWeight() }}</p>

                    <h3 class="text-lg font-semibold text-gray-800">Tipos:</h3>
                    <ul class="space-y-1">
                        @foreach($pokemon->getTypes() as $type)
                            <li class="text-gray-600">{{ $type }}</li>
                        @endforeach
                    </ul>

                    <h3 class="text-lg font-semibold text-gray-800">Habilidades:</h3>
                    <ul class="space-y-1">
                        @foreach($pokemon->getAbilities() as $ability)
                            <li class="text-gray-600">{{ $ability }}</li>
                        @endforeach
                    </ul>

                    <h3 class="text-lg font-semibold text-gray-800">Estadisticas:</h3>
                    <ul class="space-y-1">
                        @foreach($pokemon->getStats() as $stat)
                            <li class="text-gray-600">{{ $stat['name'] }}: {{ $stat['base_stat'] }}</li>
                        @endforeach
                    </ul>
                    <a href="/" class="px-3 py-2 mt-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">Volver</a>
                </div>
            </div>
        </div>
    @endif
</main>
</body>
</html>
