<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FAQController extends Controller
{
    /*
    * Function to show the FAQ page
    */
    public function show()
    {
        return view('faq', [
            'faqs'=>Faq::all()
        ]);
    }
}
