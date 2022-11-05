<?php

namespace App\Http\Controllers;

use App\Models\PollenUnitResult;
use Illuminate\Http\Request;
use App\Models\Party;



class PollenUnitResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $data['anypolling'] = PollenUnitResult::where('polling_unit_uniqueid', 8)->get();

        return view('answers.question_1.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('answers.question_3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data['part'] = Party::all();
        $data = new PollenUnitResult;
        $data->polling_unit_uniqueid = $request->polling_unit_uniqueid;
   
        $data->save();
       
        //   $notification = array(
        //     'message' => 'created Success',
        //     'alert-type' => 'success'
        // );

        return view('answers.question_3.index', $data)->with('success', 'Creates successfully');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PollenUnitResult  $pollenUnitResult
     * @return \Illuminate\Http\Response
     */
    public function show(PollenUnitResult $pollenUnitResult)
    {
        return view('answers.question_1.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PollenUnitResult  $pollenUnitResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PollenUnitResult $pollenUnitResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PollenUnitResult  $pollenUnitResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PollenUnitResult $pollenUnitResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PollenUnitResult  $pollenUnitResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PollenUnitResult $pollenUnitResult)
    {
        //
    }
}
