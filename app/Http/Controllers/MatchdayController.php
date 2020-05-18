<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matchday;

class MatchdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show ALL matchdays (routes '/' and '/alletermine'; view 'home')
        return view('home', [
            'matchdays' => Matchday::all()
        ]);
        // $matchdays = \App\Matchday::all();
        // return view('home', array('matchdays' => $matchdays));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO show a form for creating a NEW matchday (route '/termine/erstellen'; view 'matchdays.create'); followed by store
        return view('matchdays/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO validate the request and 
        // TODO store a NEW matchday in storage (no own route; after view 'matchdays.create')
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matchday $matchdays)
    {
        // show a SPECIFIC matchday (no route; no view); 'anzeigen' leads to 'planner'
        $players = \App\Player::all();

        return view('planner', [
            'matchdays' => $matchdays,
            'players' => $players
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matchday $matchdays)
    {
        // TODO show an EXISTING matchday (ID!) in a form for editing (route '/termine/bearbeiten'; view 'matchdays.edit'); followed by update
        return view('matchdays/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matchday $matchdays)
    {
        // TODO validate the request and 
        // TODO update an EXISTING matchday (ID!) in storage (no own route; after view 'matchdays.edit')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matchday $matchdays)
    {
        // TODO delete an EXISTING matchday (ID!) (no own route; on view 'matchdays.edit')
    }

    private function validateData()
    {
        return request()->validate([
            // 
        ]);
    }
}
