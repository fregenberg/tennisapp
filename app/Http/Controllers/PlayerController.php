<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO show ALL players (route '/allespieler'; view 'players.index')
        return view('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // TODO show a SPECIFIC player (ID!) (route '/spieler'; view 'players.show')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // TODO show an EXISTING player (ID!) in a form for editing (route '/spieler/bearbeiten'; view 'players.edit'); followed by update
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO validate the request and 
        // TODO update an EXISTING player (ID!) in storage (no own route; after view 'players.edit')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO delete an EXISTING player (ID!) (no own route; on view 'players.edit')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO show a form for creating a NEW player (route '/spieler/erstellen'; view 'players.create'); followed by store
        return view('players.create');
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
        // TODO store a NEW player in storage (no own route; after view 'players.create')
    }
}
