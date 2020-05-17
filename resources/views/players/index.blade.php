@extends('players/layouts/app')

@section('title')
TennisApp | AlleSpieler
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Alle Spieler</h1>
</div>

<!-- // TODO search core_team (≈ bookmarking) -->

<div class="container align-items-center">

    <!-- Player-Card_dynamic -->
    @foreach ($players->sortBy('ranking') as $player)
    <div class="card shadow my-4 text-center lineimage">
        <div class="card-body py-0">
            <p class="m-1">{{ $player->ranking }}. {{ $player->firstname }} {{ $player->name }}</p>
            <a href="{{ url('/spieler/' . $player->id) }}" class="stretched-link"></a>
        </div>
    </div>
    @endforeach

    <div class="interval">
        <a href="{{ url('/spieler/erstellen') }}" class="bigbutton btn btn-primary btn-block" type="button">neuer Spieler</a>
    </div>

    <!-- cards container closing tag -->
</div>

@endsection