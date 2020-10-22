<?php

namespace App\Correios;

use App\Correios\Providers\Sigep;
use Illuminate\Support\Collection;

class CorreioManager
{
    protected $availableProviders = [
        Sigep::class
    ];

    protected function getAvailableProviders(): Collection
    {
        return collect($this->availableProviders)->mapWithKeys(function ($class){
            
        });
    }
}