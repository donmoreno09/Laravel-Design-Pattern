<?php

namespace App\Http\Controllers;

use App\Singletons\Logger;

class SingletonController extends Controller
{
    public function singletonExample()
    {
        $logger = Logger::getInstance();
        $logger->dumpLog('Singleton Log Message - Instance 1');

        $logger = Logger::getInstance();
        $logger->dumpLog('Singleton Log Message - Instance 2');

        $logger = Logger::getInstance();
        $logger->dumpLog('Singleton Log Message - Instance 3');

        $anotherController = new AnotherController();
        
        $anotherController->singletonFromAnotherController('Another Controller');

        return 'Log has been logged xD';
    }
}

