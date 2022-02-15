<?php

namespace App\Http\Controllers;


class WelcomeController extends Controller
{
    /*
    * Function to show the Welcome page
    */
    public function show()
    {
        return view('welcome');
    }
}
