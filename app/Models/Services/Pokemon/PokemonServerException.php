<?php
/*
 * Core.  Backend creado por CONSUCORP para Editorial Santillana.
 * Copyright (c) 2026.
 * fernando@consucorp.com.mx
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 */

namespace App\Models\Services\Pokemon;

class PokemonServerException extends \Exception
{
    protected $message = 'Server is unavailable';
}
