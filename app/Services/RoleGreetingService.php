<?php

namespace App\Services;

use App\Services\GreetingStrategies\AdminGreeting;
use App\Services\GreetingStrategies\DefaultGreeting;
use App\Services\GreetingStrategies\EditorGreeting;
use App\Services\GreetingStrategies\PublisherGreeting;

class RoleGreetingService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getGreeting($role)
    {
        $strategies = [
            'admin'     => AdminGreeting::class,
            'editor'    => EditorGreeting::class,
            'publisher' => PublisherGreeting::class,
        ];

        $strategyClass = $strategies[$role] ?? DefaultGreeting::class;

        return (new GreetingContext(new $strategyClass))->showGreeting();
    }
}
