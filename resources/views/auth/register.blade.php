@extends('layouts.app')

@section('title')
TennisApp | Register
@endsection

@section('content')

<div class="overlay">

    <div class="container pt-5 mt-5">
        <h3 class="font-weight-normal pt-3">Register</h3>
        <!-- <div class="row justify-content-center">
                <div class="col-md-8"> -->
        <div class="card bg-transparent border-0 shadow pt-1 mb-5">
            <!-- // <div class="card-header">{{ __('Register') }}</div> -->

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
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
                        <label for="id" class="col-4 col-form-label col-form-label-sm">ID-Nummer</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="id" pattern="[0-9]{8}" placeholder="16700001">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vorname" class="col-4 col-form-label col-form-label-sm">Vorname*</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="vorname" required placeholder="Otto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label col-form-label-sm">{{ __('Name*') }}</label>

                        <div>
                            <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" placeholder="Mustermann" name="name" value="{{ old('name') }}" required autocomplete="name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nickname" class="col-4 col-form-label col-form-label-sm">Spitzname</label>
                        <div>
                            <input type="text" class="form-control form-control-sm" id="nickname" placeholder="Bobbele">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telprivat" class="col-4 col-form-label col-form-label-sm">Tel privat</label>
                        <div>
                            <input type="tel" class="form-control form-control-sm" id="telprivat" placeholder="+49 40 12345678">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telmobil" class="col-4 col-form-label col-form-label-sm">Tel mobil</label>
                        <div>
                            <input type="tel" class="form-control form-control-sm" id="telmobil" placeholder="+49 171 2345678">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthday" class="col-4 col-form-label col-form-label-sm">Geburtstag</label>
                        <div>
                            <input type="date" class="form-control form-control-sm" id="birthday" value="1967-11-22">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label col-form-label-sm">{{ __('E-Mail*') }}</label>

                        <div>
                            <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="otto@mustermann.de">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label col-form-label-sm">{{ __('Passwort*') }}</label>

                        <div>
                            <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
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
                        <a href="/login" class="btn btn-primary btn-block" type="button">{{ __('Register') }}</a>
                        <!-- <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
//                                    {{ __('Register') }}
                                </button>
                            </div> -->
                    </div>
                </form>
            </div>
        </div>

        <!-- container closing tag -->
    </div>

    <!-- overlay closing tag -->
</div>

<!-- header -->
<div class="navbar p-1">
    <div class="col-9 image">
        <img src="images/logo_transparent.png" class="img-fluid" alt="">
    </div>
    <a href="{{ route('login') }}" class="col-3 mb-1">Login</a>
</div>
@endsection