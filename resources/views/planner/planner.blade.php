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

                    <!-- // TODO search core_team (≈ bookmarking) -->

                    <div class="row">
                        <p class="col-4">Stefan</p>
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

                    <div class="row">
                        <p class="col-4">Helge</p>
                        <ul class="col-7 entry-list">
                            <li class="participation">
                                <input type="radio" name="helge" id="helge_yes" class="input" value="yes">
                                <label for="helge_yes" class="willingness">Ja</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="helge" id="helge_maybe" class="input" value="maybe">
                                <label for="helge_maybe" class="willingness">Vielleicht</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="helge" id="helge_no" class="input" value="no">
                                <label for="helge_no" class="willingness">Nein</label>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <p class="col-4">Thomas</p>
                        <ul class="col-7 entry-list">
                            <li class="participation">
                                <input type="radio" name="thomas" id="thomas_yes" class="input" value="yes">
                                <label for="thomas_yes" class="willingness">Ja</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="thomas" id="thomas_maybe" class="input" value="maybe">
                                <label for="thomas_maybe" class="willingness">Vielleicht</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="thomas" id="thomas_no" class="input" value="no">
                                <label for="thomas_no" class="willingness">Nein</label>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <p class="col-4">Karsten</p>
                        <ul class="col-7 entry-list">
                            <li class="participation">
                                <input type="radio" name="karsten" id="karsten_yes" class="input" value="yes">
                                <label for="karsten_yes" class="willingness">Ja</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="karsten" id="karsten_maybe" class="input" value="maybe">
                                <label for="karsten_maybe" class="willingness">Vielleicht</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="karsten" id="karsten_no" class="input" value="no">
                                <label for="karsten_no" class="willingness">Nein</label>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <p class="col-4">Tim</p>
                        <ul class="col-7 entry-list">
                            <li class="participation">
                                <input type="radio" name="tim" id="tim_yes" class="input" value="yes">
                                <label for="tim_yes" class="willingness">Ja</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="tim" id="tim_maybe" class="input" value="maybe">
                                <label for="tim_maybe" class="willingness">Vielleicht</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="tim" id="tim_no" class="input" value="no">
                                <label for="tim_no" class="willingness">Nein</label>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <p class="col-4">Marcus</p>
                        <ul class="col-7 entry-list">
                            <li class="participation">
                                <input type="radio" name="marcus" id="marcus_yes" class="input" value="yes">
                                <label for="marcus_yes" class="willingness">Ja</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="marcus" id="marcus_maybe" class="input" value="maybe">
                                <label for="marcus_maybe" class="willingness">Vielleicht</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="marcus" id="marcus_no" class="input" value="no">
                                <label for="marcus_no" class="willingness">Nein</label>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <p class="col-4">Fehsi</p>
                        <ul class="col-7 entry-list">
                            <li class="participation">
                                <input type="radio" name="fehsi" id="fehsi_yes" class="input" value="yes">
                                <label for="fehsi_yes" class="willingness">Ja</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="fehsi" id="fehsi_maybe" class="input" value="maybe">
                                <label for="fehsi_maybe" class="willingness">Vielleicht</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="fehsi" id="fehsi_no" class="input" value="no">
                                <label for="fehsi_no" class="willingness">Nein</label>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <p class="col-4">MaMü</p>
                        <ul class="col-7 entry-list">
                            <li class="participation">
                                <input type="radio" name="binni" id="binni_yes" class="input" value="yes">
                                <label for="binni_yes" class="willingness">Ja</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="binni" id="binni_maybe" class="input" value="maybe">
                                <label for="binni_maybe" class="willingness">Vielleicht</label>
                            </li>
                            <li class="participation">
                                <input type="radio" name="binni" id="binni_no" class="input" value="no">
                                <label for="binni_no" class="willingness">Nein</label>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>


        <div class="pt-2">
            <a href="/planer" class="btn btn-primary btn-block" type="button">Speichern</a>
        </div>



        <!-- cards container closing tag -->
    </div>

    @include('includes/bottomnav')

</body>

</html>