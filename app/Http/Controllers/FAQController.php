<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FAQController extends Controller
{
    /*
    * Function to show the faq page
    */
    public function show()
    {
        return view('faq', [
            'faqs'=>Faq::all()
        ]);
    }

    /*
     * Show single resource
     */
    public function index()
    {
        $faqs = Faq::latest();

        return view('faq.index', ['faqs' => $faqs]);
    }

    /*
     * Shows a view to create a new resource
     */
    public function create()
    {
        return view('faq.create');
    }

    /*
     * Persist the new resource
     */
    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('./faq');
    }

    /*
     * Show a view to edit an existing resource
     */
    public function edit()
    {

    }

    /*
     * Persist the edited resource
     */
    public function update()
    {

    }

    /*
     * Delete the resource
     */
    public function destroy()
    {

    }
}
