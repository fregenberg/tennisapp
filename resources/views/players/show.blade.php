@extends('players/layouts/app')

@section('content')

<title>Tennis-App - Spieler</title>
</head>

<body>
    <div class="overlay">

        <div class="heading container-fluid bg-transparent shadow static-top justify-content-center p-3 d-flex">
            <h2>Spieler</h2>
        </div>

        <div class="container pb-5">

            <div class="card bg-transparent border-0 shadow pt-1 mb-5">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <p class="col-5">LK</p>
                            <p class="col-7"><strong>LK15</strong></p>
                        </div>

                        <div class="row">
                            <p class="col-5">ID-Nummer</p>
                            <p class="col-7"><strong>17451094</strong></p>
                        </div>

                        <div class="row">
                            <p class="col-5">Vorname</p>
                            <p class="col-7"><strong>Tim</strong></p>
                        </div>

                        <div class="row">
                            <p class="col-5">Name</p>
                            <p class="col-7"><strong>Freienberg</strong></p>
                        </div>

                        <div class="row">
                            <p class="col-5">Spitzname</p>
                            <p class="col-7"><strong></strong></p>
                        </div>

                        <div class="row">
                            <p class="col-5">Tel privat</p>
                            <a href="tel:+494087976551" class="col-7"><strong>040 87976551</strong></a>
                        </div>

                        <div class="row">
                            <p class="col-5">Tel mobil</p>
                            <a href="https://wa.me/4915129114492?Yannik%ist%ein%toller%Typ" class="col-7"><strong>0151 29114492</strong></a> <!-- tel:+4915129114492 -->
                        </div>

                        <div class="row">
                            <p class="col-5">Geburtstag</p>
                            <p class="col-7"><strong>08.01.1974</strong></p>
                        </div>

                        <div class="row">
                            <p class="col-4">E-Mail</p>
                            <a href="mailto:Tennis@TimFreienberg.de" class="col-8">Tennis@TimFreienberg.de</a>
                        </div>

                        <div class="row pt-4">
                            <a href="/spieler/bearbeiten" class="btn btn-primary btn-block" type="button">Bearbeiten</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- container closing tag -->
        </div>

        <!-- overlay closing tag -->
    </div>

    @endsection