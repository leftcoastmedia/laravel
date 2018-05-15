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

        <!-- Styles -->


    </head>
    <body>
    <section class="hero is-transparent is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <header class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item">
                            <img src="{{url('images/campaign-assets/mal-monochrome.png')}}" alt="Logo">
                        </a>
                        <span class="navbar-burger burger" >
            <span></span>
            <span></span>
            <span></span>
          </span>
                    </div>
                    <div  class="navbar-menu">
                        <div class="navbar-end">
                            <a class="navbar-item is-active">
                                Home
                            </a>
                            <a class="navbar-item">
                                Examples
                            </a>
                            <a class="navbar-item">
                                Documentation
                            </a>

                        </div>
                    </div>
                </div>

            </header>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body is-fullwidth">
            <div class="splash-video">

                <div class='embed-container'>
                    <iframe src='https://www.youtube.com/embed//-6UwVS2Xo-Q' frameborder='0' allowfullscreen>

                    </iframe>
                </div>
            </div>
        </div>



            <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth">
                <div class="container">
                    <ul>
                        <li class="is-active"><a>Overview</a></li>
                        <li><a>Modifiers</a></li>
                        <li><a>Grid</a></li>
                        <li><a>Elements</a></li>
                        <li><a>Components</a></li>
                        <li><a>Layout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>



    </body>
    <script type="text/javascript">
        (function() {
            var burger = document.querySelector('.burger');
            var nav = document.querySelector('#'+burger.dataset.target);
            burger.addEventListener('click', function(){
                burger.classList.toggle('is-active');
                nav.classList.toggle('is-active');
            });
        })();
    </script>


</html>
