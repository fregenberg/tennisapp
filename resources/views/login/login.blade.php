@extends('login/layouts/app')

@section('content')
<title>Tennis-App - Login</title>
</head>

<body>
    <div class="overlay">

        <div class="container pt-5 mt-5">
            <h3 class="font-weight-normal pt-3">Login</h3>

            <form class="login-form">
                <div class="form-group">
                    <label class="control-label">E-Mail</label>
                    <input type="email" placeholder="E-Mail" class="form-control" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">Passwort</label>
                    <input type="password" required placeholder="Passwort" class="form-control" autofocus>
                </div>
                <div class="form-group">
                    <div class="animated-checkbox mb-3">
                        <label>
                            <input type="checkbox"> Login merken
                        </label>
                    </div>
                </div>
                <div class="py-4">
                    <a href="/alletermine" class="btn btn-primary btn-block" type="button">Login</a>
                </div>

                <div class="text-center">
                    <a href="#">Passwort vergessen?</a>
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
        <a href="/register" class="col-3 mb-1">Register</a>
    </div>
    @endsection