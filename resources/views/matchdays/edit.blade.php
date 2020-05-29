@extends('matchdays/layouts/app')

@section('title')
TennisApp | Termine/Bearbeiten
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Spieltermine</h1>
</div>

<!-- // @if ($errors->any())
<div class="alert alert-danger">
    <ul>
//        @foreach ($errors->all() as $error)
//        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->

<div class="container pb-5 mb-5">

    <form method="POST" action="{{ route('matchdays.update', $matchday->id) }}">
        @csrf
        @method('PATCH')

        <div class="card shadow my-4">

            <div class="card-body">

                <div class="form-group row">
                    <label for="gamedate" class="col-3 pl-3 pr-1 col-form-label col-form-label-sm">Datum</label>
                    <div>
                        <input type="date" class="form-control form-control-sm @error('gamedate') is-invalid @enderror" id="gamedate" name="gamedate" value="{{ old('gamedate') ?? $matchday->gamedate }}">
                        @error('gamedate')
                        <p class="invalid-feedback">{{ $errors->first('gamedate') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gametime" class="col-3 pl-3 pr-1 col-form-label col-form-label-sm">Uhrzeit</label>
                    <div>
                        <input type="time" class="form-control form-control-sm @error('gametime') is-invalid @enderror" id="gametime" name="gametime" value="{{ old('gametime') ?? \Carbon\Carbon::parse($matchday->gametime)->format('G:i') }}">
                        @error('gametime')
                        <p class="invalid-feedback">{{ $errors->first('gametime') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hometeam" class="col-3 pl-3 pr-1 col-form-label col-form-label-sm">Heim</label>
                    <input type="text" class="col-8 form-control form-control-sm @error('hometeam') is-invalid @enderror" id="hometeam" name="hometeam" value="{{ old('hometeam') ?? $matchday->hometeam }}">
                    @error('hometeam')
                    <p class="invalid-feedback">{{ $errors->first('hometeam') }}</p>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="awayteam" class="col-3 pl-3 pr-1 col-form-label col-form-label-sm">Gast</label>
                    <input type="text" class="col-8 form-control form-control-sm @error('awayteam') is-invalid @enderror" id="awayteam" name="awayteam" value="{{ old('awayteam') ?? $matchday->awayteam }}">
                    @error('awayteam')
                    <p class="invalid-feedback">{{ $errors->first('awayteam') }}</p>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="venue" class="col-3 pl-3 pr-1 col-form-label col-form-label-sm">Spielort</label>
                    <input type="text" class="col-6 form-control form-control-sm @error('venue_street') is-invalid @enderror" id="venue" name="venue_street" value="{{ old('venue_street') ?? $matchday->venue_street }}">
                    <input type="text" class="col-2 form-control form-control-sm @error('venue_housenumber') is-invalid @enderror" id="venue" name="venue_housenumber" value="{{ old('venue_housenumber') ?? $matchday->venue_housenumber }}">

                    <label for="venue" class="col-3 pl-3 pr-1 col-form-label col-form-label-sm"></label>
                    <input type="text" class="col-3 form-control form-control-sm @error('venue_zip') is-invalid @enderror" id="venue" name="venue_zip" pattern="[0-9]{5}" value="{{ old('venue_zip') ?? $matchday->venue_zip }}">
                    <input type="text" class="col-5 form-control form-control-sm @error('venue_city') is-invalid @enderror" id="venue" name="venue_city" value="{{ old('venue_city') ?? $matchday->venue_city }}">
                </div>

                <div class="form-group row">
                    <label for="result" class="col-3 pl-3 pr-1 col-form-label col-form-label-sm">Ergebnis</label>
                    <select class="col-2 form-control form-control-sm" id="result" name="result_hometeam">
                        <option @if (($matchday->result_hometeam) == 0) selected @endif>0</option>
                        <option @if (($matchday->result_hometeam) == 1) selected @endif>1</option>
                        <option @if (($matchday->result_hometeam) == 2) selected @endif>2</option>
                        <option @if (($matchday->result_hometeam) == 3) selected @endif>3</option>
                        <option @if (($matchday->result_hometeam) == 4) selected @endif>4</option>
                        <option @if (($matchday->result_hometeam) == 5) selected @endif>5</option>
                        <option @if (($matchday->result_hometeam) == 6) selected @endif>6</option>
                        <option @if (($matchday->result_hometeam) == 7) selected @endif>7</option>
                        <option @if (($matchday->result_hometeam) == 8) selected @endif>8</option>
                        <option @if (($matchday->result_hometeam) == 9) selected @endif>9</option>
                    </select>
                    <select class="col-2 form-control form-control-sm" id="result" name="result_awayteam">
                        <option @if (($matchday->result_awayteam) == 0) selected @endif>0</option>
                        <option @if (($matchday->result_awayteam) == 1) selected @endif>1</option>
                        <option @if (($matchday->result_awayteam) == 2) selected @endif>2</option>
                        <option @if (($matchday->result_awayteam) == 3) selected @endif>3</option>
                        <option @if (($matchday->result_awayteam) == 4) selected @endif>4</option>
                        <option @if (($matchday->result_awayteam) == 5) selected @endif>5</option>
                        <option @if (($matchday->result_awayteam) == 6) selected @endif>6</option>
                        <option @if (($matchday->result_awayteam) == 7) selected @endif>7</option>
                        <option @if (($matchday->result_awayteam) == 8) selected @endif>8</option>
                        <option @if (($matchday->result_awayteam) == 9) selected @endif>9</option>
                    </select>
                </div>
            </div>

            <div class="card-footer row justify-content-around">
                <button class="col-5 btn btn-sm footer-buttons" type="submit">Speichern</button>
                <a class="col-5 btn btn-sm footer-buttons text-danger" onclick="deleteForm.submit(); return false;">Löschen</a>
            </div>
        </div>
    </form>

    <!-- container closing tag -->
</div>

<form action="{{ route('matchdays.destroy', $matchday->id) }}" id="deleteForm" method="POST">
    @csrf
    @method('DELETE')
</form>

@endsection