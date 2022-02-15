<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    /*
    * Function to show the Profile page
    */
    public function show()
    {
        return view('profile');
    }
}
