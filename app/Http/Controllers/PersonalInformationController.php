<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalInformationRequest;
use App\Http\Requests\PersonalInformationUpdateRequest;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\isNull;

class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalInformation $personalInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInformation $personalInformation)
    {
        $pi = PersonalInformation::firstOrNew(
            [
                'user_id'=> auth()->user()->id
            ],
            [
                'nationality' => '',
                'hometown' => '',
                'civil_status' => '',
                'children' => 0,
                'birth_date' => '1970-01-01',
            ]
        );
        return view('personalinformation.edit', [
            'personal_information' => $pi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalInformationUpdateRequest $request, PersonalInformation $personalInformation)
    {
        $pi = PersonalInformation::updateOrCreate(
            [
                'user_id' => auth()->user()->id
            ],
            [
                'nationality' => $request->get('nationality'),
                'hometown' => $request->get('hometown'),
                'civil_status' => $request->get('civil_status'),
                'children' => $request->get('children'),
                'birth_date' => $request->get('birth_date')
            ]
        );
        return Redirect::route('personalinformation.edit')->with('status', 'personalinformation-updated');
    }
}
