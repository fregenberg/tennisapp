@extends('players/layouts/app')

@section('title')
TennisApp | Spieler/Erstellen
@endsection

@section('content')

<div class="heading container-fluid shadow static-top p-3 d-flex">
    <h1 class="pt-1">Spieler</h1>
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

    <form method="POST" action="{{ route('players.store') }}">
        @csrf

        <div class="card shadow my-4 playerblurredimage">
            <div class="card-body">

                <!-- TODO Authorization: only Captains, Admins -->
                <div class="form-group row">
                    <label for="ranking" class="col-4 col-form-label col-form-label-sm">Rang</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('ranking') is-invalid @enderror" id="ranking" name="ranking" value="{{ old('ranking') }}">
                        @error('ranking')
                        <p class="invalid-feedback">{{ $errors->first('ranking') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="performance_class" class="col-4 col-form-label col-form-label-sm">LK</label>
                    <div>
                        <select class="form-control form-control-sm" id="performance_class" name="performance_class">
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
                        <input type="text" class="form-control form-control-sm @error('dtb_id') is-invalid @enderror" id="dtb_id" name="dtb_id" pattern="[0-9]{8}" placeholder="16700001" value="{{ old('dtb_id') }}">
                        @error('dtb_id')
                        <p class="invalid-feedback">{{ $errors->first('dtb_id') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="firstname" class="col-4 col-form-label col-form-label-sm">Vorname</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('firstname') is-invalid @enderror" id="firstname" name="firstname" required placeholder="Boris" value="{{ old('firstname') }}">
                        @error('firstname')
                        <p class="invalid-feedback">{{ $errors->first('firstname') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label col-form-label-sm">Name</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name" required placeholder="Becker" value="{{ old('name') }}">
                        @error('name')
                        <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nickname" class="col-4 col-form-label col-form-label-sm">Spitzname</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('nickname') is-invalid @enderror" id="nickname" name="nickname" placeholder="Bobbele" value="{{ old('nickame') }}">
                        @error('nickname')
                        <p class="invalid-feedback">{{ $errors->first('nickname') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tel_private" class="col-4 col-form-label col-form-label-sm">Tel privat</label>
                    <div>
                        <input type="tel" class="form-control form-control-sm @error('tel_private') is-invalid @enderror" id="tel_private" name="tel_private" placeholder="040 12345678" value="{{ old('tel_private') }}">
                        @error('tel_private')
                        <p class="invalid-feedback">{{ $errors->first('tel_private') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tel_mobile" class="col-4 col-form-label col-form-label-sm">Tel mobil</label>
                    <div>
                        <input type="tel" class="form-control form-control-sm @error('tel_mobile') is-invalid @enderror" id="tel_mobile" name="tel_mobile" placeholder="0171 2345678" value="{{ old('tel_mobile') }}">
                        @error('tel_mobile')
                        <p class="invalid-feedback">{{ $errors->first('tel_mobile') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthday" class="col-4 col-form-label col-form-label-sm">Geburtstag</label>
                    <div>
                        <input type="date" class="form-control form-control-sm @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') }}">
                        @error('birthday')
                        <p class="invalid-feedback">{{ $errors->first('birthday') }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Authorization: only Captains, Admins -->
                <!-- // TODO core_team (boolean checkbox) -->

                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label col-form-label-sm">E-Mail</label>
                    <div>
                        <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" required placeholder="boris.b@tennis.de" value="{{ old('email') }}">
                        @error('email')
                        <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Authorization: only Captains, Admins -->
                <div class="form-group row">
                    <label for="role" class="col-4 col-form-label col-form-label-sm">Rolle</label>
                    <div>
                        <select class="form-control form-control-sm" id="role" name="role">
                            <option selected></option>
                            <option>Captain</option>
                            <option>Admin</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-footer row justify-content-around">
                <button class="col-5 btn btn-sm footer-buttons" type="submit">Speichern</button>
                <a href="{{ route('players.index') }}" class="col-5 btn btn-sm footer-buttons text-danger" type="button">Abbrechen</a>
            </div>
        </div>
    </form>

    <!-- container closing tag -->
</div>
@endsection