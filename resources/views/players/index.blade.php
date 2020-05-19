@extends('players/layouts/app')

@section('title')
TennisApp | AlleSpieler
@endsection

@section('content')

<div class="heading container-fluid bg-transparent shadow static-top justify-content-center p-3 d-flex">
    <h2>Alle Spieler</h2>
</div>

<!-- // TODO search core_team (≈ bookmarking) -->

<div class="container pb-5 mb-5">

    <!-- Player-Card_dynamic -->
    @foreach ($players->sortBy('ranking') as $player)
    <div class="card shadow my-4 text-center lineimage">
        <div class="card-body py-0">
            <p class="m-1">{{ $player->ranking }}. {{ $player->firstname }} {{ $player->name }}</p>
            <a href="{{ route('players.show', $player->id) }}" class="stretched-link"></a>
        </div>
    </div>

    <div class="interval">
        <a href="{{ route('players.create') }}" class="bigbutton btn btn-primary btn-block" type="button">neuer Spieler</a>
    </div>

    <!-- cards container closing tag -->
</div>

@endsection