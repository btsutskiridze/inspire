<?php

namespace Btsutskiridze\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt()
    {
        $response = Http::get('https://api.quotable.io/random');

        return $response['content'] . ' - ' . $response['author'];
    }
}
