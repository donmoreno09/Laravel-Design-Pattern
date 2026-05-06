<?php

namespace App\Services;

use App\Factories\UserFactory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private UserFactory $userFactory)
    {
        $this->userFactory = $userFactory;
    }

    /**
     * Function: createAndSaveUser
     * @param array request
     * @return 
     */
    public function createAndSaveUser($request)
    {
        $user = $this->userFactory->createUser($request);
        $user->password = Hash::make($request['password']);
        return $user->save();
    }

    /**
     * Function: getUsers
     * @param NA
     * @return 
     */
    public function getUsers()
    {
        return User::all();
    }
}
