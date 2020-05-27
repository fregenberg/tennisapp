@extends('planner/layouts/app')

@section('title')
TennisApp | Planer/Bearbeiten
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Punktspiel Planer</h1>
</div>

<div class="container pb-5 mb-5">

    <form method="POST" action="{{ route('planner.update', $matchday->id) }}">
        @csrf
        @method('PATCH')

        <div class="card shadow my-4">

            <table class="table table-sm table-borderless matchdaytable">
                <thead>
                    <tr>
                        <td class="col-4 rowname">Datum</td>
                        <td class="col-8">{{ \Carbon\Carbon::parse($matchday->gamedate)->format('j.n.Y')}}</td>
                    </tr>
                    <tr>
                        <td class="col-4 rowname">Uhrzeit</td>
                        <td class="col-8">{{ \Carbon\Carbon::parse($matchday->gametime)->format('G:i')}}</td>
                    </tr>
                    <tr>
                        <td class="col-4 rowname">Heim</td>
                        <td class="col-8">{{ $matchday->hometeam }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 rowname">Gast</td>
                        <td class="col-8">{{ $matchday->awayteam }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 rowname">Spielort</td>
                        <td class="col-8">{{ $matchday->venue_street }} {{ $matchday->venue_housenumber }} <br> {{ $matchday->venue_zip }} {{ $matchday->venue_city }} </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-sm playerstable">
                <tbody>

                    <!-- // TODO search core_team (≈ bookmarking) -->
                    <!-- TODO Authorization: only Captains, Admins -->

                    @foreach ($allPlayers->sortBy('ranking') as $player)

                    <tr class="container-fluid table-row">
                        <td scope="row" class="rowname">{{ $player->firstname }} {{ $player->name }}</td>
                        <td class="col-2">
                            <input @isset($player->matchdays()->find($matchday->id)->pivot) @if($player->matchdays()->find($matchday->id)->pivot->player_availability == 'yes') checked @endif @endisset
                            type="radio" name="{{ $player->id }}" id="{{ $player->id }}_yes" class="input" value="yes">
                            <label for="{{ $player->id }}_yes" class="label">Ja</label>
                        </td>
                        <td class="col-2">
                            <input @isset($player->matchdays()->find($matchday->id)->pivot) @if($player->matchdays()->find($matchday->id)->pivot->player_availability == 'maybe') checked @endif @endisset
                            type="radio" name="{{ $player->id }}" id="{{ $player->id }}_maybe" class="input" value="maybe">
                            <label for="{{ $player->id }}_maybe" class="label">?</label>
                        </td>
                        <td class="col-2">
                            <input @isset($player->matchdays()->find($matchday->id)->pivot) @if($player->matchdays()->find($matchday->id)->pivot->player_availability == 'no') checked @endif @endisset
                            type="radio" name="{{ $player->id }}" id="{{ $player->id }}_no" class="input" value="no">
                            <label for="{{ $player->id }}_no" class="label">Nein</label>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>

        <div class="pt-2">
            <button class="bigbutton btn btn-primary btn-block" type="submit">Speichern</button>
        </div>

    </form>

    <!-- container closing tag -->
</div>

@endsection