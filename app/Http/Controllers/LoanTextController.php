<?php

namespace App\Http\Controllers;

use App\Models\LoanText;
use App\Http\Requests\StoreLoanTextRequest;
use App\Http\Requests\UpdateLoanTextRequest;

class LoanTextController extends Controller
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
     * @param  \App\Http\Requests\StoreLoanTextRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanTextRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoanText  $loanText
     * @return \Illuminate\Http\Response
     */
    public function show(LoanText $loanText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoanText  $loanText
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanText $loanText)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoanTextRequest  $request
     * @param  \App\Models\LoanText  $loanText
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoanTextRequest $request, LoanText $loanText)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoanText  $loanText
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanText $loanText)
    {
        //
    }
}
