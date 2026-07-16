<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeAPI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
<main>
    <div class="flex items-center justify-center h-screen bg-gray-200">
        <form class="w-1/3 p-4 bg-white shadow-md rounded" action="/search" method="POST">
            @csrf
            <h2 class="text-2xl mb-4 text-center">Buscador de Pokemon</h2>
            <input type="text" name="name" id="name" placeholder="Ingresa el nombre o numero para buscar" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" required/>

            <button type="submit" class="w-full px-3 py-2 mt-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">Buscar</button>
        </form>
    </div>
</main>
</body>
</html>
