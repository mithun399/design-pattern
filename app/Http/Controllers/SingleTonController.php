<?php

namespace App\Http\Controllers;

use App\Singletons\ManageLogging;
use Illuminate\Http\Request;

class SingleTonController extends Controller
{
    public function singleTonExample()
    {
        (new ManageLogging())->createLog('Log has been Created');

        return 'Log has been Created';
    }
}
