@extends('planner/layouts/app')

@section('title')
TennisApp | Nächster Spieltag
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Nächster Spieltag</h1>
</div>

<div class="container pb-5 mb-5">

    <form>

        <div class="card shadow my-4">
            <!-- Card header -->
            <div class="card-header">

                <div class="form-group row">
                    <small class="col-4">Datum</small>
                    <small class="col-6">{{ \Carbon\Carbon::parse($matchday->gamedate)->format('j.n.Y')}}</small>
                </div>
                <div class="form-group row">
                    <small class="col-4">Uhrzeit</small>
                    <small class="col-6">{{ \Carbon\Carbon::parse($matchday->gametime)->format('G:i')}}</small>
                </div>
                <div class="form-group row pt-1">
                    <small class="col-4">Heim</small>
                    <small class="col-6">{{ $matchday->hometeam }}</small>
                </div>
                <div class="form-group row pb-1">
                    <small class="col-4">Gast</small>
                    <small class="col-6">{{ $matchday->awayteam }}</small>
                </div>
                <div class="form-group row">
                    <small class="col-4">Spielort</small>
                    <small class="col-6">{{ $matchday->venue_street }} {{ $matchday->venue_housenumber }}</small>
                </div>
                <div class="form-group row">
                    <small class="col-4"></small>
                    <small class="col-6">{{ $matchday->venue_zip }} {{ $matchday->venue_city }}</small>
                </div>
            </div>

            <!-- Card body -->
            <div class="card-body">

                <!-- // TODO search core_team (≈ bookmarking) -->

                @foreach ($matchday->players->sortBy('ranking') as $player)

                <div class="form-group row">
                    <p class="col-4">{{ $player->firstname }} {{ $player->name }}</p>
                    <ul class="col-7 entry-list">
                        <li class="participation">
                            <input type="radio" name="stefan" id="stefan_yes" class="input" value="yes" disabled>
                            <label for="stefan_yes" class="willingness">Ja</label>
                        </li>
                        <li class="participation">
                            <input type="radio" name="stefan" id="stefan_maybe" class="input" value="maybe" disabled>
                            <label for="stefan_maybe" class="willingness">Vielleicht</label>
                        </li>
                        <li class="participation">
                            <input type="radio" name="stefan" id="stefan_no" class="input" value="no" disabled>
                            <label for="stefan_no" class="willingness">Nein</label>
                        </li>
                    </ul>
                </div>

                @endforeach
            </div>
        </div>

    </form>

    <!-- container closing tag -->
</div>

@endsection