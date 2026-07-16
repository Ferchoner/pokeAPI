<?php
namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Services\Pokemon\PokemonNotFoundException;
use App\Models\Services\Pokemon\PokemonRequest;
use App\Models\Services\Pokemon\PokemonServerException;
use App\Models\Services\Pokemon\PokemonService;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{

    /**
     * @var PokemonService
     */
    protected $applicationService;

    /**
     * @param PokemonService $applicationService
     */
    public function __construct(PokemonService $applicationService)
    {
        $this->applicationService = $applicationService;
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function search(Request $request)
    {

        $rules = [
            'name' => 'required|string|min:1|max:20'
        ];

        $data = $request->validate($rules);

        $data = new PokemonRequest(
            $data['name']
        );
        $r = null;
        $errors = false;
        $errorMessage = '';

        try {
            $r = $this->applicationService->searchByNameOrId($data);
        } catch (\Exception $exception) {
            $errors = true;
            $errorMessage = $exception->getMessage();
        }

        return view(
            'results',
            [
                'pokemon' => $r,
                'errors' => $errors,
                'errorMessage' => $errorMessage
            ]
        );
    }
}
