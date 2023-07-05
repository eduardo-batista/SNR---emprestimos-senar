<?php

namespace App\Http\Controllers;

use App\Models\EquipmentLoan;
use App\Http\Requests\StoreEquipmentLoanRequest;
use App\Http\Requests\UpdateEquipmentLoanRequest;

class EquipmentLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreEquipmentLoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipmentLoanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EquipmentLoan  $equipmentLoan
     * @return \Illuminate\Http\Response
     */
    public function show(EquipmentLoan $equipmentLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EquipmentLoan  $equipmentLoan
     * @return \Illuminate\Http\Response
     */
    public function edit(EquipmentLoan $equipmentLoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEquipmentLoanRequest  $request
     * @param  \App\Models\EquipmentLoan  $equipmentLoan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquipmentLoanRequest $request, EquipmentLoan $equipmentLoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EquipmentLoan  $equipmentLoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(EquipmentLoan $equipmentLoan)
    {
        //
    }
}
