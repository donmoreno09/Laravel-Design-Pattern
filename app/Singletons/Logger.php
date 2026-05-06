<?php

namespace App\Singletons;

use Illuminate\Support\Facades\Log;

class Logger
{
    private static $instance = null;

    private function __contruct() {}
    private function __clone() {}
    
    public static function getInstance()
    {
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function dumpLog($message)
    {
        $objectId = spl_object_id($this);

        Log::info("$message Object Id: {$objectId}");
    }
}
