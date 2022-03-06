<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /*
    * Function to show the articles page.
    */
    public function show(Faq $faq)
    {
        return view('faq.show', ['faq' => $faq]);
    }
    /*
    * Function to index the articles
    */
    public function index()
    {
        $faq = Faq::latest();

        return view('faq.index', ['faq' => $faq]);
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
    public function store(Request $request)
    {
        Faq::create($this->validateFaq($request));

        return redirect('/faq');
    }

    /*
     * Show a view to edit an existing resource
     */
    public function edit(Faq $faq)
    {
        return view('faq.edit', compact('faq'));
    }

    /*
     * Persist the edited resource
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->update($this->validateFaq($request));

        return redirect('/faq/' . $faq->id);
    }

    /*
     * Delete the resource
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }

    /**
     * @return array
     */
    public function validateFaq(Request $request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    }
}

