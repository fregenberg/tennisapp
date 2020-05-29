@extends('planner/layouts/app')

@section('title')
TennisApp | AllePlaner
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Punktspiel Planer</h1>
</div>

<div class="container pb-5 mb-5">

    <div class="card shadow my-4">
        <!-- Card header -->
        <div class="card-header">
            <form>
                <div class="row">
                    <small class="col-4">Datum</small>
                    <small class="col-6">13.06.2020</small>
                </div>
                <div class="row">
                    <small class="col-4">Uhrzeit</small>
                    <small class="col-6">14:00</small>
                </div>
                <div class="row pt-1">
                    <small class="col-4">Heim</small>
                    <small class="col-6">TC Groß Borstel II</small>
                </div>
                <div class="row pb-1">
                    <small class="col-4">Gast</small>
                    <small class="col-6">THC von Horn und Hamm III</small>
                </div>
                <div class="row">
                    <small class="col-4">Spielort</small>
                    <small class="col-6">Paeplowweg 6</small>
                </div>
                <div class="row">
                    <small class="col-4"></small>
                    <small class="col-6">22453 Hamburg</small>
                </div>
            </form>
        </div>

        <!-- Card body -->
        <div class="card-body">
            <form>

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


    <div class="card shadow my-4">
        <!-- Card header -->
        <div class="card-header">
            <form>
                <div class="row">
                    <small class="col-4">Datum</small>
                    <small class="col-6">28.06.2020</small>
                </div>
                <div class="row">
                    <small class="col-4">Uhrzeit</small>
                    <small class="col-6">14:00</small>
                </div>
                <div class="row pt-1">
                    <small class="col-4">Heim</small>
                    <small class="col-6">THC von Horn und Hamm III</small>
                </div>
                <div class="row pb-1">
                    <small class="col-4">Gast</small>
                    <small class="col-6">TG Elbe Bille</small>
                </div>
                <div class="row">
                    <small class="col-4">Spielort</small>
                    <small class="col-6">Saarlandstraße 69</small>
                </div>
                <div class="row">
                    <small class="col-4"></small>
                    <small class="col-6">22303 Hamburg</small>
                </div>
            </form>
        </div>

        <!-- Card body -->
        <div class="card-body">
            <form>

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


    <div class="card shadow my-4">
        <!-- Card header -->
        <div class="card-header">
            <form>
                <div class="row">
                    <small class="col-4">Datum</small>
                    <small class="col-6">30.08.2020</small>
                </div>
                <div class="row">
                    <small class="col-4">Uhrzeit</small>
                    <small class="col-6">09:00</small>
                </div>
                <div class="row pt-1">
                    <small class="col-4">Heim</small>
                    <small class="col-6">THC von Horn und Hamm III</small>
                </div>
                <div class="row pb-1">
                    <small class="col-4">Gast</small>
                    <small class="col-6">THCC RG Hamburg</small>
                </div>
                <div class="row">
                    <small class="col-4">Spielort</small>
                    <small class="col-6">Saarlandstraße 69</small>
                </div>
                <div class="row">
                    <small class="col-4"></small>
                    <small class="col-6">22303 Hamburg</small>
                </div>
            </form>
        </div>

        <!-- Card body -->
        <div class="card-body">
            <form>

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


    <div class="card shadow my-4">
        <!-- Card header -->
        <div class="card-header">
            <form>
                <div class="row">
                    <small class="col-4">Datum</small>
                    <small class="col-6">05.09.2020</small>
                </div>
                <div class="row">
                    <small class="col-4">Uhrzeit</small>
                    <small class="col-6">14:00</small>
                </div>
                <div class="row pt-1">
                    <small class="col-4">Heim</small>
                    <small class="col-6">TG Heimfeld</small>
                </div>
                <div class="row pb-1">
                    <small class="col-4">Gast</small>
                    <small class="col-6">THC von Horn und Hamm III</small>
                </div>
                <div class="row">
                    <small class="col-4">Spielort</small>
                    <small class="col-6">Am Waldschlößchen 1</small>
                </div>
                <div class="row">
                    <small class="col-4"></small>
                    <small class="col-6">21075 Hamburg</small>
                </div>
            </form>
        </div>

        <!-- Card body -->
        <div class="card-body">
            <form>

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


    <!-- container closing tag -->
</div>

@endsection