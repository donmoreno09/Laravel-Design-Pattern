<?php

namespace App\Repositories;

use App\Interfaces\TodoInterface;
use App\Models\Todo;

class TodoRepository implements TodoInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Function: getTodos
     * Description: This function will fetch all the todos from the Todo Model
     */
    public function getTodos()
    {
        return Todo::all();
    }

    /**
     * Function: getTodos
     * Description: This function will save todo
     */
    public function saveTodo($todoRequest)
    {
        return Todo::create($todoRequest);
    }
}
