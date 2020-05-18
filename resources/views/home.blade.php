@extends('matchdays/layouts/app')

@section('title')
TennisApp | Termine
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Spieltermine</h1>
</div>

<div class="container pb-5 mb-5">

    <!-- Gamedate-Card_dynamic -->
    @foreach ($matchdays as $matchday)
    <div class="card shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <p class="col-4">Datum</p>
                    <p class="col-6">{{ $matchday->gamedate }}</p>
                </div>

                <div class="row">
                    <p class="col-4">Uhrzeit</p>
                    <p class="col-6">{{ $matchday->gametime }}</p>
                </div>

                <div class="row">
                    <p class="col-4">Heim</p>
                    <p class="col-6">{{ $matchday->hometeam }}</p>
                </div>

                <div class="row">
                    <p class="col-4">Gast</p>
                    <p class="col-6">{{ $matchday->awayteam }}</p>
                </div>

                <div class="row">
                    <p class="col-4 mb-0">Spielort</p>
                    <p class="col-6 mb-0">{{ $matchday->venue_street }} {{ $matchday->venue_housenumber }}</p>
                </div>

                <div class="row">
                    <p class="col-4"></p>
                    <p class="col-6">{{ $matchday->venue_zip }} {{ $matchday->venue_city }}</p>
                </div>

                @if($matchday->result_hometeam)
                <div class="row">
                    <p class="col-4">Ergebnis</p>
                    <p class="col-6">{{ $matchday->result_hometeam }} : {{ $matchday->result_awayteam }}</p>
                </div>
                @endif

            </form>
        </div>
        <div class="card-footer row">
            <a href="{{ route('planner.planner') }}" class="col-5 btn btn-sm footer-buttons" type="button">Anzeigen</a>
            <a href="{{ route('matchdays.edit') }}" class="col-5 btn btn-sm footer-buttons" type="button">Bearbeiten</a>
            <!-- <a href="{{ route('matchdays.edit', ['matchday' => $matchday]) }}" class="col-5 btn btn-sm footer-buttons" type="button">Bearbeiten</a> -->
        </div>
    </div>
    @endforeach

    <div>
        <a href="{{ route('matchdays.create') }}" class="bigbutton btn btn-primary btn-block" type="button">neuen Termin anlegen</a>
    </div>

    <!-- cards container closing tag -->
</div>
@endsection