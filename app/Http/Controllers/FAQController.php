<?php

namespace App\Http\Controllers;

class FAQController extends Controller
{
    /*
    * Function to show the FAQ page
    */
    public function show()
    {
        return view('faq');
    }
}
