@extends('players/layouts/app')

@section('title')
TennisApp | Spieler/Erstellen
@endsection

@section('content')

<div class="overlay">

    <div class="heading container-fluid bg-transparent shadow static-top justify-content-center p-3 d-flex">
        <h2>Spieler</h2>
    </div>

    <div class="container pb-5">

        <div class="card bg-transparent border-0 shadow pt-1 mb-5">
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="lk" class="col-4 col-form-label col-form-label-sm">LK</label>
                        <div>
                            <select class="form-control form-control-sm" id="lk">
                                <option>LK1</option>
                                <option>LK2</option>
                                <option>LK3</option>
                                <option>LK4</option>
                                <option>LK5</option>
                                <option>LK6</option>
                                <option>LK7</option>
                                <option>LK8</option>
                                <option>LK9</option>
                                <option>LK10</option>
                                <option>LK11</option>
                                <option>LK12</option>
                                <option>LK13</option>
                                <option>LK14</option>
                                <option>LK15</option>
                                <option>LK16</option>
                                <option>LK17</option>
                                <option>LK18</option>
                                <option>LK19</option>
                                <option>LK20</option>
                                <option>LK21</option>
                                <option>LK22</option>
                                <option selected>LK23</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dtb_id" class="col-4 col-form-label col-form-label-sm">ID-Nummer</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="dtb_id" pattern="[0-9]{8}" placeholder="16700001">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="first_name" class="col-4 col-form-label col-form-label-sm">Vorname</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="first_name" required placeholder="Otto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label col-form-label-sm">Name</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="name" required placeholder="Mustermann">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nickname" class="col-4 col-form-label col-form-label-sm">Spitzname</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="nickname" placeholder="Bobbele">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tel_private" class="col-4 col-form-label col-form-label-sm">Tel privat</label>
                        <div>
                            <input type="tel" class="form-control form-control-sm" id="tel_private" placeholder="+49 40 12345678">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tel_mobile" class="col-4 col-form-label col-form-label-sm">Tel mobil</label>
                        <div>
                            <input type="tel" class="form-control form-control-sm" id="tel_mobile" placeholder="+49 171 2345678">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthday" class="col-4 col-form-label col-form-label-sm">Geburtstag</label>
                        <div>
                            <input type="date" class="form-control form-control-sm" id="birthday" value="1967-11-22">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label col-form-label-sm">E-Mail</label>
                        <div>
                            <input type="email" class="form-control form-control-sm" id="email" required placeholder="otto@mustermann.de">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label col-form-label-sm">Passwort</label>
                        <div>
                            <input type="password" class="form-control form-control-sm" id="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="confirmation" class="col-4 col-form-label col-form-label-sm">Bestätigung</label>
                        <div>
                            <input type="password" class="form-control form-control-sm" id="confirmation">
                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer row justify-content-around">
                <a href="/spieler" class="col-5 btn btn-primary btn-sm btn-block mt-2" type="button">Speichern</a>
                <a href="/error" class="col-5 btn btn-primary btn-sm btn-block text-danger" type="button">Abbrechen</a>
            </div>
        </div>

        <!-- container closing tag -->
    </div>

    <!-- overlay closing tag -->
</div>

@endsection