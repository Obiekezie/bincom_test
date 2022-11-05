<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use App\Models\PollenUnitResult;
use App\Models\SumTotalResult;
use App\Models\Ward;
use App\Models\Lga;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $party = Party::all();
        $ward = Ward::all();
        $lga = Lga::all();
        return view('answers.question_3.index',['parties' => $party, 'pageTitle' => 'New party score','wards' => $ward ,'lgas' => $lga ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $data['part'] = Party::all();
     return view('answers.question_3.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new SumTotalResult();
        // $data->score = $request->score;
        // $data->party_abbreviation = $request->party_abbreviation;
        $data->ward_id = $request->ward_id;
        $data->lga_id = $request->lga_id;
        $data->uniquewardid = $request->uniquewardid;
        $data->polling_unit_number = $request->polling_unit_number;
        $data->polling_unit_name = $request->polling_unit_name;
        $data->polling_unit_id = $request->polling_unit_id;
        $data->polling_unit_description = $request->polling_unit_description;
        $data->entered_by_user = $request->entered_by_user;
        $data->save();



        // $get_id = SumTotalResult::where('party_score',$request->party_score );


        // $data2 = new SumTotalResult();
     
        // $data2->polling_unit_uniqueid = $request->polling_unit_uniqueid;
      
        // $data2->save();


    

        return back()->with('success', 'Creates successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party)
    {
        //
    }
}
