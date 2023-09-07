<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        auth()->logout();

        return to_route('login');
    }
}
