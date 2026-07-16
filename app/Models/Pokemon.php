<?php

namespace App\Models;

class Pokemon
{
    protected string $image = '';
    protected string $name = '';
    protected string $pokemonId = '';
    protected string $height = '';
    protected string $weight = '';
    protected array $types = [];
    protected array $abilities = [];

    /**
     * @param $image
     * @param $name
     * @param $pokemonId
     * @param $height
     * @param $weight
     * @param $types
     * @param $abilities
     */
    public function __construct(string $image, string $name, string $pokemonId, string $height, string $weight, array $types, array $abilities)
    {
        $this->image = $image;
        $this->name = $name;
        $this->pokemonId = $pokemonId;
        $this->height = $height;
        $this->weight = $weight;
        $this->types = $types;
        $this->abilities = $abilities;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPokemonId(): string
    {
        return $this->pokemonId;
    }

    /**
     * @param string $pokemonId
     */
    public function setPokemonId(string $pokemonId): void
    {
        $this->pokemonId = $pokemonId;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     */
    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return array
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param array $types
     * @return void
     */
    public function setTypes(array $types): void
    {
        $this->types = $types;
    }

    /**
     * @return array
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @param array $abilities
     */
    public function setAbilities(array $abilities): void
    {
        $this->abilities = $abilities;
    }
}
