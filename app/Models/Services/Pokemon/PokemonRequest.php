<?php
namespace App\Models\Services\Pokemon;

class PokemonRequest
{
    protected string $name;
    protected bool $obj;

    public function __construct(string $name, bool $obj = true)
    {
        $this->name = $name;
        $this->obj = $obj;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function getObj()
    {
        return $this->obj;
    }
}
