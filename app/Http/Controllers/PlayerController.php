<?php

namespace App\Http\Controllers;

use App\Player;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show ALL players (route '/allespieler'; view 'players.index')
        return view('players.index', [
            'players' => Player::all()
        ]);
        // $players = Player::all();
        // return view('players/index', array('players' => $players));
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
        $user = Auth::user();
        // $data = $this->validateData();
        $data['user_id'] = $user->id;
        $player = Player::create($data);
        $user->player()->save($player);
        // $player->user()->associate($user)->save();

        return view('players.show', [
            'player' => $player
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        // show a SPECIFIC player (ID!) (route '/spieler'; view 'players.show')
        $user = Auth::user();

        return view('players.show', array('player' => $player));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        // TODO show an EXISTING player (ID!) in a form for editing (route '/spieler/bearbeiten'; view 'players.edit'); followed by update
        return view('players.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
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
    public function destroy(Player $player)
    {
        // TODO delete an EXISTING player (ID!) (no own route; on view 'players.edit')
    }

    private function validateData()
    {
        return request()->validate([
            // TODO implement here
        ]);
    }
}
