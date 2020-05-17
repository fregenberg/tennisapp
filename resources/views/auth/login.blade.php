@extends('layouts.app')

@section('title')
TennisApp | Login
@endsection

@section('content')

<div class="overlay">

    <div class="container pt-5 mt-5">
        <h3 class="font-weight-normal pt-3">Login</h3>
        <!-- <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
//                        <div class="card-header">{{ __('Login') }}</div>
                        <div class="card-body">  -->

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="control-label">{{ __('E-Mail') }}</label>

                <!-- <div class="col-md-6"> -->
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- </div> -->
            </div>

            <div class="form-group">
                <label for="password" class="control-label">{{ __('Passwort') }}</label>

                <!-- <div class="col-md-6"> -->
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- </div> -->
            </div>

            <div class="form-group">
                <div class="animated-checkbox mb-3">
                    <!-- <div class="col-md-6 offset-md-4"> -->
                    <!-- <div class="form-check"> -->
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        {{ __('Login merken') }}
                    </label>
                    <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-block my-4">
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

    <!-- overlay closing tag -->
</div>

<!-- header -->
<div class="navbar p-1">
    <div class="col-9 image">
        <img src="images/logo_transparent.png" class="img-fluid" alt="">
    </div>
    <a href="{{ url('/register') }}" class="col-3 mb-1">Register</a>
</div>
@endsection