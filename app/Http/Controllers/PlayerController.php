<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Player;
use App\User;
use Illuminate\Support\Facades\Hash;
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
        // show a form for creating a NEW player (route '/spieler/erstellen'; view 'players.create'); followed by store
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
        // validate the request and 
        // store a NEW player in storage (no own route; after view 'players.create')
        $data = $this->validateData();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make('derwarnochdrauf')
        ]);
        $player = new Player($data);
        $user->player()->save($player);
        return redirect()->route('players.index');

        // $newPlayer = $this->validateData();
        // Player::create($newPlayer);
        // return redirect()->route('players.show');
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
        return view('players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        // show an EXISTING player (ID!) in a form for editing (route '/spieler/bearbeiten'; view 'players.edit'); followed by update
        return view('players.edit', ['player' => $player]);
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
        // validate the request and 
        // update an EXISTING player (ID!) in storage (no own route; after view 'players.edit')
        $player->update($this->validateData());
        return redirect()->route('players.show', $player->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        // delete an EXISTING player (ID!) (no own route; on view 'players.edit')
        $player->delete();

        return redirect()->route('players.index')
            ->with('success', 'Spieler erfolgreich gelöscht');
    }

    public function validateData()
    {
        return request()->validate([
            'ranking' => 'nullable',
            'performance_class' => 'nullable',
            'dtb_id' => 'digits:8|nullable',
            'firstname' => 'required|string',
            'name' => 'required|string',
            'nickname' => 'nullable',
            'tel_private' => 'nullable',
            'tel_mobile' => 'nullable',
            'birthday' => 'date|nullable',
            'core_team' => 'boolean|nullable',
            'role' => 'nullable',

            'email' => 'email|max:255|required|string',
        ]);
    }
}
