@extends('matchdays/layouts/app')

@section('title')
TennisApp | Termine/Erstellen
@endsection

@section('content')

<div class="heading container-fluid bg-transparent shadow static-top justify-content-center p-3 d-flex">
    <h2>Spieltermine</h2>
</div>

<div class="container pb-5">

    <!-- Card -->
    <div class="card border-0 shadow my-5">
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="gamedate" class="col-3 col-form-label col-form-label-sm">Datum</label>
                    <div>
                        <input type="date" class="form-control form-control-sm" id="gamedate" value="2020-05-25" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gametime" class="col-3 col-form-label col-form-label-sm">Uhrzeit</label>
                    <div>
                        <input type="time" class="form-control form-control-sm" id="gametime" value="15:00" />
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-3"></p>
                    <small class="text-muted">Mannschaften</small>
                </div>

                <div class="form-group row">
                    <label for="hometeam" class="col-3 col-form-label col-form-label-sm">Heim</label>
                    <div>
                        <input type="text" class="form-control form-control-sm" id="hometeam" placeholder="THC neue fische e.V." />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="awayteam" class="col-3 col-form-label col-form-label-sm">Gast</label>
                    <div>
                        <input type="text" class="form-control form-control-sm" id="awayteam" placeholder="THC alte fische e.V." />
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="venue" class="col-3 col-form-label col-form-label-sm">Spielort</label>
                    <input type="text" class="col-6 form-control form-control-sm" id="venue" placeholder="Gasstraße" />
                    <input type="text" class="col-2 form-control form-control-sm" id="venue" placeholder="6" />

                    <label for="venue" class="col-3 col-form-label col-form-label-sm"></label>
                    <input type="text" class="col-3 form-control form-control-sm" id="venue" pattern="[0-9]{5}" placeholder="22761" />
                    <input type="text" class="col-5 form-control form-control-sm" id="venue" placeholder="Hamburg" />
                </div>

                <div class="form-group row">
                    <label for="result" class="col-4 col-form-label col-form-label-sm">Ergebnis</label>
                    <select class="col-2 form-control form-control-sm" id="result">
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
                    <select class="col-2 form-control form-control-sm" id="result">
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
            </form>
        </div>
        <div class="card-footer row justify-content-around">
            <a href="{{ route('home') }}" class="col-5 btn btn-sm footer-buttons" type="button">Speichern</a>
            <a href="{{ route('home') }}" class="col-5 btn btn-sm footer-buttons text-danger" type="button">Abbrechen</a>
        </div>
    </div>

    <!-- cards container closing tag -->
</div>
@endsection