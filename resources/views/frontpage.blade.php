@desktop
<h1>Desktop view</h1>
@elsedesktop
<h1>Mobile view</h1>
@enddesktop
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<section class ="hero full-height">
    <div class ="hero-body">
    <div class='embed-container'>
        <iframe src='https://www.youtube.com/embed//-6UwVS2Xo-Q' frameborder='0' allowfullscreen>

        </iframe>
    </div>
        <nav class="navbar" id = "front-nav">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="../">
                        <img src="{{url('public/images/campaign-assets/m-logosmall.png)}}" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
                        <span></span>
                        <span></span>
                        </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                            <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-home"></i>
                  </span>
                            <span>Home</span>
                            </a>
                            </span>
                        <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-superpowers"></i>
                  </span>
                            <span>Examples</span>
                            </a>
                            </span>
                        <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-book"></i>
                  </span>
                            <span>Documentation</span>
                            </a>
                            </span>
                        <span class="navbar-item">
                <a class="button is-white is-outlined" href="https://github.com/dansup/bulma-templates/blob/master/templates/landing.html">
                  <span class="icon">
                    <i class="fa fa-github"></i>
                  </span>
                            <span>View Source</span>
                            </a>
                            </span>
                    </div>
                </div>
        </nav>
    </div>

</section>



<script type="text/javascript">
    (function () {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#' + burger.dataset.target);
        burger.addEventListener('click', function () {
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    })();
</script>

</body>

</html>
