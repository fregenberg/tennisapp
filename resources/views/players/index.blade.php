@extends('players/layouts/app')

@section('title')
TennisApp | AlleSpieler
@endsection

@section('content')

<div class="container-fluid static-top p-3 css_heading">
    <h1 class="pt-1 css_headline">Alle Spieler</h1>
</div>

<!-- // TODO search core_team (≈ bookmarking) -->

<div class="container align-items-center">

    @foreach ($players->sortBy('ranking') as $player)
    <div class="card shadow text-center my-4 css_cards css_linebackground">
        <div class="card-body py-0">
            <p class="m-1">{{ $player->ranking }}. {{ $player->firstname }} {{ $player->name }}</p>
            <a href="{{ route('players.show', $player->id) }}" class="stretched-link"></a>
        </div>
    </div>
    @endforeach

    @if(Gate::check('isadmin') || Gate::check('iscaptain'))
    <div class="css_interval">
        <a href="{{ route('players.create') }}" class="btn btn-primary btn-block css_bigbutton" type="button">neuer Spieler</a>
    </div>
    @endif

</div>

@endsection