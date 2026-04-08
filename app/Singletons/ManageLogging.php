<?php

namespace App\Singletons;

use Illuminate\Support\Facades\Log;

class ManageLogging
{
    public function createLog($data)
    {
        Log::info($data);
    }

}
