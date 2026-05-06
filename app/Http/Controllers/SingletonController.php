<?php

namespace App\Http\Controllers;

use App\Singletons\Logger;

class SingletonController extends Controller
{
    public function __construct(private Logger $logger) {}

    public function singletonExample()
    {
        $this->logger->dumpLog('Singleton Log Message - Instance 1');
        $this->logger->dumpLog('Singleton Log Message - Instance 2');
        $this->logger->dumpLog('Singleton Log Message - Instance 3');

        $anotherController = app(AnotherController::class);
        $anotherController->singletonFromAnotherController('Another Controller');

        return 'Log has been logged xD';
    }
}
