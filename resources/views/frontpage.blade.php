<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel {{ app()->version() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class='embed-container'>
    <iframe src='https://www.youtube.com/embed/-6UwVS2Xo-Q' frameborder='0' allowfullscreen>

    </iframe>
</div>

<section class="mal-hero">
    <div class="mal-hero-inner">
        <h1>My awesome website</h1>
        <h2>Look at this website and bask in its amazing glory!</h2>
        <a href="https://example.com/" class="btn">Go ahead...</a>
    </div>
</section>

</body>
</html>
