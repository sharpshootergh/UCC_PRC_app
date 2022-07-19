<?php

namespace App\Http\Controllers;

use App\Models\elective;
use Illuminate\Http\Request;

class ElectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allelective = \App\Models\elective::all();
        $elective = \App\Models\elective::where('elect_type',1) 
        ->get();
    
    return view('form',[
        'allelective' => $allelective,
        'elective' => $elective 
    ]);
    
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
     * @param  \App\Models\elective  $elective
     * @return \Illuminate\Http\Response
     */
    public function show(elective $elective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\elective  $elective
     * @return \Illuminate\Http\Response
     */
    public function edit(elective $elective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\elective  $elective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, elective $elective)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\elective  $elective
     * @return \Illuminate\Http\Response
     */
    public function destroy(elective $elective)
    {
        //
    }
}
