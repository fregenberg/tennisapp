<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Matchday;
use App\Player;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO later: show ALL (NEXT) planners with a collapsible form that accumulates all players who have already voted (route '/alleplaner'; view 'planer.index')
        return view('planner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matchday $matchday)
    {
        // show THE NEXT planner (ID!) (route '/planer'; view 'planner.show')
        $matchday = Matchday::whereDate('gamedate', '>=', now())->orderBy('gamedate')->first();
        return view('planner.show')->withMatchday($matchday);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matchday $matchday)
    {
        // show the SELECTED planner (ID!) in a form for editing (route 'planer/bearbeiten/{planner}'; view 'planer.edit'); followed by update
        return view('planner.edit', [
            'matchday' => $matchday,
            'allPlayers' => Player::all(),
            'selectedPlayers' => $matchday->players
        ]);
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
        // update the ACTUAL planner (ID!) in storage

        $data = $request->except(['_token', '_method']);

        foreach ($data as $playerId => $playerAvailability) {
            $data[$playerId] = ['player_availability' => $playerAvailability];
        }

        $matchday->players()->syncWithoutDetaching($data);

        return redirect()->route('home');
    }
}
