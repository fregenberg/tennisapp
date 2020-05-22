@extends('matchdays/layouts/app')

@section('title')
TennisApp | Termine/Erstellen
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

    <form method="POST" action="{{ route('matchdays.store') }}">
        @csrf

        <div class="card shadow my-4">
            <div class="card-body">

                <div class="form-group row">
                    <label for="gamedate" class="col-3 col-form-label col-form-label-sm">Datum</label>
                    <div>
                        <input type="date" class="form-control form-control-sm @error('gamedate') is-invalid @enderror" id="gamedate" name="gamedate" value="{{ old('gamedate') }}">
                        @error('gamedate')
                        <p class="invalid-feedback">{{ $errors->first('gamedate') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gametime" class="col-3 col-form-label col-form-label-sm">Uhrzeit</label>
                    <div>
                        <input type="time" class="form-control form-control-sm @error('gametime') is-invalid @enderror" id="gametime" name="gametime" value="{{ old('gametime') }}">
                        @error('gametime')
                        <p class="invalid-feedback">{{ $errors->first('gametime') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hometeam" class="col-3 col-form-label col-form-label-sm">Heim</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('hometeam') is-invalid @enderror" id="hometeam" name="hometeam" placeholder="THC neue fische e.V." value="{{ old('hometeam') }}">
                        @error('hometeam')
                        <p class="invalid-feedback">{{ $errors->first('hometeam') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="awayteam" class="col-3 col-form-label col-form-label-sm">Gast</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('awayteam') is-invalid @enderror" id="awayteam" name="awayteam" placeholder="THC alte fische e.V." value="{{ old('awayteam') }}">
                        @error('awayteam')
                        <p class="invalid-feedback">{{ $errors->first('awayteam') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="venue" class="col-3 col-form-label col-form-label-sm">Spielort</label>
                    <input type="text" class="col-6 form-control form-control-sm @error('venue_street') is-invalid @enderror" id="venue" name="venue_street" placeholder="Gasstraße" value="{{ old('venue_street') }}">
                    <input type="text" class="col-2 form-control form-control-sm @error('venue_housenumber') is-invalid @enderror" id="venue" name="venue_housenumber" placeholder="6" value="{{ old('venue_housenumber') }}">

                    <label for="venue" class="col-3 col-form-label col-form-label-sm"></label>
                    <input type="text" class="col-3 form-control form-control-sm @error('venue_zip') is-invalid @enderror" id="venue" name="venue_zip" pattern="[0-9]{5}" placeholder="22761" value="{{ old('venue_zip') }}">
                    <input type="text" class="col-5 form-control form-control-sm @error('venue_city') is-invalid @enderror" id="venue" name="venue_city" placeholder="Hamburg" value="{{ old('venue_city') }}">
                </div>

                <div class="form-group row">
                    <label for="result" class="col-4 col-form-label col-form-label-sm">Ergebnis</label>
                    <select class="col-2 form-control form-control-sm" id="result" name="result_hometeam">
                        <option selected>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                    </select>
                    <select class="col-2 form-control form-control-sm" id="result" name="result_awayteam">
                        <option selected>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                    </select>
                </div>
            </div>
            <div class="card-footer row justify-content-around">
                <button class="col-5 btn btn-sm footer-buttons" type="submit">Speichern</button>
                <a href="{{ route('home') }}" class="col-5 btn btn-sm footer-buttons text-danger" type="button">Abbrechen</a>
            </div>
        </div>
    </form>

    <!-- container closing tag -->
</div>
@endsection