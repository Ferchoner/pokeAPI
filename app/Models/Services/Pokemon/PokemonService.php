<?php
namespace App\Models\Services\Pokemon;

use App\Models\Pokemon;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class PokemonService
{

    /**
     * Searches for a Pokemon by name or ID.
     *
     * @param PokemonRequest $request
     * @return Pokemon|array|mixed
     * @throws ConnectionException
     * @throws PokemonNotFoundException
     * @throws PokemonServerException
     */
    public function searchByNameOrId(PokemonRequest $request)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$request->getName()}");
        if ($response->clientError()) {
            throw new PokemonNotFoundException();
        }

        if ($response->serverError()) {
            throw new PokemonServerException();
        }

        return $request->getObj() ? $this->transformToObj($response->json()) : $response->json();
    }

    /**
     * Transforms the provided data into a Pokemon object.
     *
     * @param mixed $data The data to be transformed into a Pokemon object.
     * @return Pokemon The transformed Pokemon object.
     */
    protected function transformToObj($data)
    {
        $types = [];

        foreach ($data['types'] as $dTypes) {
            $types[] = $dTypes['type']['name'];
        }
        $abilities = [];
        foreach ($data['abilities'] as $dAbilities) {
            $abilities[] = $dAbilities['ability']['name'];
        }

        return new Pokemon(
            $data['sprites']['front_default'],
            $data['name'],
            $data['id'],
            $data['height'],
            $data['weight'],
            $types,
            $abilities
        );
    }
}
