@extends('matchdays/layouts/app')

@section('title')
TennisApp | Termine
@endsection

@section('content')

<div class="container-fluid static-top p-3 css_heading">
    <h1 class="pt-1 css_headline">Spieltermine</h1>
</div>

<div class="container pb-5 mb-5">

    @foreach ($matchdays->sortBy('gamedate') as $matchday)

    <div class="card shadow my-4 css_cards css_matchdaycardsbackground">

        <table class="table table-sm table-borderless css_matchdaytable">
            <tbody>
                <tr>
                    <td class="col-4 css_matchdaytable-rowlabel pt-3">Datum</td>
                    <td class="col-8 pt-3">{{ \Carbon\Carbon::parse($matchday->gamedate)->format('j.n.Y')}}</td>
                </tr>
                <tr>
                    <td class="col-4 css_matchdaytable-rowlabel">Uhrzeit</td>
                    <td class="col-8">{{ \Carbon\Carbon::parse($matchday->gametime)->format('G:i')}}</td>
                </tr>
                <tr>
                    <td class="col-4 css_matchdaytable-rowlabel">Heim</td>
                    <td class="col-8">{{ $matchday->hometeam }}</td>
                </tr>
                <tr>
                    <td class="col-4 css_matchdaytable-rowlabel">Gast</td>
                    <td class="col-8">{{ $matchday->awayteam }}</td>
                </tr>
                <tr>
                    <td class="col-4 css_matchdaytable-rowlabel">Spielort</td>
                    <td class="col-8">{{ $matchday->venue_street }} {{ $matchday->venue_housenumber }} <br> {{ $matchday->venue_zip }} {{ $matchday->venue_city }}</td>
                </tr>
                <tr>
                    @if($matchday->result_hometeam)
                    <td class="col-4 css_matchdaytable-rowlabel">Ergebnis</td>
                    <td class="col-8">{{ $matchday->result_hometeam }} : {{ $matchday->result_awayteam }}</td>
                    @endif
                </tr>
            </tbody>
        </table>

        @if(Gate::check('isadmin') || Gate::check('iscaptain'))
        <div class="card-footer row css_footer-buttons-space">
            <a href="{{ route('planner.edit', ['matchday' => $matchday]) }}" class="col-5 btn btn-sm css_footer-buttons" type="button">Anzeigen</a>
            <a href="{{ route('matchdays.edit', ['matchday' => $matchday]) }}" class="col-5 btn btn-sm css_footer-buttons" type="button">Bearbeiten</a>
        </div>
        @else
        <div class="card-footer row css_footer-buttons-space">
            <a href="{{ route('planner.edit', ['matchday' => $matchday]) }}" class="col-5 btn btn-sm css_footer-buttons" type="button">Anzeigen</a>
        </div>
        @endif

    </div>
    @endforeach

    @if(Gate::check('isadmin') || Gate::check('iscaptain'))
    <div>
        <a href="{{ route('matchdays.create') }}" class="btn btn-primary btn-block css_bigbutton" type="button">neuen Termin anlegen</a>
    </div>
    @endif

    <!-- cards container closing tag -->
</div>
@endsection