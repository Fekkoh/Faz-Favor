<?php

namespace App\Http\Controllers;

use App\Models\Favor_Request;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Favor_RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favores = Favor_Request::all(); // Select * from favor__requests
        return view('search', compact('favores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = Area::all();
        return view('favor_request.create', compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $favores = new Favor_Request();
        $favores->title = request('title');
        $favores->description = request('description');
        $favores->date = request('date');
        $favores->hour = request('hour');
        $favores->finished = 0;
        $favores->user_request_id = Auth::id();
        $favores->area_id = request('area');
        $favores->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favor_Request  $favor_request
     * @return \Illuminate\Http\Response
     */
    public function show(Favor_Request $favor_request)
    {

        return view('favor_request.show', compact('favor_request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favor_Request  $favor_request
     * @return \Illuminate\Http\Response
     */
    public function edit(Favor_Request $favor_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favor_Request  $favor_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favor_Request $favor_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favor_Request  $favor_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favor_Request $favor_request)
    {
        //
    }
}
