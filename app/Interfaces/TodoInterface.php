<?php

namespace App\Interfaces;

interface TodoInterface
{
    # Fetch all todos
    public function getTodos();

    # Save todo
    public function saveTodo($request);
    
}
