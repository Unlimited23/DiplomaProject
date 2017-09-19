<?php

namespace App\Http\Controllers;

use App\BMICalculator;
use Illuminate\Http\Request;

class BMICalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bmi_calculator.calculator');
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
     * @param  \App\BMICalculator  $bMICalculator
     * @return \Illuminate\Http\Response
     */
    public function show(BMICalculator $bMICalculator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BMICalculator  $bMICalculator
     * @return \Illuminate\Http\Response
     */
    public function edit(BMICalculator $bMICalculator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BMICalculator  $bMICalculator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BMICalculator $bMICalculator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BMICalculator  $bMICalculator
     * @return \Illuminate\Http\Response
     */
    public function destroy(BMICalculator $bMICalculator)
    {
        //
    }
}
