@extends('planner/layouts/app')

@section('title')
TennisApp | Planer/Bearbeiten
@endsection

@section('content')

<div class="container-fluid static-top p-3 css_heading">
    <h1 class="pt-1 css_headline">Punktspiel Planer</h1>
</div>

<div class="container pb-5 mb-5">

    <form method="POST" action="{{ route('planner.update', $matchday->id) }}">
        @csrf
        @method('PATCH')

        <div class="card shadow my-3 css_plannercardsbackground">

            <table class="table table-sm table-borderless css_matchdaytable-small">
                <thead>
                    <tr>
                        <td class="col-4 css_matchdaytable-small-rowlabel pt-2">Datum</td>
                        <td class="col-8 pt-2">{{ \Carbon\Carbon::parse($matchday->gamedate)->format('j.n.Y')}}</td>
                    </tr>
                    <tr>
                        <td class="col-4 css_matchdaytable-small-rowlabel">Uhrzeit</td>
                        <td class="col-8">{{ \Carbon\Carbon::parse($matchday->gametime)->format('G:i')}}</td>
                    </tr>
                    <tr>
                        <td class="col-4 css_matchdaytable-small-rowlabel">Heim</td>
                        <td class="col-8">{{ $matchday->hometeam }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 css_matchdaytable-small-rowlabel">Gast</td>
                        <td class="col-8">{{ $matchday->awayteam }}</td>
                    </tr>
                    <tr>
                        <td class="col-4 css_matchdaytable-small-rowlabel">Spielort</td>
                        <td class="col-8">{{ $matchday->venue_street }} {{ $matchday->venue_housenumber }} <br> {{ $matchday->venue_zip }} {{ $matchday->venue_city }} </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-sm css_plannertable">
                <tbody>

                    <!-- // TODO search core_team (≈ bookmarking) -->

                    @foreach ($allPlayers->sortBy('ranking') as $player)

                    <tr class="container-fluid css_plannertable-row">
                        <td scope="row" class="css_plannertable-playername">{{ $player->firstname }} {{ $player->name }}</td>
                        <td class="col-2 css_plannertable-tablecolumn">
                            <input @isset($player->matchdays()->find($matchday->id)->pivot) @if($player->matchdays()->find($matchday->id)->pivot->player_availability == 'yes') checked @endif @endisset
                            type="radio" name="{{ $player->id }}" id="{{ $player->id }}_yes" class="css_plannerinput" value="yes">
                            <label for="{{ $player->id }}_yes" class="css_plannerlabel">Ja</label>
                        </td>
                        <td class="col-2 css_plannertable-tablecolumn">
                            <input @isset($player->matchdays()->find($matchday->id)->pivot) @if($player->matchdays()->find($matchday->id)->pivot->player_availability == 'maybe') checked @endif @endisset
                            type="radio" name="{{ $player->id }}" id="{{ $player->id }}_maybe" class="css_plannerinput" value="maybe">
                            <label for="{{ $player->id }}_maybe" class="css_plannerlabel">?</label>
                        </td>
                        <td class="col-2 css_plannertable-tablecolumn">
                            <input @isset($player->matchdays()->find($matchday->id)->pivot) @if($player->matchdays()->find($matchday->id)->pivot->player_availability == 'no') checked @endif @endisset
                            type="radio" name="{{ $player->id }}" id="{{ $player->id }}_no" class="css_plannerinput" value="no">
                            <label for="{{ $player->id }}_no" class="css_plannerlabel">Nein</label>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>

        <div class="pt-2">
            <button class="btn btn-primary btn-block css_bigbutton" type="submit">Speichern</button>
        </div>

    </form>

    <!-- container closing tag -->
</div>

@endsection