<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use \Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *

     */
    public function index()
    {
        //$users = "hey";
        $users = DB::table('joueur')->get();

        return view('user', compact('users'));
    }
}
