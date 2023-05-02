<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class ColorNamingService
{
    public function nameIt($color)
    {
        return 'pink sweet';
        
        // $response = Http::get('https://www.thecolorapi.com/id?hex='.$color);

        // return json_decode($response)->name->value;

    }
}