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
                <!-- TODO Authorization: only Captains, Admins -->

                @foreach ($allPlayers->sortBy('ranking') as $player)
                <!-- $matchday->players -->

                <div class="form-group row">
                    <label for="nickname" class="col-4 col-form-label col-form-label-sm">Spitzname</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('nickname') is-invalid @enderror" id="nickname" name="nickname" value="{{ old('nickame') ?? $player->nickname }}">
                        @error('nickname')
                        <p class="invalid-feedback">{{ $errors->first('nickname') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-4">{{ $player->firstname }} {{ $player->name }}</p>
                    <ul class="col-7 entry-list">
                        <li class="participation">
                            <input type="radio" name="stefan" id="stefan_yes" class="input" value="yes">
                            <label for="stefan_yes" class="willingness">Ja</label>
                        </li>
                        <li class="participation">
                            <input type="radio" name="stefan" id="stefan_maybe" class="input" value="maybe">
                            <label for="stefan_maybe" class="willingness">Vielleicht</label>
                        </li>
                        <li class="participation">
                            <input type="radio" name="stefan" id="stefan_no" class="input" value="no">
                            <label for="stefan_no" class="willingness">Nein</label>
                        </li>
                    </ul>
                </div>

                @endforeach
            </div>
        </div>

        <div class="pt-2">
            <button class="bigbutton btn btn-primary btn-block" type="submit">Speichern</button>
        </div>

    </form>

    <!-- container closing tag -->
</div>

@endsection