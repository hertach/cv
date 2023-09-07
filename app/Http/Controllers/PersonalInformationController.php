<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalInformationRequest;
use App\Http\Requests\UpdatePersonalInformationRequest;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonalInformationRequest $request)
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
        //$pi = DB::table('personal_information')
         //       ->where('user_id', 1)->first();

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
    public function update(UpdatePersonalInformationRequest $request, PersonalInformation $personalInformation)
    {

//        $pi = PersonalInformation::where('user_id', auth()->user()->id)->first();
//
//        $pi->nationality = $request->get('nationality');
//        $pi->hometown = $request->get('hometown');
//        $pi->civil_status = $request->get('civil_status');
//        $pi->children = $request->get('children');
//        $pi->birth_date = $request->get('birth_date');
//        $pi->save();

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInformation $personalInformation)
    {
        //
    }
}
