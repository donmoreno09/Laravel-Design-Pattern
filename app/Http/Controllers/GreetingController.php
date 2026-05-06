<?php

namespace App\Http\Controllers;

use App\Services\RoleGreetingService;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function __construct(private RoleGreetingService $roleGreetingService) 
    {}
    
    public function showGreetings($role)
    {
        return $this->roleGreetingService->getGreeting($role);
        
        # admin | editor | publisher | default

        // if($role === 'admin'){
        //     return 'Hey Admin! You have full access.';
        // } elseif ($role === 'editor') {
        //     return 'Hey Editor! You have edit access.';
        // } elseif ($role === 'publisher') {
        //     return 'Hey Publisher! You have publish access.';
        // } else {
        //     return 'Hey User! You have viewer access';
        // }
    }
}
