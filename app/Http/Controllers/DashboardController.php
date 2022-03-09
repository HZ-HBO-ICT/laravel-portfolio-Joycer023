<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /*
    * Function to show the Dashboard page
    */
    public function show()
    {
        return view('dashboard');
    }
}
