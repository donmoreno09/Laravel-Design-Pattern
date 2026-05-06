<?php

namespace App\Singletons;

use Illuminate\Support\Facades\Log;

class Logger
{
    public function dumpLog($message)
    {
        $objectId = spl_object_id($this);

        Log::info("$message Object Id: {$objectId}");
    }
}
