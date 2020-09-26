<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the user authenticate.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable
     */
    public function index()
    {
        return auth()->user();
    }

    /**
     * Show if user is auth.
     *
     * @return \Illuminate\Http\Response
     */
    public function isAuth()
    {
        return response("", 204);
    }
}
