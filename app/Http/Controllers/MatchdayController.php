<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Matchday;
use Illuminate\Http\Request;

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
        // $matchdays = Matchday::all();
        // return view('home', array('matchdays' => $matchdays));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show a form for creating a NEW matchday (route '/termine/erstellen'; view 'matchdays.create'); followed by store
        return view('matchdays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the request and 
        // store a NEW matchday in storage (no own route; after view 'matchdays.create')
        Matchday::create($this->validateData());
        return redirect()->route('home');

        // $newMatchday = $this->validateData();
        // Matchday::create($newMatchday);
        // return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matchday $matchday)
    {
        // TODO show a SPECIFIC matchday (no route; no view); 'anzeigen' leads to 'planner'
        // TODO alt.: TODO create a PlannerController
        // $players = \App\Player::all();

        // return view('planner.planner', [
        //     'matchday' => $matchday,
        //     'players' => $players
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matchday $matchday)
    {
        // show an EXISTING matchday (ID!) in a form for editing (route '/termine/bearbeiten'; view 'matchdays.edit'); followed by update
        return view('matchdays.edit', ['matchday' => $matchday]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matchday $matchday)
    {
        // validate the request and 
        // update an EXISTING matchday (ID!) in storage (no own route; after view 'matchdays.edit')
        $matchday->update($this->validateData());
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matchday $matchday)
    {
        // delete an EXISTING matchday (ID!) (no own route; on view 'matchdays.edit')
        $matchday->delete();

        return redirect()->route('home')
            ->with('success', 'Spieltag erfolgreich gelöscht');
    }

    private function validateData()
    {
        return request()->validate([
            'gamedate' => 'date|nullable',
            'gametime' => 'nullable',
            'hometeam' => 'nullable',
            'awayteam' => 'nullable',
            'venue_street' => 'nullable',
            'venue_housenumber' => 'nullable',
            'venue_zip' => 'nullable',
            'venue_city' => 'nullable',
            'result_hometeam' => 'nullable',
            'result_awayteam' => 'nullable',
        ]);
    }
}
