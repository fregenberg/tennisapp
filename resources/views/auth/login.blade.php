@extends('layouts.app')

@section('title')
TennisApp | Login
@endsection

@section('content')

<div class="overlay">

    <div class="container pt-5 mt-5">
        <h3 class="pt-3 css_auth-headline">Login</h3>

        <form class="css_auth-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="control-label">{{ __('E-Mail') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="control-label">{{ __('Passwort') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <div class="animated-checkbox mb-3">
                    <label for="remember">
                        {{ __('Login merken') }}
                    </label>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-block css_bigbutton my-4">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="text-center" href="{{ route('password.request') }}">
                    {{ __('Passwort vergessen?') }}
                </a>
                @endif
            </div>
        </form>

        <!-- container closing tag -->
    </div>

    <div>
        <a href="{{ route('impressum') }}" class="text-center mb-3 css_imprint">Impressum</a>
    </div>

    <!-- overlay closing tag -->
</div>

<!-- header -->
<div class="navbar p-1">
    <div class="col-9 css_auth-image">
        <img src="images/auth_logo-transparent.png" class="img-fluid" alt="">
    </div>
    <a href="{{ route('register') }}" class="col-3 mb-1 css_auth-switch">Register</a>
</div>
@endsection