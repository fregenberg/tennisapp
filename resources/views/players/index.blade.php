@extends('players/layouts/app')

@section('title')
TennisApp | AlleSpieler
@endsection

@section('content')

<div class="heading container-fluid bg-transparent shadow static-top justify-content-center p-3 d-flex">
    <h2>Alle Spieler</h2>
</div>

<!-- // TODO search core_team (≈ bookmarking) -->

<div class="container pb-5 mb-5">

<<<<<<< HEAD
    <!-- Player-Card_1 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body card-body-background">
            <form>
                <div class="row">
                    <small class="col-11">LK13 | ID 16751724 | Heckerodt, Stefan</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
=======
    <!-- Player-Card_dynamic -->
    @foreach ($players->sortBy('ranking') as $player)
    <div class="card shadow my-4 text-center lineimage">
        <div class="card-body py-0">
            <p class="m-1">{{ $player->ranking }}. {{ $player->firstname }} {{ $player->name }}</p>
            <a href="{{ route('players.show', $player->id) }}" class="stretched-link"></a>
>>>>>>> dev
        </div>
    </div>

<<<<<<< HEAD
    <!-- Player-Card_2 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <small class="col-11">LK13 | ID 16804547 | Schmidt, Helge</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
        </div>
    </div>

    <!-- Player-Card_3 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <small class="col-11">LK14 | ID 17301022 | Stiehl, Thomas</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
        </div>
    </div>

    <!-- Player-Card_4 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <small class="col-11">LK15 | ID 16950127 | Veltmann, Karsten</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
        </div>
    </div>

    <!-- Player-Card_5 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <small class="col-11">LK15 | ID 17451094 | Freienberg, Tim</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
        </div>
    </div>

    <!-- Player-Card_6 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <small class="col-11">LK16 | ID 16850994 | Neumann, Marcus</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
        </div>
    </div>

    <!-- Player-Card_7 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <small class="col-11">LK17 | ID 16351260 | Fehsenfeld, Stephan</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
        </div>
    </div>

    <!-- Player-Card_8 -->
    <div class="card border-0 shadow my-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <small class="col-11">LK20 | ID 17452378 | Müller, Markus</small>
                    <small class="text-right col-11">0151 29114492 | Tennis@TimFreienberg.de</small>
                </div>
                <a href="/spieler" class="stretched-link"></a>
            </form>
        </div>
    </div>

    <div class="pt-4">
        <a href="/spieler/erstellen" class="btn btn-primary btn-block" type="button">neuer Spieler</a>
=======
    <div class="interval">
        <a href="{{ route('players.create') }}" class="bigbutton btn btn-primary btn-block" type="button">neuer Spieler</a>
>>>>>>> dev
    </div>

    <!-- cards container closing tag -->
</div>

@endsection