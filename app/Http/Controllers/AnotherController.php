<?php

namespace App\Http\Controllers;

use App\Singletons\Logger;

class AnotherController extends Controller
{
    public function __construct(private Logger $logger) {}

    public function singletonFromAnotherController($message)
    {
        $this->logger->dumpLog($message);
    }
}
