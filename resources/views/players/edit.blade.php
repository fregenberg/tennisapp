@extends('players/layouts/app')

@section('title')
TennisApp | Spieler/Bearbeiten
@endsection

@section('content')

<div class="container-fluid static-top p-3 css_heading">
    <h1 class="pt-1 css_headline">Spieler</h1>
</div>

<div class="container pb-5 mb-5">

    <form method="POST" action="{{ route('players.update', $player->id) }}">
        @csrf
        @method('PATCH')

        <div class="card shadow my-4 css_cards css_playercardsbackground">
            <div class="card-body">

                @if(Gate::check('isadmin') || Gate::check('iscaptain'))
                <div class="form-group row">
                    <label for="ranking" class="col-4 col-form-label col-form-label-sm">Rang</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('ranking') is-invalid @enderror" id="ranking" name="ranking" value="{{ old('ranking') ?? $player->ranking }}">
                        @error('ranking')
                        <p class="invalid-feedback">{{ $errors->first('ranking') }}</p>
                        @enderror
                    </div>
                </div>
                @endif

                <div class="form-group row">
                    <label for="performance_class" class="col-4 col-form-label col-form-label-sm">LK</label>
                    <div>
                        <select class="form-control form-control-sm" id="performance_class" name="performance_class">

                            <option @if (($player->performance_class) == '') selected @endif></option>
                            <option @if (($player->performance_class) == 'LK1') selected @endif>LK1</option>
                            <option @if (($player->performance_class) == 'LK2') selected @endif>LK2</option>
                            <option @if (($player->performance_class) == 'LK3') selected @endif>LK3</option>
                            <option @if (($player->performance_class) == 'LK4') selected @endif>LK4</option>
                            <option @if (($player->performance_class) == 'LK5') selected @endif>LK5</option>
                            <option @if (($player->performance_class) == 'LK6') selected @endif>LK6</option>
                            <option @if (($player->performance_class) == 'LK7') selected @endif>LK7</option>
                            <option @if (($player->performance_class) == 'LK8') selected @endif>LK8</option>
                            <option @if (($player->performance_class) == 'LK9') selected @endif>LK9</option>
                            <option @if (($player->performance_class) == 'LK10') selected @endif>LK10</option>
                            <option @if (($player->performance_class) == 'LK11') selected @endif>LK11</option>
                            <option @if (($player->performance_class) == 'LK12') selected @endif>LK12</option>
                            <option @if (($player->performance_class) == 'LK13') selected @endif>LK13</option>
                            <option @if (($player->performance_class) == 'LK14') selected @endif>LK14</option>
                            <option @if (($player->performance_class) == 'LK15') selected @endif>LK15</option>
                            <option @if (($player->performance_class) == 'LK16') selected @endif>LK16</option>
                            <option @if (($player->performance_class) == 'LK17') selected @endif>LK17</option>
                            <option @if (($player->performance_class) == 'LK18') selected @endif>LK18</option>
                            <option @if (($player->performance_class) == 'LK19') selected @endif>LK19</option>
                            <option @if (($player->performance_class) == 'LK20') selected @endif>LK20</option>
                            <option @if (($player->performance_class) == 'LK21') selected @endif>LK21</option>
                            <option @if (($player->performance_class) == 'LK22') selected @endif>LK22</option>
                            <option @if (($player->performance_class) == 'LK23') selected @endif>LK23</option>

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dtb_id" class="col-4 col-form-label col-form-label-sm">ID-Nummer</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('dtb_id') is-invalid @enderror" id="dtb_id" name="dtb_id" pattern="[0-9]{8}" value="{{ old('dtb_id') ?? $player->dtb_id }}">
                        @error('dtb_id')
                        <p class="invalid-feedback">{{ $errors->first('dtb_id') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="firstname" class="col-4 col-form-label col-form-label-sm">Vorname</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('firstname') is-invalid @enderror" id="firstname" name="firstname" required value="{{ old('firstname') ?? $player->firstname }}">
                        @error('firstname')
                        <p class="invalid-feedback">{{ $errors->first('firstname') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label col-form-label-sm">Name</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') ?? $player->name }}">
                        @error('name')
                        <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nickname" class="col-4 col-form-label col-form-label-sm">Spitzname</label>
                    <div>
                        <input type="text" class="form-control form-control-sm @error('nickname') is-invalid @enderror" id="nickname" name="nickname" value="{{ old('nickame') ?? $player->nickname }}">
                        @error('nickname')
                        <p class="invalid-feedback">{{ $errors->first('nickname') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthday" class="col-4 col-form-label col-form-label-sm">Geburtstag</label>
                    <div>
                        <input type="date" class="form-control form-control-sm @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') ?? $player->birthday }}">
                        @error('birthday')
                        <p class="invalid-feedback">{{ $errors->first('birthday') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tel_private" class="col-4 col-form-label col-form-label-sm">Tel privat</label>
                    <div>
                        <input type="tel" class="form-control form-control-sm @error('tel_private') is-invalid @enderror" id="tel_private" name="tel_private" value="{{ old('tel_private') ?? $player->tel_private }}">
                        @error('tel_private')
                        <p class="invalid-feedback">{{ $errors->first('tel_private') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tel_mobile" class="col-4 col-form-label col-form-label-sm">Tel mobil</label>
                    <div>
                        <input type="tel" class="form-control form-control-sm @error('tel_mobile') is-invalid @enderror" id="tel_mobile" name="tel_mobile" value="{{ old('tel_mobile') ?? $player->tel_mobile }}">
                        @error('tel_mobile')
                        <p class="invalid-feedback">{{ $errors->first('tel_mobile') }}</p>
                        @enderror
                    </div>
                </div>

                <!-- // @if(Gate::check('isadmin') || Gate::check('iscaptain')) -->
                <!-- // TODO core_team (boolean checkbox) -->
                <!-- @endif -->

                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label col-form-label-sm">E-Mail</label>
                    <div>
                        <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') ?? $player->email }}">
                        @error('email')
                        <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                        @enderror
                    </div>
                </div>

                <!-- TODO Set new password -->
                <div class="form-group row">
                    <label for="password" class="col-4 col-form-label col-form-label-sm">Passwort</label>
                    <div>
                        <input type="password" class="form-control form-control-sm" id="password" name="password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-4 col-form-label col-form-label-sm">Bestätigung</label>
                    <div>
                        <input type="password" class="form-control form-control-sm" id="password-confirm" name="password_confirmation">
                    </div>
                </div>

                @if(Gate::check('isadmin') || Gate::check('iscaptain'))
                <div class="form-group row">
                    <label for="role" class="col-4 col-form-label col-form-label-sm">Rolle</label>
                    <div>
                        <select class="form-control form-control-sm" id="role" name="role" value="{{ old('role') ?? $player->role }}">
                            <option @if (($player->role) == '') selected @endif></option>
                            <option @if (($player->role) == 'Captain') selected @endif>Captain</option>
                            <option @if (($player->role) == 'Admin') selected @endif>Admin</option>
                        </select>
                    </div>
                </div>
                @endif
            </div>

            <div class="card-footer row css_footer-buttons-space">
                <button class="col-5 btn btn-sm css_footer-buttons" type="submit">Speichern</button>
                <a class="col-5 btn btn-sm css_footer-buttons text-danger" onclick="deleteForm.submit(); return false;">Löschen</a>
            </div>
        </div>
    </form>
    <!-- container closing tag -->
</div>

<form action="{{ route('players.destroy', $player->id) }}" id="deleteForm" method="POST">
    @csrf
    @method('DELETE')
</form>

@endsection