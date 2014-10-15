<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            {{ $title }}
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">Everon</a>
                </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{{ URL::to('päähallinta') }}}">Pääsivu</a></li>
                        <li><a href="{{{ URL::to('') }}}">Isännän Hallinta</a></li>
                        <li><a href="{{{ URL::to('') }}}">Sijainnin Hallinta</a></li>
                        <li><a href="{{{ URL::to('') }}}">Laitehallinta Hallinta</a></li>
                        <li><a href="{{{ URL::to('') }}}">Toimijoiden Hallinta</a></li>
                        <li><a href="{{{ URL::to('') }}}">Hälytysten Hallinta</a></li>
                        <li><a href="{{{ URL::to('') }}}">Lokit ja raportit</a></li>
                        <li><a href="{{{ URL::to('logout') }}}">Kirjaudu ulos</a></li>

                    </ul> 
                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container">

            <!-- Content -->
            @yield('content')
            <div class="col-lg-6">



            </div>
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

    </body>
</html>