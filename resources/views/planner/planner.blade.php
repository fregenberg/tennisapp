<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- TennisApp CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/planner.css') }}">

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>

    <title>Tennis-App | PunktspielPlaner</title>
</head>

<body>

    <div class="heading container-fluid bg-transparent shadow static-top justify-content-center p-3 d-flex">
        <h2>Punktspiel Planer</h2>
    </div>

    <div class="container pb-5 mb-5">
        <div class="card border-0 shadow my-4">

            <!-- Card header -->
            <div class="card-header">
                <form>
                    <div class="row">
                        <small class="col-4">Datum</small>
                        <small class="col-6">25.05.2020</small>
                    </div>
                    <div class="row">
                        <small class="col-4">Uhrzeit</small>
                        <small class="col-6">15:00</small>
                    </div>
                    <div class="row pt-1">
                        <small class="col-4">Heim</small>
                        <small class="col-6">neue fische</small>
                    </div>
                    <div class="row pb-1">
                        <small class="col-4">Gast</small>
                        <small class="col-6">alte fische</small>
                    </div>
                    <div class="row">
                        <small class="col-4">Spielort</small>
                        <small class="col-6">Gasstraße 6</small>
                    </div>
                    <div class="row">
                        <small class="col-4"></small>
                        <small class="col-6">22761 Hamburg</small>
                    </div>
                </form>
            </div>

            <!-- Card body -->
            <div class="card-body">
                <form>
                    <div class="row d-flex justify-content-end pb-2">
                        <small class="col-3 text-center">Ja </small>
                        <small class="col-2 text-left pr-0">? </small>
                        <small class="col-2 text-right pl-0">Nein </small>
                    </div>

                    <div class="row">
                        <p class="col-4">Stefan</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>

                    <div class="row">
                        <p class="col-4">Helge</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>

                    <div class="row">
                        <p class="col-4">Thomas</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>

                    <div class="row">
                        <p class="col-4">Karsten</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>

                    <div class="row">
                        <p class="col-4">Tim</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>

                    <div class="row">
                        <p class="col-4">Marcus</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>

                    <div class="row">
                        <p class="col-4">Fehsi</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>

                    <div class="row">
                        <p class="col-4">MaMü</p>
                        <input type="range" class="col-7 custom-range" min="1" max="4" step="1" value="1">
                    </div>
                </form>
            </div>
        </div>

        <!-- cards container closing tag -->
    </div>

    @include('includes/bottomnav')

</body>

</html>