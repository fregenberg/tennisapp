@extends('matchdays/layouts/app')

@section('content')
<title>Tennis-App - Termine/Erstellen</title>
</head>

<body>

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
                            <input type="date" class="form-control form-control-sm" id="gamedate" placeholder="25.05.2020" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gametime" class="col-3 col-form-label col-form-label-sm">Uhrzeit</label>
                        <div>
                            <input type="time" class="form-control form-control-sm" id="gametime" placeholder="15:00" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="col-3"></p>
                        <small class="text-muted">Mannschaften</small>
                    </div>

                    <div class="form-group row">
                        <label for="hometeam" class="col-3 col-form-label col-form-label-sm">Heim</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="hometeam" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="awayteam" class="col-3 col-form-label col-form-label-sm">Gast</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="awayteam" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="venue" class="col-3 col-form-label col-form-label-sm">Spielort</label>
                        <input type="text" class="col-6 form-control form-control-sm" id="venue" />
                        <input type="text" class="col-2 form-control form-control-sm" id="venue" />

                        <label for="venue" class="col-3 col-form-label col-form-label-sm"></label>
                        <input type="tel" class="col-3 form-control form-control-sm" id="venue" />
                        <input type="text" class="col-5 form-control form-control-sm" id="venue" />
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
                <a href="/alletermine" class="col-5 btn btn-sm btn-outline-secondary text-dark" type="button">Speichern</a>
                <a href="/alletermine" class="col-5 btn btn-sm btn-outline-secondary text-danger" type="button">Abbrechen</a>
            </div>
        </div>

        <!-- cards container closing tag -->
    </div>
    @endsection