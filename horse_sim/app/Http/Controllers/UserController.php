<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use \Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *

     */
    public function index()
    {
        // DB::enableQueryLog();
        $users = "hey";

        return view('user', compact('users'));
    }
}
