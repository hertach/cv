<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = auth()->user()->languages()->get();
        return view('language.index', [
            'languages' => $languages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $language = new Language();
        return view('language.create',compact('language'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'language' => 'required',
            'level' => 'required',
        ]);
        $language = $request->all();
        $language['user_id'] = auth()->user()->getAuthIdentifier();
        Language::create($language);

        return redirect()->route('language.index')
                         ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language): View
    {
        return view('language.edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language): RedirectResponse
    {
        $request->validate([
            'language' => 'required',
            'level' => 'required',
        ]);

        $language->update($request->all());
        return redirect()->route('language.index')
                         ->with('success','Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        //
    }
}
