@extends('players/layouts/app')

@section('title')
TennisApp | AlleSpieler
@endsection

@section('content')

<div class="container-fluid shadow static-top p-3 d-flex css_heading">
    <h1 class="pt-1 css_headline">Alle Spieler</h1>
</div>

<!-- // TODO search core_team (≈ bookmarking) -->

<div class="container align-items-center">

    <!-- Player-Card_dynamic -->
    @foreach ($players->sortBy('ranking') as $player)
    <div class="card shadow my-4 text-center css_cards css_linebackground">
        <div class="card-body py-0">
            <p class="m-1">{{ $player->ranking }}. {{ $player->firstname }} {{ $player->name }}</p>
            <a href="{{ route('players.show', $player->id) }}" class="stretched-link"></a>
        </div>
    </div>
    @endforeach

    <div class="css_interval">
        <a href="{{ route('players.create') }}" class="btn btn-primary btn-block css_bigbutton" type="button">neuer Spieler</a>
    </div>

    <!-- cards container closing tag -->
</div>

@endsection