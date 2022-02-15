<?php

namespace App\Http\Controllers;

class BolController extends Controller
{
    /*
    * Function to show the Bol.com page.
    */
    public function show()
    {
        return view('bol');
    }
}
