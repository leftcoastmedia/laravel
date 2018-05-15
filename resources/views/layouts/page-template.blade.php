<!DOCTYPE html>
<html>

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
<section class ="section">
    @include('components.navbar')
</section>

<section class ="section">
    <div class ="container">
        <div class ="columns">
            <div class ="column is-11 page-box">
                <div class="pg-title"> @yield('page-title')
                </div>
            </div>
        </div>
    </div>
</section>

<section class ="section">
    @yield('page-content')
</section>




</body>

</html>
