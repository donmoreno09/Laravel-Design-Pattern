<?php

namespace App\Services;

use App\Interfaces\TodoInterface;

class TodoService
{
    public $todoInterface;

    /**
     * Create a new class instance.
     */
    public function __construct(TodoInterface $todoInterface)
    {
        $this->todoInterface = $todoInterface;
    }

    /**
     * Function: getTodos
     * Description: This function will fetch all the todos from the Todo Model
     */
    public function getTodos()
    {
        return $this->todoInterface->getTodos();
    }

    /**
     * Function: saveTodo
     * Description: This function will save todo
     */
    public function saveTodo($request)
    {
        # Organize Todo Form Data
        $todo = $this->mapTodoFormData($request);

        # Save Todo
        return $this->todoInterface->saveTodo($todo);
    }

    /**
     * Function: mapTodoFormData
     * Description: This function will map todo form data
     */
    public function mapTodoFormData($request)
    {
        return [
            'title' => $request->title,
            'description' => $request->description
        ];
    }
}
