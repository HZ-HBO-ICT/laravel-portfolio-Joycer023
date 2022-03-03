<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FAQController extends Controller
{
    /*
    * Function to show the faq page
    */
    public function show($id)
    {
        $faq = Faq::find($id);
        return view('faq.show', [
            'faq' => $faq]);
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
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faq.edit', compact('faq'));
    }

    /*
     * Persist the edited resource
     */
    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('./faq/' . $faq->id);
    }

    /*
     * Delete the resource
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }
}
