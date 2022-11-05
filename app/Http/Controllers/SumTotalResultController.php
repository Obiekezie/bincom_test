<?php

namespace App\Http\Controllers;

use App\Models\SumTotalResult;
use App\Models\Lga;
use App\Models\PollenUnitResult;
use Illuminate\Http\Request;
use DB;

class SumTotalResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lga = Lga::all();
        return view('answers.question_2.index',['lgas' => $lga, 'pageTitle' => 'Create Lga Info']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SumTotalResult  $sumTotalResult
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $lgaId= $request->lgaId;
        $lga2 = Lga::where('uniqueid',$lgaId)->get();
        // $lga_name = $lga2[{'uniqueid'}];

        $lgaId= $request->lgaId;

        $total_sum = PollenUnitResult::join('polling_unit', 'polling_unit.uniqueid', '=', 'announced_pu_results.polling_unit_uniqueid') ->where('polling_unit_uniqueid',$lgaId)->sum('party_score');
       
       
        $lga = PollenUnitResult::join('polling_unit', 'polling_unit.uniqueid', '=', 'announced_pu_results.polling_unit_uniqueid') ->where('polling_unit_uniqueid',$lgaId)->get();
        return view('answers.question_2.show',['lgas' => $lga, 'pageTitle' => $total_sum, 'lga_name' => $lga2]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SumTotalResult  $sumTotalResult
     * @return \Illuminate\Http\Response
     */
    public function edit(SumTotalResult $sumTotalResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SumTotalResult  $sumTotalResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SumTotalResult $sumTotalResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SumTotalResult  $sumTotalResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(SumTotalResult $sumTotalResult)
    {
        //
    }
}
