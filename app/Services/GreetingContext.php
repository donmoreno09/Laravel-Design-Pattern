<?php

namespace App\Services;

use App\Interfaces\GreetingInterface;

class GreetingContext
{
    /**
     * Create a new class instance.
     */
    public function __construct(private GreetingInterface $greetingInterface)
    {}

    public function showGreeting() : string
    {
        return $this->greetingInterface->greet();
    }
}
