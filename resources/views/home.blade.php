@extends('matchdays/layouts/app')

@section('title')
TennisApp | Termine
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Spieltermine</h1>
</div>

<div class="container pb-5 mb-5">

    @foreach ($matchdays->sortBy('gamedate') as $matchday)

    <div class="card shadow my-4">

        <table class="table table-sm table-borderless matchdaytable">
            <tbody>
                <tr>
                    <td class="col-4 pt-3">Datum</td>
                    <td class="col-8 pt-3">{{ \Carbon\Carbon::parse($matchday->gamedate)->format('j.n.Y')}}</td>
                </tr>
                <tr>
                    <td class="col-4">Uhrzeit</td>
                    <td class="col-8">{{ \Carbon\Carbon::parse($matchday->gametime)->format('G:i')}}</td>
                </tr>
                <tr>
                    <td class="col-4">Heim</td>
                    <td class="col-8">{{ $matchday->hometeam }}</td>
                </tr>
                <tr>
                    <td class="col-4">Gast</td>
                    <td class="col-8">{{ $matchday->awayteam }}</td>
                </tr>
                <tr>
                    <td class="col-4">Spielort</td>
                    <td class="col-8">{{ $matchday->venue_street }} {{ $matchday->venue_housenumber }} <br> {{ $matchday->venue_zip }} {{ $matchday->venue_city }}</td>
                </tr>
                <tr>
                    @if($matchday->result_hometeam)
                    <td class="col-4">Ergebnis</td>
                    <td class="col-8">{{ $matchday->result_hometeam }} : {{ $matchday->result_awayteam }}</td>
                    @endif
                </tr>
            </tbody>
        </table>

        <div class="card-footer row">
            <a href="{{ route('planner.edit', ['matchday' => $matchday]) }}" class="col-5 btn btn-sm footer-buttons" type="button">Anzeigen</a>
            <a href="{{ route('matchdays.edit', ['matchday' => $matchday]) }}" class="col-5 btn btn-sm footer-buttons" type="button">Bearbeiten</a>
        </div>
    </div>
    @endforeach

    <div>
        <a href="{{ route('matchdays.create') }}" class="bigbutton btn btn-primary btn-block" type="button">neuen Termin anlegen</a>
    </div>

    <!-- cards container closing tag -->
</div>
@endsection