<?php

namespace Btsutskiridze\Inspire\Controllers;

use Btsutskiridze\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
