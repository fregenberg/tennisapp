<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Tennis-App</title>

    <!-- Styles -->
    <style>
        body {
            background: url("../images/logo_transparent.png") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: contain;
            -o-background-size: cover;
            background-color: #fdfb50;
        }

        .frontpage {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            z-index: 1;
            top: 0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href="{{ url('/') }}" class="frontpage">
</body>

</html>