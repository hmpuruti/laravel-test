<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * Initial methods
     * Starting point controller
     * Returns welcome page
     */
    public function index()
    {
        return view('welcome');
    }
}
