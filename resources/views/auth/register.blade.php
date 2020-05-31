@extends('layouts.app')

@section('title')
TennisApp | Register
@endsection

@section('content')

<div class="overlay">

    <div class="container pt-5 mt-5">
        <h3 class="pt-3 css_auth-headline">Register</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="card bg-transparent border-0 shadow pt-1 mb-5 css_cards">
                <div class="card-body">

                    <div class="form-group row">
                        <label for="performance_class" class="col-4 col-form-label col-form-label-sm">LK</label>
                        <div>
                            <select class="form-control form-control-sm" id="performance_class" name="performance_class">
                                <option></option>
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
                            <input type="text" class="form-control form-control-sm" id="dtb_id" name="dtb_id" pattern="[0-9]{8}" placeholder="16700001" value="{{ old('dtb_id') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="firstname" class="col-4 col-form-label col-form-label-sm">Vorname*</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" required placeholder="Boris" value="{{ old('firstname') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label col-form-label-sm">{{ __('Name*') }}</label>
                        <div>
                            <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name" required placeholder="Becker" value="{{ old('name') }}" autocomplete="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nickname" class="col-4 col-form-label col-form-label-sm">Spitzname</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="nickname" name="nickname" placeholder="Bobbele" value="{{ old('nickame') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthday" class="col-4 col-form-label col-form-label-sm">Geburtstag</label>
                        <div>
                            <input type="date" class="form-control form-control-sm" id="birthday" name="birthday" value="{{ old('birthday') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tel_private" class="col-4 col-form-label col-form-label-sm">Tel privat</label>
                        <div>
                            <input type="tel" class="form-control form-control-sm" id="tel_private" name="tel_private" placeholder="040 12345678" value="{{ old('tel_private') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tel_mobile" class="col-4 col-form-label col-form-label-sm">Tel mobil</label>
                        <div>
                            <input type="tel" class="form-control form-control-sm" id="tel_mobile" name="tel_mobile" placeholder="0171 2345678" value="{{ old('tel_mobile') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label col-form-label-sm">{{ __('E-Mail*') }}</label>
                        <div>
                            <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" required placeholder="boris.b@tennis.de" value="{{ old('email') }}" autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label col-form-label-sm">{{ __('Passwort*') }}</label>
                        <div>
                            <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-4 col-form-label col-form-label-sm">{{ __('Bestätigung*') }}</label>
                        <div>
                            <input type="password" class="form-control form-control-sm" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="pt-3">
                        <button type="submit" class="btn btn-primary btn-block css_bigbutton">
                            {{ __('Register') }}
                        </button>
                    </div>

                </div>
            </div>

        </form>

        <!-- container closing tag -->
    </div>

    <!-- overlay closing tag -->
</div>

<!-- header -->
<div class="navbar p-1">
    <div class="col-9 css_auth-image">
        <img src="images/auth_logo-transparent.png" class="img-fluid" alt="">
    </div>
    <a href="{{ route('login') }}" class="col-3 mb-1 css_auth-switch">Login</a>
</div>
@endsection