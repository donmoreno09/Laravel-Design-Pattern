<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Singletons\Logger;

class AnotherController extends Controller
{
    public function singletonFromAnotherController($message) 
    {
        $log = Logger::getInstance();
        $log->dumpLog($message);
    }
}
