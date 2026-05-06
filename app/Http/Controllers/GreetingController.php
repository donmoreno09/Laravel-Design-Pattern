<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showGreetings($role)
    {
        # admin | editor | publisher | default

        if($role === 'admin'){
            return 'Hey Admin! You have full access.';
        } elseif ($role === 'editor') {
            return 'Hey Editor! You have edit access.';
        } elseif ($role === 'publisher') {
            return 'Hey Publisher! You have publish access.';
        } else {
            return 'Hey User! You have viewer access';
        }
    }
}
