<?php

namespace App\Http\Controllers;

use App\Models\Favor_Pending;
use Illuminate\Http\Request;

class Favor_PendingController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $favores = new Favor_Pending();
        $favores->favor_request_id = request('favor_request');
        $favores->user_offered_id = request('user_offered');
        $favores->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favor_Pending  $favor_pending
     * @return \Illuminate\Http\Response
     */
    public function show(Favor_Pending $favor_pending)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favor_Pending  $favor_pending
     * @return \Illuminate\Http\Response
     */
    public function edit(Favor_Pending $favor_pending)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favor_Pending  $favor_pending
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favor_Pending $favor_pending)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favor_Pending  $favor_pending
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favor_Pending $favor_pending)
    {
        //
    }
}
